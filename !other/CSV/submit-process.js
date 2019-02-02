var button = $('#subbutton');
var submit = $('#sub');


// function toggleClass() {
// 	this.classList.toggle('active');
// }

// function addClass() {
// 	this.classList.add('finished');
// }
$("body").on('click','#subbutton', function() {
    
    $( this ).toggleClass( "active" );
    // alert();
});
$("body").on('transitionend','#subbutton', function() {
    $( this ).toggleClass( "active" );
});
$("body").on('transitionend','#subbutton', function() {
    $( this ).addClass( "finished" );
});
// button.on('click', toggleClass);
// button.addEventListener('transitionend', toggleClass);
// button.addEventListener('transitionend', addClass);