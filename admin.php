<!DOCTYPE html>

<?php
include_once("php/code.php");

$code = new code;
$codeentier = $code->get_Code();
?>

    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
      <body>
          <div class="window">
              <div class="rectangle1">
                  <div class="admin">ADMIN</div>
                  <form method="post" action="admin.php">
                      <div class="container">
                        <label for="nb1"></label>
                            <input type="number" min="0" placeholder="Nombre1" class="addnb" name="nb1" required>
                        <label for="nb2"></label>
                            <input type="number" min="0" placeholder="Nombre2" class="addnb2" name="nb2" required>
                        <label for="nb3"></label>
                            <input type="number" min="0" placeholder="Nombre3" class="addnb3" name="nb3" required>
                        <label for="nb4"></label>
                            <input type="number" min="0" placeholder="Nombre4" class="addnb4" name="nb4" required>
                        <label for="nb5"></label>
                            <input type="number" min="0" placeholder="Nombre5" class="addnb5" name="nb5" required>
                        <button type="submit" name="change" class="change" value="change">Ajouter</button>
                      </div>
                        <?php
                          $codeentier = $code->get_Code();
                          foreach($codeentier as $c)
                            {
                        ?>
                            <div class="code">code secret: <?php echo($c['nombre1']); echo($c['nombre2']); echo($c['nombre3']); echo($c['nombre4']); echo($c['nombre5']);?></div>
                        <?php
                            }
                        ?>
                      <div class="retour">
                          <a href="index.php">Retour</a>
                      </div>
                      <div class="deco">
                          <a href="php/disconnect.php">Deconnection</a>
                      </div>
                  </form>
              </div>
          </div>
      </body>
      </html>

          <?php
          if(isset($_POST['change'])){
              if($_POST['nb1'] != NULL && $_POST['nb2'] != NULL && $_POST['nb3'] != NULL && $_POST['nb4'] != NULL && $_POST['nb5'] != NULL)
              {
                $nombre1 = ($_POST['nb1']);
                $nombre2 = ($_POST['nb2']);
                $nombre3 = ($_POST['nb3']);
                $nombre4 = ($_POST['nb4']);
                $nombre5 = ($_POST['nb5']);

                $code->updatecode($nombre1, $nombre2, $nombre3, $nombre4, $nombre5);
              }
          }
          ?>

    </body>
    </html>
