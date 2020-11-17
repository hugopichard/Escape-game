<!DOCTYPE html>

<?php
include_once("php/code.php");

$code = new code;
$codeentier = $code->get_Code();
?>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Defi 1</title>
    <link rel="stylesheet" href="css/defis.css">
    <script src="js/script.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <div class="">
        <img src="assets/racoon.jpg" width="40%" height="40%" class="racoonimg"  id="imgdef1">
          <div class="questions">
            <h1 class="question">Quel est cet animal ?</h1>
            <div class="reponses">
              <button type="button" name="button" onclick="changeimg();">Un raton laveur</button>
              <button type="button" name="button" onclick="changeimg();">Un Lion</button>
              <button type="button" name="button" onclick="changeimg();">Racoon en Anglais</button>
              <button type="button" name="button" onclick="windefi1();">La réponse D</button>
            </div>
            <div class="restart">
              <button type="button" name="button" id="restart" onclick="history.go(0)">restart</button>
            </div>
                <div id="chiffre1">
                    <?php
                    $codeentier = $code->get_Code();
                    foreach($codeentier as $c)
                    {?>
                        <h3>Le premier numéro du code est : <?php echo($c['nombre1']);?> </h3>
                    <?php
                    }
                    ?>
                </div>
          </div>
      </div>
    </div>
  </body>
</html>
