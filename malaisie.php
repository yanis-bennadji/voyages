<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malaisie</title>
    <link rel="stylesheet" href="../css/malaisie.css?t=<?= time(); ?>"/>
    <link rel="stylesheet" href="../css/voyages.css">
</head>
<body>

    <header>
            <?php
            include '../../code/page/_Header.php';
            ?>
    </header>

    <main>
        <h1>MALAISIE</h1>
            <figure>
                <section class="container">
                    <img class= "images"src="../../assets/image/maïla/kualalampur.jpeg" alt="kualalampur">
                    <h2>Kuala Lampur, capitale historique</h2>
                    <p class="texte-malaisie">La capitale de la Malaisie saura vous intriguer avec ses tours jumelles. Les Tours Petronas regroupent en leur sein des bureaux, des boutiques,un centre multimédia.Elles sont reliées par un skybridge qui se situe à 170 mètres de hauteur. Pour avoir une vue imprenable sur la ville et ses environs, les Tours Petronas sont absolument à faire à Kuala Lumpur.</p>
                </section>
                <section>
                    <img class= "images"src="../../assets/image/maïla/plagemalaisie.jpg" alt="plagemalaisie">
                    <h2>Plage de Langkawi</h2>
                    <p class="texte-malaisie">Au nord-ouest de la Malaisie, s'étend un archipel de 99 îles dont les îles Langkawi.Les îles Langkawi offrent des paysages resplendissants,de hautes falaises surmontées de forêts vierges plongent dans la mer. Aujourd'hui, Langkawi est un pôle touristique majeur, regroupant hôtels et restauration.</p>
                </section>
                <section>
                    <img class= "images"src="../../assets/image/maïla/MontKinabalu.jpeg" alt="montkinabalu">
                    <h2>Mont Kinabalu</h2>
                    <p class="texte-malaisie">Le Mont Kinabalu est un site touristique incontournable situé à Kota Belud, en Malaisie. Cette montagne majestueuse est la plus haute de tout le pays, offrant des vues à couper le souffle depuis son sommet. L'ascension du Mont Kinabalu est une expérience unique en son genre, permettant aux visiteurs de profiter de paysages spectaculaires. Les amateurs de randonnée apprécieront également les cascades environnantes.</p>
                </section>
            </figure>
                <h3>Les plats malaisiens</h3>
            <figure class="cuisine">
                <img class= "images"src="../../assets/image/maïla/plat1.jpg" alt="plat 1">
                <img class= "images"src="../../assets/image/maïla/plat2.jpg" alt="plat 2">
                <img class= "images"src="../../assets/image/maïla/plat3.jpg" alt="plat 3">
            </figure>
                <h4>Où se situe la Malaisie ?</h4>
                <p class="localiser">La Malaisie se trouve en Asie du Sud-Est.</p>
            <section class="carte">
                <img class= "minicarte"src="../../assets/image/maïla/cartemalaisie.png" alt="">
            </section> 
    </main>  

    <footer>
            <?php
            include '../../../voyages/code/page/_Footer.php';
            ?>
    </footer>
</body>
</html>