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
            {foreach $offersData as $data}
                <div class="offer-card">
                    <p>{$data['title']}</p>
                        <div class="description">
                            <ul>
                                <li>Przygotowanie do egzaminu 8-klasisty</li>
                                <li>Dostęp do dedykowanego discorda</li>
                                <li>Wsparcie korepetytora poza zajęciami</li>
                            </ul>
                        </div>
                    <div class="purchase-count">Ilość zakupionych lekcji: {$data['cnt']}</div>
                    <a href="#">Dowiedz się więcej</a>
                </div>
            {/foreach}
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
    <script src="js/MoveToSection.js"></script>
    <script src="js/OnScrollMove.js"></script>
    <script src="js/BrainersiAnimation.js"></script>
</body>
</html>