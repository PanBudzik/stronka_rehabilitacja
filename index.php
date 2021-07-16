<!doctype html>
<html lang="pl-PL">

<head>
    <?php include("php/standard_head.php"); ?>
    <title>Gabinet specjalistyczny Chynów | SENSOSFERA</title>
    <meta name="description" content="SENSOSFERA to gabinet specjalistycznej pomocy w zakresie integracji sensorycznej, wad postawy, mowy, problemów z kręgosłupem oraz w wielu innych przypadkach. ">
</head>

<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light fixed-top ">
        <a href="index.php"><img src="./img/logoSensosfera.png" alt="Logo SENSOSFERA" class="d-block mx-auto" height="80px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Przełącz nawigacje">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Strona główna<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#oferta">Oferta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontakt.php">Kontakt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link przewodni" style="color:white;" href="https://pl-pl.facebook.com/sensosferapl/" target="_blank">Facebook<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <a href="#oferta"><img src="img/tlo.png" alt="Jedyny gabinet w powiacie certyfikowany przez TOMATIS Developpment S.A. w Luksemburgu" width="100%" class="pb-5" /></a>
        <section class="zajecia">

            <div class="container-fluid" data-spy="scroll">

                <div class="jumbotron jumbotron-fluid primary p-1 przewodni" id="oferta">
                    <h1 class="display-4">W czym specjalizuje się SENSOSFERA?</h1>
                    <p class="lead">SENSOSFERA to gabinet specjalistycznej pomocy w zakresie integracji sensorycznej, wad postawy, mowy, problemów z kręgosłupem oraz w wielu innych przypadkach.</p>
                </div>


                <div class="row">
                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/integracja_sensoryczna.jpg" alt="Integracja sensoryczna SENSOSFERA">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title">Integracja sensoryczna</h2>
                                <p class="card-text">Pomagamy rozpoznawać i leczyć objawy zaburzeń związanych ze zdolnością dziecka do odczuwania, rozumienia i organizowania informacji dostarczanych przez zmysły z otoczenia i z własnego organizmu.</p>
                                <a class="btn btn-primary mt-auto przewodni" data-toggle="modal" data-target="#modal1">Więcej...</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="modal1Label">Integracja sensoryczna</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Od 2009 roku pracujemy z dziećmi ze specjalnymi potrzebami w tym Autyzm, ADHD, ADD, zespół Downa i wiele innych. Pomagamy rozpoznawać i leczyć objawy zaburzeń związanych ze zdolnością dziecka do odczuwania, rozumienia i organizowania informacji dostarczanych przez zmysły z otoczenia i z własnego organizmu.
                                    Pozwól zrozumieć problemy swojego dziecka w pojmowaniu świata i przyjdź na diagnozę do naszego gabinetu.

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    <a type="button" class="btn btn-primary przewodni" href="kontakt.php">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/gimnastyka.jpg" alt="Gimnastyka korekcyjna SENSOSFERA">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title">Gimnastyka korekcyjna</h2>
                                <p class="card-text">Skoliozy, płaskostopie, kolana koślawe to tylko niektóre z wad których Twoje dziecko pozbędzie się dzięki ukierunkowanym ćwiczeniom pod okiem naszych specjalistów. </p>
                                <a href="#" class="btn btn-primary mt-auto przewodni" data-toggle="modal" data-target="#modal2">Więcej...</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="modal2Label">Gimnastyka korekcyjna</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Jest to forma ćwiczeń skierowana do dzieci i młodzieży, mająca na celu eliminację i korekcję wad postawy. Ma za zadanie zapewnić wszechstronny rozwój fizyczny i wspaniałą zdrową formę przez zabawę.
                                    Skoliozy, płaskostopie, kolana koślawe to tylko niektóre z wad których Twoje dziecko pozbędzie się dzięki ukierunkowanym ćwiczeniom pod okiem naszych specjalistów.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    <a type="button" class="btn btn-primary przewodni" href="kontakt.php">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/masaz.jpg" alt="Masaż SENSOSFERA">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title">Masaż</h2>
                                <p class="card-text">Jeśli boli Cię kręgosłup, drętwieją palce, ból pleców nie daje Ci spać? Przyjdź do nas, a my temu zaradzimy. </p>
                                <a href="#" class="btn btn-primary mt-auto przewodni" data-toggle="modal" data-target="#modal3">Więcej...</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="modal3Label">Masaż</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Masaż ma na celu nie tylko relaksować - może też pobudzić organizm do regeneracji i samoleczenia. Jeśli boli Cię kręgosłup, drętwieją palce, ból pleców nie daje Ci spać przyjdź do nas a my temu zaradzimy. Wykonujemy masaż klasyczny, kręgosłupa, relaksacyjny oraz wiele innych.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    <a type="button" class="btn btn-primary przewodni" href="kontakt.php">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/tomatis.jpg" alt="Metoda Tomatis SENSOSFERA">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title">Tomatis</h2>
                                <p class="card-text">Jeśli Twoje dziecko nie może się skupić w szkole, ma problemy z koncentracją bo nawet szelest papierka go rozprasza? Przyjdź do nas na diagnozę. </p>
                                <a href="#" class="btn btn-primary mt-auto przewodni" data-toggle="modal" data-target="#modal4">Więcej...</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="modal4Label">Tomatis</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Jeśli Twoje dziecko nie może się skupić w szkole, ma problemy z koncentracją bo nawet szelest papierka go rozprasza to przyjdź do nas na diagnozę.
                                    Jesteśmy jedynym gabinetem w powiecie grójeckim certyfikowanym przez Tomatis Development w Luksemburgu.
                                    Tomatis to innowacyjna forma treningu uwagi słuchowej, coraz popularniejsza w Polsce. Pomaga m.in. osobom z autyzmem, dysleksją czy zespołem Aspergera poprawić koncentrację uwagi oraz zdolność komunikacji.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    <a type="button" class="btn btn-primary przewodni" href="kontakt.php">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/logopedia.jpg" alt="Logopedia SENSOSFERA">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title">Logopedia</h2>
                                <p class="card-text">Kształtujemy i doskonalimy właściwą mowę. Pomagamy w usuwaniu wad lub zaburzeń wymowy oraz w nauczaniu mowy w przypadku jej braku lub utraty. </p>
                                <a href="#" class="btn btn-primary mt-auto przewodni" data-toggle="modal" data-target="#modal5">Więcej...</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5Label" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="modal5Label">Logopedia</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Kształtujemy i doskonalimy właściwą mowę - pomagamy w usuwaniu wad lub zaburzeń wymowy oraz w nauczaniu mowy w przypadku jej braku lub utraty.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Zamknij</button>
                                    <a type="button" class="btn btn-primary przewodni" href="kontakt.php">Kontakt</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/reszta.jpg" alt="Rehabilitacja terapia pedagogiczna diagnoza problemów w czytaniu i pisaniu SENSOSFERA">
                            <div class="card-body d-flex flex-column">
                                <h2 class="card-title">Domeną SENSOSFERY jest również:</h2>
                                <p class="card-text">
                                    <ul class="float-left">
                                        <li>rehabilitacja niemowląt, dzieci, młodzieży, dorosłych i osób w starszym wieku</li>
                                        <li>terapia pedagogiczna</li>
                                        <li>diagnoza problemów w czytaniu i pisaniu</li>
                                    </ul>
                                </p>
                                <a href="kontakt.php" class="btn btn-primary mt-auto przewodni">Kontakt</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>
    <?php include("php/footer.php"); ?>
    <?php include("php/scripts.php"); ?>
</body>

</html>