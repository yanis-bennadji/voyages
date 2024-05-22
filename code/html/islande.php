<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/islande.css" ?t="<?= time(); ?> ">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>L'Islande</title>
</head>

<body>
    <main>
        <article class="bgimageislande">
            <img src="../../assets/image/adham/islandecascade.jpg" alt="">
            <h2>
                Besoin de sensation ?
            </h2>
            <h1>
                Bienvenue en Islande
            </h1>
        </article>
        <article class="bgimageislande2">
            <img src="../../assets/image/adham/islandelacglace.jpg" alt="">
            <img src="../../assets/image/adham/islandeplagenoir.jpg" alt="">
            <h2>
                Réputé pour ses paysages spectaculaires et sa nature préservée plongez au coeur d'une aventure
                inoubliable et magnifique.
            </h2>
        </article>
        <article class="bgimageislande3">
            <img src="../../assets/image/adham/islandemontagne.jpg" alt="">
        </article>
        <div class="videoislande">
            <iframe width="699vw" height="300vw" src="https://www.youtube.com/embed/7i_kLFuCUnA" title="L&#39;Islande en trois minutes : le pays du feu et de la glace" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <img src="../../assets/image/adham/lune-removebg-preview.png" alt="">
        </div>
        <div class="textislande">
            <p>L'Islande est une île volcanique située dans l'Atlantique Nord,
                à mi-chemin entre l'Europe et l'Amérique du Nord.
                Avec une superficie de 103 000 km²,
                c'est le pays insulaire le plus grand d'Europe. Entre champs de lave, glaciers impressionnants, geysers et
                sources chaudes, c'est un environnement naturel unique et spectaculaire.</p>
        </div>
        <div>
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../assets/image/adham/islandeslide.jpg" class="d-block w-100" alt="..." class="bgimageislande4">
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/image/adham/islandeslide1.jpg" class="d-block w-100" alt="..." class="bgimageislande5">
                    </div>
                    <div class="carousel-item">
                        <img src="../../assets/image/adham/islandeslide2.jpg" class="d-block w-100" alt="..." class="bgimageislande6">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>