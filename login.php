<!DOCTYPE html>
<?php
session_start();
include_once("php/code.php");

$user = new Users;
if(isset($_SESSION["account"]["id"]))
{
    header('Location: admin.php');
}
if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
{
    if($_POST['uname'] != NULL && $_POST['psw'] != NULL)
    {
        $user->connect($_POST["uname"], $_POST["psw"]);
    }
    else
    {
        echo("Remplis le formulaire");
    }
}
}
?>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>
        <div class="window">
            <div class="rectangle1">
                <div class="admin">ADMIN</div>
                <form action="login.php" method="post">
                    <div class="container">
                        <label for="uname"></label>
                        <input type="text" placeholder="Identifiant" class="identifiant" name="uname" required>
                        <label for="psw"></label>
                        <input type="password" placeholder="Mot de passe" class="motDePasse" name="psw" required>
                        <button type="submit" name="submit" class="connection" value="OK">Connexion</button>
                    </div>
                    <div class="retour">
                        <a href="index.php">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </body>
    </html>
