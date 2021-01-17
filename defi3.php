<!DOCTYPE html>

<?php
include_once("php/code.php");

$code = new code;
$codeentier = $code->get_Code();
?>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Defi 3</title>
    <link rel="stylesheet" href="css/defis.css">
    <script src="js/defis3.js" charset="utf-8"></script>
  </head>
  <body>
    <h2 class="test">Trouvez le nombre</h2>
    <input type="text"  id="nb">
    <button type="button" onclick="testnb();">Trouver</button>
    <div id="chiffre3">
      <?php
      $codeentier = $code->get_Code();
      foreach($codeentier as $c)
      {?>
          <h3>Le troisième numéro du code est : <?php echo($c['nombre3']);?> </h3>
      <?php
      }
      ?>
    </div>
  </body>
</html>
