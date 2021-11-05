<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/header.css">
        <link rel="stylesheet" href="css/galerie.css">
        <link rel="stylesheet" href="../../css/footer.css">
        <link rel="icon" href="../../img/favicon.ico"/>
        <title>Galerie</title>
    </head>
    <body>
        <header>
            <nav class="navbar color-header" role="navigation">
                <div class="navbar__logo">
                    <a href="../../index.php"><img src="../../img/logo.PNG" alt="logo de charles"></a>
                </div>    
                <ul class="navbar__links">
                    <li class="navbar__link first"><a href="../../index.php">Accueil</a></li>
                    <li class="navbar__link second"><a href="galerie.php">Galerie</a></li>
                    <li class="navbar__link third"><a href="../tarif/tarif.php">Tarifs et prestations</a></li>
                    <li class="navbar__link fourth"><a href="../contact/contact.php">Me contacter</a></li>
                </ul>   
                <button class="burger">
                    <span class="bar"></span>  
                </button>   
            </nav>
        </header>

        <main>
            <div class="title">
                <h1>Galerie</h1>
            </div>
            <section>
                <ul>
                    <li class="list active" data-filter="all">All</li>
                    <li class="list" data-filter="mariage">Mariage</li>
                    <li class="list" data-filter="grossesse">Grossesse</li>
                    <li class="list" data-filter="bebe">Bébé</li>
                    <li class="list" data-filter="famille">Famille</li>
                    <li class="list" data-filter="bapteme">Baptême</li>
                    <li class="list" data-filter="couple">Couple</li>
                </ul>
                <div class="product">
                    <div class="itemBox" data-item="mariage"><img src="img/mariage/mariage1.jpg" alt="image de mariage"></div>
                    <div class="itemBox" data-item="mariage"><img src="img/mariage/mariage2.jpg" alt="image de mariage"></div>

                    <div class="itemBox" data-item="grossesse"><img src="img/grossesse/grossesse1.jpg" alt="image de grossesse"></div>
                    <div class="itemBox" data-item="grossesse"><img src="img/grossesse/grossesse2.jpg" alt="image de grossesse"></div>
                    <div class="itemBox" data-item="grossesse"><img src="img/grossesse/grossesse3.jpg" alt="image de grossesse"></div>
                    <div class="itemBox" data-item="grossesse"><img src="img/grossesse/grossesse4.jpg" alt="image de grossesse"></div>

                    <div class="itemBox" data-item="bebe"><img src="img/bebe/bebe1.jpg" alt="image de bébé"></div>
                    <div class="itemBox" data-item="bebe"><img src="img/bebe/bebe2.jpg" alt="image de bébé"></div>
                    <div class="itemBox" data-item="bebe"><img src="img/bebe/bebe3.jpg" alt="image de bébé"></div>

                    <div class="itemBox" data-item="famille"><img src="img/famille/famille1.jpg" alt="image de famille"></div>
                    <div class="itemBox" data-item="famille"><img src="img/famille/famille2.jpg" alt="image de famille"></div>
                    <div class="itemBox" data-item="famille"><img src="img/famille/famille3.jpg" alt="image de famille"></div>
                    <div class="itemBox" data-item="famille"><img src="img/famille/famille4.jpg" alt="image de famille"></div>

                    <div class="itemBox" data-item="bapteme"><img src="img/bapteme/bapteme1.jpg" alt="image de bapteme"></div>
                    <div class="itemBox" data-item="bapteme"><img src="img/bapteme/bapteme2.jpg" alt="image de bapteme"></div>

                    <div class="itemBox" data-item="couple"><img src="img/couple/couple1.jpg" alt="image de couple"></div>
                    <div class="itemBox" data-item="couple"><img src="img/couple/couple2.jpg" alt="image de couple"></div>
                    <div class="itemBox" data-item="couple"><img src="img/couple/couple3.jpg" alt="image de couple"></div>
                </div>
            </section>
        </main>

        <footer>
            <div class="footer color-footer">
                
                <ul class="footer__links">
                    <li class="footer__link"><a href="../../index.php">Accueil</a></li>
                    <li class="footer__link"><a href="galerie.php">Galerie</a></li>
                    <li class="footer__link"><a href="../tarif/tarif.php">Tarifs et prestations</a></li>
                    <li class="footer__link"><a href="../contact/contact.php">Me contacter</a></li>
                </ul>
                <div class="footer__socials">
                    <p>Me suivre</p>
                    <a class="footer__social" href="#"><img src="../../img/icons8-facebook.svg" alt="icon lien facebook"></a>
                    <a class="footer__social" href="#"><img src="../../img/icons8-instagram.svg" alt="icon lien instagram"></a>
                </div>
                

            </div>
        </footer>
    </body>
    <script src="../../js/header-global.js"></script>
    <script src="js/filtre_galerie.js"></script>
</html>