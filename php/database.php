 <?php

$DB_DSN = "mysql:dbname=escapegame;host=localhost;port=3306";
$DB_USER = "root";
$DB_PASSWORD = "";

try {
    $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Echec de la connexion : ' . $e->getMessage();
}

?>
