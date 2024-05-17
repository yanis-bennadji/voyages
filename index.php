<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travellers</title>
    <link rel="stylesheet" href="./code/css/voyages.css" <?= time(); ?>>
</head>
<body>

    <header>
            <?php
            include './code/page/_Header.php';
            ?>

    </header>

    <main>
        <h1>Bienvenue sur le site des Travellers !</h1>

        <section class="section1">    <!-- section contenant le texte + planisphère -->
            <p>
                Venez découvrir les différents pays que les membres de notre équipe ont personnellement choisis !
                 <br> <br> <br>
                Vous allez pouvoir en apprendre plus sur la culture, l'environnement et les histoires des 10 pays selectionnés !

            </p>

            

            


            <!-- <img class="planisphere" src="./assets/image/yanis/carte-monde-couleur.jpg" alt="planisphere"> -->
            <img class="planisphere" src="./assets/image/yanis/logo-avion.jpg" alt="">
        </section>
        
        <section class="section2">     <!-- section contenant les drapeaux --> 
            <a href="./code/html/suisse.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-suisse.png" alt="">

            </a>
            
            <a href="./code/html/islande.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-islande.png" alt="">

            </a>

            <a href="./code/html/france.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-france.png" alt="">

            </a>

            <a href="./code/page/italie.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-italie.png" alt="">

            </a>

            <a href="">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-japon.png" alt="">

            </a>

            <a href="./code/html/malaisie.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-malaisie.png" alt="">

            </a>

            <a href="./code/html/ilemaurice.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-maurice.png" alt="">

            </a>

            <a href="./code/html/algérie.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-algerie.png" alt="">

            </a>

            <a href="./code/html/maldives.php">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-maldives.png" alt="">

            </a>

            <a href="">
            <img class="drapeau-index" src="./assets/image/yanis/drapeau-guadeloupe.png" alt="">  

            </a>
        </section>

       

    </main>

    <footer>
            <?php
            include '../voyages/code/page/_Footer.php';
            ?>

    </footer>

    
</body>
</html>

