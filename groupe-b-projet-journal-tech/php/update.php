<?php



?>


<?php
include './connexion.php';

$sqlRead = "SELECT `num_article`, `titre`, `image`, `description`, `dateMod`, `auteur`, `id_categorie` FROM `articles` ORDER BY `id_categorie`";
$result = $db->query($sqlRead);

foreach($result as $articles) {
    $id = $articles[0];

    if (isset($_POST["update$id"])){

        include "./connexion.php";
    
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $titre = validate($_POST['titre']);
        $url = validate($_POST['img']);
        $description = validate($_POST['description']);
        $categorie = validate($_POST['catégorie']);
        $auteur = validate($_POST['auteur']);
        $dateMod = validate($_POST['dateMod']);
    
        if ($categorie == "CSS")
        {
            $categorie = 2;
        }
        elseif ($categorie == "JS")
        {
            $categorie = 3;
        }
        elseif ($categorie == "PHP")
        {
            $categorie = 1;
        }
    
        $sqlUpdate = "UPDATE `articles` SET `titre`='$titre',`image`='$url',`description`='$description',`dateMod`='$dateMod',`auteur`='$auteur',`id_categorie`='$categorie'
        WHERE num_article = '$id'";
        $result = $db->query($sqlUpdate);
    
        if ($result)
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