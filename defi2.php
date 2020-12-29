<!DOCTYPE html>

<?php
include_once("php/code.php");

$code = new code;
$codeentier = $code->get_Code();
?>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Defi 2</title>
    <link rel="stylesheet" href="css/defis.css">
    <script src="js/script.js" charset="utf-8"></script>
  </head>
  <body>
    <h2 class="test">Demandez le numéro 2</h2>
    <input type="text"  id="in">
    <button type="button" onclick="getValue();">Poser ma question</button>
        <div id="chiffre2">
            <?php
            $codeentier = $code->get_Code();
            foreach($codeentier as $c)
            {?>
                <h3>Le deuxiéme numéro du code est : <?php echo($c['nombre2']);?> </h3>
            <?php
            }
            ?>
        </div>
  </body>
</html>
