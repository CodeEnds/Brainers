<?php
/* Smarty version 4.3.4, created on 2023-11-28 23:13:00
  from 'C:\xampp\htdocs\Brainers\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_656665eceb9895_77599392',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '208f44b402759f062e9ded21f4f2446f03d4c3bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Brainers\\smarty\\templates\\index.tpl',
      1 => 1701209580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656665eceb9895_77599392 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1154266498656665ece93d50_62262626';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Korepetycje online</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Strona do zamawiania korepetycji online">
    <meta name="keywords" content="korepetycje, nauka, nauka zdalna, nauka online">
    <link rel="stylesheet" href="styles/style.css?siema=1">
</head>
<body>
    <header>
        <nav id="nav">
            <ul id="menu">
                <ul class="menuchoose" id="categories">KATEGORIE ▾</ul>
                    <div id="listcontent">
                        <li class="lesson"><a href="#">ANGIELSKI</a></li>
                        <li class="lesson"><a href="#">MATEMATYKA</a></li>
                        <li class="lesson"><a href="#">PROGRAMOWANIE</a></li>
                    </div>
                </ul>
                <li class="nav-li"><a href="#" class="menuchoose">KONTAKT</a></li>
                <li class="nav-li"><a href="#" class="menuchoose" class="right-corner">ZALOGUJ SIĘ</a></li>
            </ul>
        </nav>
    <header>
    <main>
        <div class="section main-section">
            <div id="desc">
                <h1 id="brainersi"></h1>
                <p><b>Nauka programowania oraz matematyki przy użyciu nowoczesnych technologii.</b></p>
                <button class="join-us-button">Dołącz do nas!</button>
            </div>
            <img src="img/logo-new-transparent.png" alt="logo" id="logo"/>
            <img src="img/arrow-down.png" alt="Strzałka w dół" id="arrow"/>
        </div>
        <div class="section card-section">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offersData']->value, 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
                <div class="offer-card">
                    <p><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</p>
                        <div class="description">
                            <ul>
                                <li>Przygotowanie do egzaminu 8-klasisty</li>
                                <li>Dostęp do dedykowanego discorda</li>
                                <li>Wsparcie korepetytora poza zajęciami</li>
                            </ul>
                        </div>
                    <div class="purchase-count">Ilość zakupionych lekcji: <?php echo $_smarty_tpl->tpl_vars['data']->value['cnt'];?>
</div>
                    <a href="#">Dowiedz się więcej</a>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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

    <!-- SCRIPTS -->
    <?php echo '<script'; ?>
 src="js/MoveToSection.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/OnScrollMove.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/BrainersiAnimation.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
