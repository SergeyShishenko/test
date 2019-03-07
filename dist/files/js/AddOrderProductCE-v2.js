var selection = [];
var nonCE = [];
var props = Action.Properties;
var btn = props.NewGroup('Добавить свойства: Заказ/ Изделие/ СЕ');
var finishBtn = btn.NewButton("Добавить");
var chancelBtn = btn.NewButton("Отменить");
finishBtn.OnClick = function () {

    Make();
    Model.UnSelectAll();
    alert("Нет номера:\n -"+nonCE.join('\n -'));
    Action.Finish();
}
chancelBtn.OnClick = function () {
    Model.UnSelectAll();
    Action.Finish();
}

/**
 * @param {Object3} obj 
 */

/**
 * возвращает true если объект является корнем иерархии (модель, слой).
 * @param {Object3} obj 
 */
function IsRoot(obj){
    var result = false;
    if (typeof TLayer3D != 'undefined'){
        result = obj instanceof TLayer3D;
    }
    if (!result){
        result = !obj || obj instanceof TModel3D;
    }
    return result
}

function MakeName(owner, prevName) {
    if (IsRoot(owner))  {  return prevName;}
    return MakeName(owner.Owner, prevName);
}

var se='';
function CheckObject(obj) {
    if (IsRoot(obj.Owner)){
        obj.ArtPos = MakeName(obj.Owner,  obj.Name);
   if (/\d+\.\d+/.test(obj.Name))
      {se=/\d+\.\d+/.exec(obj.Name)[0];
      system.log(se);
      }
   else

      {se='';
       system.log('obj.Name: ' + obj.Name+ " typeof(obj): - " + obj.AsList());
          //if (confirm("Нет номера CE: "+obj.Name+"\nВыйти и найти?")) {
            //Model.UnSelectAll();
            //obj.Selected = true;

           // Action.Cancel();


           // }
              var regexp = new RegExp("TLayer3D");//Слой
            if   (! regexp.test(obj.AsList())){
                   nonCE.push(obj.Name);
               // alert("Нет номера CE:\n - " + obj.Name+ "\ntypeof(obj): - " + obj.AsList());

            }


       }
    }
    obj.UserProperty['Заказ']=Action.Control.Article.OrderName ;
    obj.UserProperty['Изделие']=Action.Control.Article.Name ;
    obj.UserProperty['СЕ']=se ;
    Undo.Changing(obj);
}
function Make() {
     for (var i = 0; i < Model.SelectionCount; i++) {
    selection.push(Model.Selections[i]);
}
 
    for (var i = 0; i < selection.length; i++) {
        CheckObject(selection[i]);
    }
}

function forEachInList(list, func) {
    if (!func)
        return;
    for (var i = 0; i < list.Count; i++) {
        var obj = list.Objects[i];
        func(obj);
        if (obj.List) {
            forEachInList(obj.AsList(), func);
        }
    }
}

forEachInList(Model, function (Object) {  
    if (Object.Name != 'Габаритная рамка')
    { Object.Selected = true;}

});


Action.Continue();