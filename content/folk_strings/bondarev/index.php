<!DOCTYPE html>
<html>
<head>
   <title>Класс Бондарева Г. В.</title> 
   <meta charset="utf-8">
   <link href="/styles/style.css" rel="stylesheet" type="text/css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
   <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="wrapper">
<header class="header">
    
    <nav class="breadcrumbs">
    <ul>
        <li>
            <a href="/content/">
              <h1>Электронная ведомость</h1>
            </a>
        </li>
        <li>
            <a href="/content/folk_strings/">
                <h2>Струнное народное отделение</h2>
            </a>
        </li>
        <li>
            <h3>Класс Бондарева Г. В.</h3>
        </li>
    </ul>
    </nav>
    <div class="modal">
      <div class="autorisation">
        <p class="autorisation-caption">Авторизация:</p> 
        <p class="teacher-name">Бондарев Г. В.</p>
      </div>
      <p class="exit-button">
        <a class="exit-button__link" href="/">Выйти</a>
      </p>
      <div class="search">
        <p class="search-caption">Введите фамилию ученика:</p>
          <input class="search-input" type="search" placeholder="Поиск">
      </div>
    </div>
    <div class="autorisation-menu">
    <span class="burger-menu">x</span>
    </div>
</header>
<main class="container">
<ul class="list">
    <li class="list__item student-subjects">
        <div class="student-info">
          <p class="student-name">Даниев Михаил</p>
          <p class="student-edu-form">Б</p>
          <p class="student-class">2</p>
          <p class="student-index">п</p>
        </div>
        <div class="flex-wrapper invisible">
          <div class="flex-wrapper-subject">
          <p class="subject-name">Специальность</p>
          <div class="marks-wrapper">
            <div class="marks-box">
              <span class="quarter">I</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">II</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">III</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">IV</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">Год</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
          </div>
        </div>
        <div class="flex-wrapper-subject">
          <p class="subject-name">Чтение с листа</p>
          <div class="marks-wrapper">
            <div class="marks-box">
              <span class="quarter">I</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">II</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">III</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">IV</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
            <div class="marks-box">
              <span class="quarter">Год</span>
              <p class="mark-input"><input class="mark" type="number" min="1" max="5"></p>
            </div>
          </div>
        </div>
        
        </div>
    </li>
    <li class="list__item"><p class="student-name">Оцабрик Никита</p></li>
   
    <li class="list__item"><p class="student-name">Рябов Иван</p></li>
    <li class="list__item"><p class="student-name">Столяров Андрей</p></li>
</ul>
</div>
</main>
<footer class="footer">
    <p>copyright "Lyceum of Arts"</p>
</footer>
</div>
<script src="/scripts/script_subjects.js"></script>
</body>
</html>