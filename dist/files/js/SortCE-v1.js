var selection = [];
var nonCE = [];
var nonSelCE = [];
var nonBlock = [];
var SelCE = [];
var props = Action.Properties;
var btn = props.NewGroup('Сортировка СЕ');
var count1 = btn.NewString('Найденно блоков с номером', '0');
var count2 = btn.NewString('Найденно блоков без номера', '0');
var count3 = btn.NewString('Найденно вне блока', '0');
var finishBtn = btn.NewButton("Отсортировать");
var chancelBtn = btn.NewButton("Отменить");

finishBtn.OnClick = function () {
    var block = AddBlock('TMP1');
    var block2 = AddBlock('TMP2');
    var block3 = AddBlock('TMP3');

    Make();

    SelCE.sort((prev, next) => {
    let a = toCE(prev.Name);
    let b = toCE(next.Name);
    return a.localeCompare(b);
    });

    for (var i = 0; i < SelCE.length; i++) {

        SelCE[i].Owner = block.Owner;
        Undo.Changing(SelCE[i]);
    }
        count1.Value=String(SelCE.length).padEnd(6, " ") + ' - идет обработка...';

     nonSelCE.sort((prev, next) => {
        a=prev.Name.replace(/ /g,"");
        b=next.Name.replace(/ /g,"");
        return a.toLowerCase().localeCompare(b.toLowerCase());
    });

     for (var i = 0; i < nonSelCE.length; i++) {

        nonSelCE[i].Owner = block2.Owner;
        Undo.Changing(nonSelCE[i]);
    }
    count2.Value=String(nonSelCE.length).padEnd(6, " ") + ' - идет обработка...';

     nonBlock.sort((prev, next) => {
        a=prev.Name.replace(/ /g,"");
        b=next.Name.replace(/ /g,"");
        return a.toLowerCase().localeCompare(b.toLowerCase());
    });

     for (var i = 0; i < nonBlock.length; i++) {

        nonBlock[i].Owner = block3.Owner;
        Undo.Changing(nonBlock[i]);
    }
    count3.Value=String(nonBlock.length).padEnd(6, " ") + ' - идет обработка...';

    Model.UnSelectAll();
    DeleteObject(block);
    DeleteObject(block2);
    DeleteObject(block3);

    if (nonCE.length>0) alert("Без номера :\n - "+nonCE.join('\n - '));
    Action.Finish();
    }




chancelBtn.OnClick = function () {
    Model.UnSelectAll();

    Action.Finish();
}

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
    if (IsRoot(obj.Owner))
    {
       obj.ArtPos = MakeName(obj.Owner,  obj.Name);
       if (/\d+\.\d+/.test(obj.Name))
          {se=/\d+\.\d+/.exec(obj.Name)[0];

          SelCE.push(obj);

          }
       else
          {se='';
             if(obj.List) {
                    var regexp = new RegExp("TLayer3D");//Слой
                    if   (! regexp.test(obj.AsList())){
                           nonCE.push(obj.Name);
                           nonSelCE.push(obj);

                    }
              } //obj.List
              else{
                 nonBlock.push(obj);
              }
           }// se=''
    }


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
Model.UnSelectAll();
forEachInList(Model, function (Object) {

  var constrName= Object.constructor.name;
    if (constrName != "TModelLimits" && constrName != "TContour3D")
        {Object.Selected = true;}

});

function toCE(x)  {
  let regexp = /\d+\.\d+/;
   let  a = String(regexp.exec(x));
  let  num = a.split('.');
  let    f =num[0].padStart(3, '0');
  let    s = num[1].padStart(3, '0');
  return f+s;
}


Action.Continue();