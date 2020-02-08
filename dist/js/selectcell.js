
var arrsel=[];
var prod=0;
var prod2=0;
var selection = {
    single: function(el) {
        $('#timeGrid tr').not(el).removeClass(this.cl);
        arrsel.length=0;
        this.ctrl(el);
    },
    shift: function(el) {
        if (typeof this.last !== 'number') {
            return this.single(el);
        }
        // arrsel.length=0;
        var till = $(el).index(this.slcr),
            from = this.last;
            console.log('От '+from);
            console.log('До '+till);
            // $('#res').text('От '+from +' '+'До '+till);
        if (from > till) till = [from, from = till][0];//console.log('till '+till);
        $('#timeGrid tr').not($('#timeGrid tr').eq(this.last)).removeClass(this.cl);
        $('#timeGrid tr').slice(from, till).add(el).addClass(this.cl);
    //    $('#timeGrid tr').slice(from, till).add(el);
        var sh=$('#timeGrid tr').slice(from, till).add(el);
        // alert($(sh[0]).find("[id^='product_']").text());
        $.each(sh,function(index,value){ 
            
            prod2=$(value).find("[id^='product2_']").text();
            prod=$(value).find("[id^='product_']").text();
            if (prod2!=''){prod=prod2;}
            arrsel.push(prod);
            // arrsel.push($(value).find("[id^='product_']").text());         
          });
    },
    ctrl: function(el) {
        console.log('Class pressedTime - '+$(el).hasClass(this.cl));
        // $(el).addClass(this.cl);
        this.last = $(el).index(this.slcr);
        // console.log('last '+this.last);
        // console.log('method '+method);
        prod2=$(el).find("[id^='product2_']").text();
        prod=$(el).find("[id^='product_']").text();
        if (prod2!=''){prod=prod2;}

        if (!$(el).hasClass(this.cl)){
             arrsel.push(prod); 
             $(el).addClass(this.cl);
        }
        else{
            arrsel=unique(arrsel); 
            var i = arrsel.indexOf(prod);
                if (i > -1) {
                    arrsel.splice(i, 1);
                    $(el).removeClass(this.cl);
                }
        }
      
        // $('#res').text('last '+this.last+" => "+$('#timeGrid tr').eq(this.last).find('td:first').text());
    },
    slcr: '#timeGrid tr',
    cl: 'pressedTime',
    last: null
};
$('body').on('click','#timeGrid tr', function(e) {
    // alert();
    console.log($(this).find("[id^='someSwitchOptionSuccess_']").prop('checked'));
// console.log($(this).find("[id^='someSwitchOptionSuccess']").prop('checked'));
method = !e.shiftKey && !e.ctrlKey ? 'single' : (e.shiftKey ? 'shift' : 'ctrl');
selection[method](this);
});
$('body').on('click','#sel', function() {
    arrsel=unique(arrsel);  
    // arrsel = arrsel.sort();
    $.each(arrsel,function(index,value){
      
        //выведем индекс и значение массива в консоль
        // console.log('Индекс: ' + index.toString() + '; Значение: ' + value.toString());
        // $('#someSwitchOptionSuccess'+value).trigger('click');
        checkAddress($('#someSwitchOptionSuccess'+value),1);
      });
    //   inputClick(arrsel);
});
var visparam=1;
$('body').on('click','#selall', function() {
    
    // arrsel = arrsel.sort();
    
    $.each(arr_table,function(index,value)
    {      
        //выведем индекс и значение массива в консоль
        // console.log('Индекс: ' + index.toString() + '; Значение: ' + value.toString());
        if ((visparam===2)){
           $('#someSwitchOptionSuccess'+value).trigger('click'); 
        }
        // 
        checkAddress($('#someSwitchOptionSuccess'+value),visparam);
        
      });
      visparam=visparam==2?1:2;
      arrsel.length=0;
    //   inputClick(arrsel);
});


//////------!!!!!!!!!!!!!!!!!

// var array = [2, 5, 9];
// console.log(array)
// var index = array.indexOf(5);
// if (index > -1) {
//   array.splice(index, 1);
// }
// // array = [2, 9]
// console.log(array);

//////-------------
//////-------------!!!!!!!!!!!!!!!
// var arrzzz = [1, 0, false,5 ,1];
// arrzzz=unique(arrzzz); 
// alert( arrzzz.indexOf('5') ); // 1
// // alert( arr.indexOf(false) ); // 2
// // alert( arr.indexOf(null) ); // -1
// alert( arrzzz );

