<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/voyages.css">
    <title>Contact</title>
</head>
<body>
    <header>
            <?php
            include '../../../voyages/code/page/_Header.php';
            ?>

    </header>
    <main>
    <section class="contact-form">
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Envoyer</button>
        </form>
    </section>
    </main>
    <footer>
            <?php
            include '../../../voyages/code/page/_Footer.php';
            ?>

    </footer>
    
</body>
</html>
<?php
function my_fonction(&$nombre){
    $nombre = 6+14;
}
$nombre = 0;
my_fonction($nombre);
echo $nombre;
?>