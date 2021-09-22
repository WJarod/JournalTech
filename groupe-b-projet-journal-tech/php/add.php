<?php

if (isset($_POST['submit'])){

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
    $date = validate($_POST['date']);

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


    $sql = "INSERT INTO `articles`(`titre`, `image`, `description`, `date`, `auteur`, `id_categorie`) 
    VALUES ('$titre','$url','$description','$date','$auteur','$categorie')";
    $result = $db->query($sql);
    if ($result)
    {
        header("Location: ../index.php");
    }
    else
    {
        header("Location: ./ajouter.php");
    }

}

?>