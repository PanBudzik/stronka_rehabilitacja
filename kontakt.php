<!doctype html>
<html lang="pl-PL">

<head>
    <?php include("php/standard_head.php"); ?>
    <title>SENSOSFERA - Kontakt</title>
    <meta name="description" content="Masz pytania? Zainteresowała cię oferta? Skontaktuj się z SENSOSFERĄ!">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light fixed-top ">
        <a href="index.php"><img src="img/logoSensosfera.png" alt="SENSOSFERA logo" class="d-block mx-auto" height="80px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#oferta">Oferta</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="kontakt.php">Kontakt<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link przewodni" style="color:white;" href="https://pl-pl.facebook.com/sensosferapl/" target="_blank">Facebook<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <section class="content ed">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-12 kontakt_top">
                        <h1 class="display-4">Kontakt</h1>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 p-0 kontakt_div">
                        <div class="overlay">
                            <i class="icon-mail kontakt_icon"></i>
                            <div class="info">
                                <i class="icon-mail kontakt_icon_overlay"></i>
                                <a href="mailto:sensosferapl@gmail.com">
                                    <p class="kontakt_text_overlay">sensosferapl@gmail.com</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 p-0 kontakt_div">
                        <div class="overlay">
                            <i class="icon-phone kontakt_icon"></i>
                            <div class="info">
                                <i class="icon-phone kontakt_icon_overlay"></i>
                                <a href="tel:606635581">
                                    <p class="kontakt_text_overlay">606635581</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-4 p-0 kontakt_div">
                        <div class="overlay">
                            <i class="icon-clock kontakt_icon"></i>
                            <div class="info">
                                <p class="kontakt_text_overlay" style="font-size:1.3rem">
                                    Jesteśmy czynni:</br>
                                    poniedziałek – piątek</br>
                                    15:00-21:00</br>
                                    ul. Wolska 54</br>
                                    05-650 Chynów
                                </p>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4924.154207889774!2d21.08578!3d51.896057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6aff31a0828647ed!2sCentrum%20Zdrowia%20i%20Rehabilitacji%20Krzysztof%20Jab%C5%82o%C5%84ski!5e0!3m2!1spl!2spl!4v1603668954409!5m2!1spl!2spl" width="600" height="320" frameborder="0" style="border:2px solid #BDDFFF; float:right; width:1440px; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </section>
    </main>
    <?php include("php/footer.php"); ?>
    <?php include("php/scripts.php"); ?>
</body>

</html>