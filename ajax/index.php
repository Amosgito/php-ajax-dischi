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

 $dress = $_GET('select#dress');
 $size = $_GET('select#size');

  foreach ($db as $value) {
    
    if ($dress === $value) {

        foreach ($db['size'] as $dbSize) {
           
            if ($dbSize === $size ) {

                echo json_encode ('true');
                return;
            }
        }
    } else {

        echo json_encode('false');
    }
  }

?>

