// dist\js\сontextMenu.js
var menu = document.querySelector('.menu-cm');

function showMenu(x, y){
    menu.style.left = x + 'px';
    menu.style.top = y + 'px';
    menu.classList.add('show-menu-cm');
    
}

function hideMenu(){
    menu.classList.remove('show-menu-cm'); 
    removeSel();  
}

function onContextMenu(e){
    e.preventDefault();
    removeSel();
    showMenu(e.pageX, e.pageY);
    // document.addEventListener('mousedown', onMouseDown, false);
    // console.log(e.target.closest('tr').id);
    tr=e.target.closest('tr').classList.add('sel');
    menu.classList.add('show-menu-cm');
    document.getElementById('del').dataset.element=e.target.closest('tr').id;
}

// function onMouseDown(e){
//     hideMenu();
//     document.removeEventListener('mousedown', onMouseDown);
// }

function delSel(tr){
    hideMenu(); 
    document.getElementById(tr.dataset.element).classList.remove('sel'); 
    del=document.getElementById('del').dataset.element;
    // console.log(del);
    ell=document.getElementById(del);
    ell.parentElement.removeChild(ell);
    // var ell = table.rows[j].cells[0].closest("tr"); // tr element (ваша строчка)
    // document.getElementById(tr.dataset.element).parentElement.removeChild(tr.dataset.element); 
}

function removeSel(){
   
    wrapObj = document.querySelectorAll('.sel');

    for(let i = 0;i<wrapObj.length;i++){
      wrapObj[i].classList.remove('sel');
    }
}

// document.querySelectorAll('#tblVPI  tr:not(.head-cm)')
// .forEach(e => e.addEventListener('contextmenu', onContextMenu, false)); 