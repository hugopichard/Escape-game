<?php
require("database.php");

class Users {
    function get_user($id)
    {
        global $db;

        $request = "SELECT * FROM Users WHERE id=$id";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        return($user);
    }

    function connect($username, $password)
    {
        global $db;
        echo($username);
        $request = "SELECT * FROM Users WHERE username=\"$username\"";
        $resultat = $db->query($request);
        $user = $resultat->fetch();

        if(password_verify($password, $user["password"]))
        {
            session_start();
            $_SESSION["account"] = [
                'id' => $user["id"],
                'username' => $user["username"]
            ];

            header('Location: ../admin.php');
        }
        else
        {
            echo("Impossible de se connecter");
        }
    }
}


class code {

    function get_Code()
        {
          global $db;

          $request = "SELECT * FROM code";
          $resultat = $db->query($request);
          $user = $resultat->fetchAll();


          return($user);
        }

    function updatecode($nombre1= "nombre1", $nombre2 = "nombre2", $nombre3 = "nombre3", $nombre4 = "nombre4", $nombre5 = "nombre5", $id = "1")
        {
            global $db;

            $request = $db->prepare('UPDATE code SET nombre1=?, nombre2=?, nombre3=?, nombre4=?, nombre5=? WHERE id="1"');
            $request->execute([$nombre1, $nombre2, $nombre3, $nombre4, $nombre5 ]);
        }
    }
?>
