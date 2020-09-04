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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class='background'>

<div class='topbar'>
    <img src="" alt="logo spotify">
</div>

<?php  

 foreach ($DATA['response'] as $value) {
?>
    <div class='container'>

        <div><img src="<?php echo $value['poster']; ?>" alt="poster img"></div>
        
        <div class='title'><?php echo $value['title']; ?></div>

        <div class='author'><?php echo $value['author']; ?></div>

        <div class='genre'><?php echo $value['genre']; ?></div>

        <div class='year'><?php echo $value['year']; ?></div>
    </div>
<?php
    
 };

 ?>
</div>

    
</body>
</html>