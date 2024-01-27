let btnMenu = document.querySelector('#btn-menu')
let sideBar = document.querySelector('.sidebar')

btnMenu.onclick = function () {
    sideBar.classList.toggle('active')
    btnMenu.classList.toggle('fa-times');
}