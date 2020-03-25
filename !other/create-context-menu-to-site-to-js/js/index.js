var menu = document.querySelector('.menu');

function showMenu(x, y){
    menu.style.left = x + 'px';
    menu.style.top = y + 'px';
    menu.classList.add('show-menu');
    
}

function hideMenu(){
    menu.classList.remove('show-menu');
}

function onContextMenu(e){
    e.preventDefault();
    showMenu(e.pageX, e.pageY);
    // document.addEventListener('mousedown', onMouseDown, false);
    console.log(e.target.closest('tr').id);
    document.getElementById('del').dataset.element=e.target.closest('tr').id;
}

// function onMouseDown(e){
//     hideMenu();
//     document.removeEventListener('mousedown', onMouseDown);
// }



document.querySelectorAll('#tblVPI  tr')
.forEach(e => e.addEventListener('contextmenu', onContextMenu, false)); 