<?php
/* Smarty version 4.3.4, created on 2023-11-20 21:15:31
  from 'C:\xampp\htdocs\korki\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655bbe63292c14_42874993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad26f955f15e9db6fcbd86386f906c67d19ca4af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\korki\\smarty\\templates\\index.tpl',
      1 => 1700482791,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_655bbe63292c14_42874993 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pl">
<head>
    <title>Korepetycje online</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Strona do zamawiania korepetycji online">
    <meta name="keywords" content="korepetycje, nauka, nauka zdalna, nauka online">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <header>
        <nav>
            <ul id="menu">
                <ul class="menuchoose" id="categories">KATEGORIE ▾</ul>
                    <div id="listcontent">
                        <li class="lesson"><a href="#">ANGIELSKI</a></li>
                        <li class="lesson"><a href="#">MATEMATYKA</a></li>
                        <li class="lesson"><a href="#">PROGRAMOWANIE</a></li>
                    </div>
                </ul>
                <ul><a href="#" class="menuchoose">KONTAKT</a></ul>
                <ul><a href="#" class="menuchoose">ZALOGUJ SIĘ</a></ul>
            </ul>
        </nav>
    <header>
    <main>
        <div class="section">
            <img src="img/logo.png" alt="Logo" id="logo">
            <div id="desc">
                <h1>Nauka dla kotów</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sagittis leo eu elementum posuere. Pellentesque placerat pellentesque pretium.</p>
            </div>
            <img src="img/arrow_down.png" alt="Strzałka w dół" id="arrow"/>
        </div>

        <div class="social-media">
            <li><img src="facebook-2429746_640.png"><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#">TikTok</a></li>
        </div>
    </main>

    <footer>
        <ul class="footer">
            <li>©2023 Wszystkie prawa zastrzeżone<li>
            <li> <a href="#">Polityka prywatności</a> </li>
            <li> Wykonane przez: Martin</li>
        </ul>
        </footer>
</body>
</html><?php }
}
