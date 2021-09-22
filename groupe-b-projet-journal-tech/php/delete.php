<?php
include './connexion.php';

$sqlRead = "SELECT `num_article`, `titre`, `image`, `description`, `date`, `auteur`, `id_categorie` FROM `articles` ORDER BY `id_categorie`";
$result = $db->query($sqlRead);

foreach($result as $articles) {
    $id = $articles[0];

    if(isset($_POST["supprimer$id"])) {
    
        $sqlDel = "DELETE FROM `articles` WHERE `num_article` = $id";
        $resultDel = $db->query($sqlDel);
    
        if ($resultDel)
        {
            header("Location: ../index.php");
        }
        else
        {
            header("Location: ./ajouter.php");
        }
    }
}

    
?>
