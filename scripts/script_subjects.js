/* отображение предметов у ученика  */

let student = document.querySelector('.student-info');
let subjects = document.querySelector('.flex-wrapper');
let menu = document.querySelector('.autorisation-menu');
let modal = document.querySelector('.modal');
let breadcrumbs = document.querySelector('.breadcrumbs');

menu.onclick = function() {
   console.log('Клик по меню!');
   menu.classList.toggle('open');
   modal.classList.toggle('open');
   breadcrumbs.classList.toggle('modal');
};

student.onclick = function() {
  console.log('Клик!');
  subjects.classList.toggle('visible');
};