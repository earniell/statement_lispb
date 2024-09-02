let upButton = document.querySelector('.up-button'); // находит на странице кнопку наверх


// при вертикальном скроле более 750 px кнопка становится видна, и не видна если скрол менее 750px
window.onscroll = function () {
  if (window.pageYOffset > 750) {
    upButton.classList.add('shown');
  } else {
    upButton.classList.remove('shown');
    };

};

// скролл при клике на кнопку
upButton.onclick = function () {
  window.scrollTo(0, 0);
};