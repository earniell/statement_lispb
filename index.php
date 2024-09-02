<!DOCTYPE html>
<html>
<head>
   <title>Список отделений</title> 
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="/styles/style.css" rel="stylesheet" type="text/css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">
<header class="header">
   <div class="breadcrumbs">
      <ul>
          <li>
              <h1 class="main-title">Электронная ведомость</h1>
          </li>
          <li>
            <h2 class="sub-title">Список отделений</h2>  
          </li>
      </ul>
    </div>
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
<main class="content">

<nav class="menu">
    <ul class="list">
        <li class="list__item"><a class="list__item__link" href="/content/piano/">Фортепиано</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/strings/">Струнные</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/winds/">Духовые и ударные</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/jazz/">Эстрадно-джазовые</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/folk/">Народные</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/folk_strings/">Струнные народные</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/choir/">Хоровое пение</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/folkchoir/">Фольклор</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/dance/">Хореография</a></li>
        <li class="list__item"><a class="list__item__link" href="/content/theatre/">Театр</a></li>
    </ul>   
</nav>
</main>
<footer class="footer">

    <p class="copyright">copyright "Lyceum of Arts"</p>
</footer>
</div>
<script src="/scripts/script_subjects.js"></script>
</body>
</html>