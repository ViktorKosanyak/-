// Стилизация инпута-поисковика 

const inputSearch = document.querySelector('.input');
const btnSearch = document.querySelector('.search-btn');

btnSearch.addEventListener('click', btnClick)

function btnClick() {
        inputSearch.classList.toggle('active-input');
        inputSearch.classList.toggle('input');
}
// Запускаем WOW.js 

new WOW().init();