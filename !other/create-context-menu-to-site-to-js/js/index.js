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
    wrapObj = document.querySelectorAll('.sel');

    for(let i = 0;i<wrapObj.length;i++){
      wrapObj[i].classList.remove('sel');
    }

    showMenu(e.pageX, e.pageY);
    // document.addEventListener('mousedown', onMouseDown, false);
    console.log(e.target.closest('tr').id);
    tr=e.target.closest('tr').classList.add('sel');
    menu.classList.add('show-menu');
    document.getElementById('del').dataset.element=e.target.closest('tr').id;
}

// function onMouseDown(e){
//     hideMenu();
//     document.removeEventListener('mousedown', onMouseDown);
// }

function delSel(tr){
    hideMenu(); 
    document.getElementById(tr.dataset.element).classList.remove('sel');
  
}

document.querySelectorAll('#tblVPI  tr')
.forEach(e => e.addEventListener('contextmenu', onContextMenu, false)); 