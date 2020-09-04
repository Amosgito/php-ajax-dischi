<!-- GOAL:
Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.
- Attraverso l'utilizzo di AJAX: al caricamento
della pagina ajax chiederà attraverso una
chiamata i dischi a php e li stamperà
attraverso handlebars.
Utilizzare: Html, JS, jQuery, handlebars, Php -->

<?php
require 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
    <title>PhP Disks</title>
</head>
<body>
<div class='topbar'>
    <img src="spotify-download-logo-30.png" alt="logo spotify">
</div>
<div class='background'>


<?php  

 foreach ($DATA['response'] as $value) {
?>

    <div class='container'>

        <div><img src="<?php echo $value['poster']; ?>" alt="poster img"></div>
        
        <h3 class='title'><?php echo $value['title']; ?></h3>

        <p class='author'><?php echo $value['author']; ?></p>

        <p class='genre'><?php echo $value['genre']; ?></p>

        <p class='year'><?php echo $value['year']; ?></p>
    </div>

<?php   
 };
 ?>

</div>

    
</body>
</html>