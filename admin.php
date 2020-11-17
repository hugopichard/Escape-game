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
        <link rel="stylesheet" href="admin.css">
    </head>

    <body>

        <div class="admin">
            <h1>Admin</h1>
            <a href="index.html">
                <div class="titre">retour</div>
            </a>
            <a href="php/disconnect.php">
                <div class="deco">Deconnection</div>
            </a>



                <form method="post" action="admin.php">
                    <label for="nb1"></label>
                        <input type="text" placeholder="Nombre1" class="addnb1" name="nb1" required>
                    <label for="nb2"></label>
                        <input type="text" placeholder="Nombre2" class="addnb2" name="nb2" required>
                    <label for="nb3"></label>
                        <input type="text" placeholder="Nombre3" class="addnb3" name="nb3" required>
                        <button type="submit" name="change" class="change" value="change">Ajouter</button>
                </form>



                <?php
                if(isset($_POST['change'])){
                    if($_POST['nb1'] != NULL && $_POST['nb2'] != NULL && $_POST['nb2'] != NULL)
                    {
                        $nombre1 = ($_POST['nb1']);
                        $nombre2 = ($_POST['nb2']);
                        $nombre3 = ($_POST['nb3']);

                        $code->updatecode($nombre1, $nombre2, $nombre3);
                    }
                }
                ?>

                <?php
                $codeentier = $code->get_Code();
                foreach($codeentier as $c)
                {?>
                <div class="titre"> <h3>code secret:</h3> <?php echo($c['nombre1']); echo($c['nombre2']); echo($c['nombre3']); echo($c['nombre4']); echo($c['nombre5']);?></div>
                <?php
                }
                ?>






    </body>
    </html>
