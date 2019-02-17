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
        $(el).addClass(this.cl);
        this.last = $(el).index(this.slcr);
        console.log('last '+this.last);
        prod2=$(el).find("[id^='product2_']").text();
        prod=$(el).find("[id^='product_']").text();
        if (prod2!=''){prod=prod2;}
        arrsel.push(prod);
        // $('#res').text('last '+this.last+" => "+$('#timeGrid tr').eq(this.last).find('td:first').text());
    },
    slcr: '#timeGrid tr',
    cl: 'pressedTime',
    last: null
};
$('body').on('click','#timeGrid tr', function(e) {
    // console.log('click');
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
        checkAddress($('#someSwitchOptionSuccess'+value));
      });
    //   inputClick(arrsel);
});