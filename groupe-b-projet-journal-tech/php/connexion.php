<?php 

$host = "localhost";
$name = "Journal-Tech";
$user = "root";
$pass = "root";


    try 
    {
        $db = new PDO ("mysql:host=$host;dbname=$name", $user, $pass);
    } catch (PDOException $e) 
    {
        $error = "Erreur :" . $e->getMessage() . "<br>";
        print $error;
        die;
    }

?>