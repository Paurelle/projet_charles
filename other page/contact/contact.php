<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/header.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="../../css/footer.css">
        <title>Contact</title>
    </head>
    <body>
        <header>
            <nav class="navbar color-header" role="navigation">
                <div class="navbar__logo">
                    <a href="../../index.php"><img src="../../img/logo.PNG" alt="logo de charles"></a>
                </div>    
                <ul class="navbar__links">
                    <li class="navbar__link first"><a href="../../index.php">Accueil</a></li>
                    <li class="navbar__link second"><a href="../galerie/galerie.php">Galerie</a></li>
                    <li class="navbar__link third"><a href="../tarif/tarif.php">Tarif et prestations</a></li>
                    <li class="navbar__link fourth"><a href="contact.php">Me contacter</a></li>
                </ul>   
                <button class="burger">
                    <span class="bar"></span>  
                </button>   
            </nav>
        </header>

        <main>
            <div class="title">
                <h1>Me contacter</h1>
            </div>
            
            <section class="section">
                <form action="https://formspree.io/f/xgerjlnw" method="post">
                    <label for="name">Nom</label>
                    <input name="Name" id="name" type="text" placeholder="Votre nom" required>

                    <label for="email">Email</label>
                    <input name="Email" id="email" type="email" placeholder="Votre email" required>

                    <label for="message">Message</label>
                    <textarea name="Message" id="message" type="text" placeholder="Votre message ..." class="message" required></textarea>

                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </main>

        <footer>
            <div class="footer color-footer">
                
                <ul class="footer__links">
                    <li class="footer__link"><a href="../../index.php">Accueil</a></li>
                    <li class="footer__link"><a href="../galerie/galerie.php">Galerie</a></li>
                    <li class="footer__link"><a href="../tarif/tarif.php">Tarif et prestations</a></li>
                    <li class="footer__link"><a href="contact.php">Me contacter</a></li>
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
</html>