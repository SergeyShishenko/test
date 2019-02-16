var selection = {
    single: function(el) {
        $('#timeGrid tr').not(el).removeClass(this.cl);
        this.ctrl(el);
    },
    shift: function(el) {
        if (typeof this.last !== 'number') {
            return this.single(el);
        }
        var till = $(el).index(this.slcr),
            from = this.last;
            console.log('От '+from);
            console.log('До '+till);
            $('#res').text('От '+from +' '+'До '+till);
        if (from > till) till = [from, from = till][0];
        $('#timeGrid tr').not($('#timeGrid tr').eq(this.last)).removeClass(this.cl);
        $('#timeGrid tr').slice(from, till).add(el).addClass(this.cl);
    },
    ctrl: function(el) {
        $(el).addClass(this.cl);
        this.last = $(el).index(this.slcr);
        console.log('last '+this.last);
        $('#res').text('last '+this.last+" => "+$('#timeGrid tr').eq(this.last).find('td:first').text());
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