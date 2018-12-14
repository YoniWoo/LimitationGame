<!DOCTYPE HTML>
<html lang="fr">
<head>
    <title>Limitation Game</title>
    <!-- META -->
    <meta charset="UTF-8">
    <meta name="description" content="Grâce au Limitation Game, embauchez la meilleure des personnes en situation de handicap dans votre entreprise.
Ils devront se démarquer, mais à quel prix ?">
    <meta name="keywords" content="Limitation Game,Limitation,Game,limitation game,limitation,game">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
    <meta name="google" content="nositelinkssearchbox" />
    <meta name="author" content="Limitation Game">
    <!-- LINKS -->
    <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
   <!-- <link rel="stylesheet" href="css/calendar.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <link rel="icon" sizes="16x16" href="img/png/favicon-16x16.png">
    <link rel="icon" sizes="32x32" href="img/png/favicon-32x32.png">
    <!-- SCRIPT -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130493707-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130493707-1');
    </script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#0d293e",
                        "text": "#ffffff"
                    },
                    "button": {
                        "background": "#00ade9",
                        "text": "#ffffff"
                    }
                },
                "theme": "classic",
                "content": {
                    "message": "Ce site internet utilise des cookies pour vous garantir une meilleure expérience.",
                    "dismiss": "Compris !",
                    "link": "En savoir plus",
                    "href": "www.limitationgame.com/cgu.php"
                }
            })});
    </script>
</head>
<body onscroll="changeImg()">
<div class="popup">
    <div class="info">
        <div class="info__right">
            <img src="img/svg/illustration-4.svg">
        </div>
        <div class="info__left">
            <h2>Avant de partir, prends au moins <br>
                2 minutes pour comprendre notre <br>
                démarche</h2>
            <a href="#demarche js-scrollTo" class="btn-explication">L'explication</a>
        </div>
    </div>
</div>
<!-- DIVISION BODY -->
<div class="container">
    <img src="img/png/lg-white.png" id="logo" alt="Limitation Game Logo">
    <p><span>Cher recruteur, trouve ici le bon handicapé à embaucher.<br>Sélectionne tes candidats, crée ton combat et engage le survivant dans ton entreprise.</span></p>
    <a href="#compound" class="js-scrollTo"><span id="scroll"></span></a>
</div>
<div class="compound" id="compound">
    <div class="breadcrum">
        <ul class="flames">
            <li class="active flames1"></li>
            <li class="flames2"></li>
            <li class="flames3"></li>
        </ul>
    </div>
    <div class="categorie">
        <h2>Sélectionne tes candidats</h2><br>
        <p id="sous-text">Choisi 4 à 6 candidats qui s’affronteront lors d'un combat. L'unique vainqueur gagnera sa place au sein de ton entreprise.</p>
        <!-- TRISOMIQUE -->
        <div id="icon-handicap">
            <img src="img/png/icon/icon-trisomiques.png" alt="icone trisomiques png">
            <h3>Trisomiques</h3>
        </div>
        <div id="carousel">
            <?php include("carousels/carousel1.php"); ?>
        </div>
        <div id="icon-handicap">
            <img src="img/png/icon/icon-aveugles.png" alt="icone aveugles png">
            <h3>Aveugles</h3>
        </div>
        <div id="carousel2">
            <?php include("carousels/carousel2.php"); ?>
        </div>
        <div id="icon-handicap">
            <img src="img/png/icon/icon-moteurs.png" alt="icone aveugles png">
            <h3>Moteurs</h3>
        </div>
        <div id="carousel3">
            <?php include("carousels/carousel3.php"); ?>
        </div>
        <div id="icon-handicap">
            <img src="img/png/icon/icon-nains.png" alt="icone nains png">
            <h3>Nains</h3>
        </div>
        <div id="carousel4">
            <?php include("carousels/carousel4.php"); ?>
        </div>
        <div id="icon-handicap">
            <img src="img/png/icon/icon-moteurs.png" alt="icone sourds png">
            <h3>Sourds</h3>
        </div>
        <div id="carousel5">
            <?php include("carousels/carousel5.php"); ?>
        </div>
        <div class="suivant">
            <a href="#calendrier" class="btn-parti js-scrollTo">suivant</a>
        </div>
        <div class="appear">
            <div class="info" id="ModalSelected">
                <img src="img/svg/left-arrow.svg" alt="flèche de retour" id="arrow">
                <div id="info__right">
                </div>
                <div id="info__left">
                    <h3 class="modal-title">Antoine, 31 ans</h3>
                    <p class="modal-description">Pas vu pas pris</p>
                    <div id="info__label">
                    </div>
                    <div class="info__categorie">
                        <p>Catégorie</p>
                        <div class="icon-image">

                        </div>
                    </div>
                    <div class="info__qualite">
                        <p>Qualité</p>
                        <div class="moda-qualite">

                        </div>
                    </div>
                </div>

                <div class="moda-btn">

                </div>
            </div>
        </div>
        <div class="calendrier" id="calendrier">
            <h2>Planifie ton combat</h2><br>
            <p id="sous-text">Sélectionne la date à laquelle tu veux organiser le combat qui se déroulera dans tes locaux.</p>
            <div id='calendar-wrap'>
            </div>
            <div class="suivant">
                <a href="#video" class="btn-parti js-scrollTo" id="get__video">c'est parti</a>
            </div>
        </div>
        <div class="video" id="video">
            <div class="player">
                <iframe src="https://www.youtube.com/embed/x5s9L4MQhRc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>            </div>
        </div>
    </div>
</div>
<div class="demarche" id="demarche">
    <div class="infographie" >
        <div class="vide"></div>
        <div id="illuAnim">
            <div id="stickyImg">
                <img id="illustration" src="img/svg/illustration-0.svg" alt="Item 1">
            </div>
            <img class="bulleLeft bulleAnim" style="margin-top: 300px;" src="img/svg/bulle-1.svg" alt=""/>
            <img class="bulleRight bulleAnim" style="margin-top: 700px;" src="img/svg/bulle-2.svg" alt=""/>
            <img class="bulleLeft bulleAnim" style="margin-top: 1100px;" src="img/svg/bulle-3.svg" alt=""/>
            <img class="bulleRight bulleAnim" style="margin-top: 1500px;" src="img/svg/bulle-4.svg" alt=""/>
        </div>
    </div>
    <div class="like">
        <?php include ('like.php')?>
    </div>
    <div class="compteur">
        <div class="wrap-slump">
            <input id="slump" class="slump-toggle" type="checkbox">
            <label for="slump" class="slump-lbl-toggle">Découvre notre démarche</label>
            <div class="slump-content">
                <div class="slump-inner">
                        <p>
                            <img src="img/svg/illu-demarche.svg" alt="Image de substitution">
                            Dans une société où le regard et la quête de la normalité compte plus que
                            tout, la moindre différence intrigue ou au contraire, repousse. Chacun
                            ressent le besoin de se sentir inclus dans un système d’appartenance.
                            Dans le cas d’une personne en situation de handicap, cette différence
                            représente souvent un véritable obstacle dans son intégration au sein de
                            la société et particulièrement dans le monde du travail.<br>
                            Pour aider ces personnes à trouver un emploi, pour inciter les entreprises
                            (et plus particulièrement les PME et les start-ups) à ne pas reculer devant
                            l’embauche d’une personne handicapée, nous avons décidé de changer
                            les mentalités.
                            Utopique, certes, mais pas impossible (enfin on l’espère). Une campagne
                            choquante, violente... Pour nous, c’est le meilleur moyen de marquer
                            l’esprit des gens et d’arriver à cette fameuse prise de conscience.
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="left">
        <p>Inscris-toi à notre newsletter pour <br>ne rien manquer sur la campagne !</p>
        <div class="news">
            <div id="mc_embed_signup">
                <form action="https://limitationgame.us19.list-manage.com/subscribe/post?u=a4aa78236fbe05365f36c7dbc&amp;id=fd37e50442" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="indicates-required"></div>
                        <div class="mc-field-group">
                            <input type="email" placeholder="Ton adresse mail" name="EMAIL" class="mail" id="mce-EMAIL">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a4aa78236fbe05365f36c7dbc_fd37e50442" tabindex="-1" value=""></div>
                        <div class="clear"><button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn-input"></div>
                    </div>
                </form>
            </div>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        </div>
    </div>
    <div class="right">
        <p>Restons en contact</p>
        <div class="social">
            <a href="https://www.facebook.com/LimitationGame/" target="_blank"><i class="fa fa-facebook-f"></i></a>
            <a href="https://twitter.com/Limitation_Game?lang=fr&lang=fr" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/company/limitation-game/" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
        <a href="contact.php" class="btn-question">Une question ?</a><br>
        <a href="dossier-de-presse.pdf" download="">Télécharge notre kit de presse</a><br>
        <a href="mentionlegale.php">Mentions légales</a>
    </div>
</footer>
<script src="js/jquery.js"></script>
<script type="text/javascript" src="js/slick.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script src="js/calendar.js"></script>
<script src="js/main.js"></script>
</body>
</html>