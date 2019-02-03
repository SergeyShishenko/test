var button = $('.button-gen');
var submit = $('.submit-gen');


// function toggleClass() {
// 	this.classList.toggle('active');
// }

// function addClass() {
// 	this.classList.add('finished');
// }
$("body").on('click','.button-gen', function() {
    
    $( this ).toggleClass( "active-gen" );
    // alert();
});

// после генерации
    $("body").on('transitionend','.button-gen', function() {
        $( this ).toggleClass( "active-gen" );
    });

    $("body").on('transitionend','.button-gen', function() {
        $( this ).addClass( "finished-gen" );
    });
// после генерации    


$("body").on('click','.finished-gen', function() {
    
    $( this ).removeClass( "finished-gen" );
    $( this ).toggleClass( "active-gen" );
    
});

// button.on('click', toggleClass);
// button.addEventListener('transitionend', toggleClass);
// button.addEventListener('transitionend', addClass);