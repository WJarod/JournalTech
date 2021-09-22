<?php

$sqlRead = "SELECT `num_article`, `titre`, `image`, `description`, `date`, `auteur`, `dateMod`, `id_categorie`  FROM `articles` ORDER BY `id_categorie`";
$result = $db->query($sqlRead);

?>

<?php foreach($result as $articles) {
$id = $articles[0];
$nom = $articles[1];
$img = $articles[2];
$contenu = $articles[3];
$date = $articles[4];
$auteur = $articles[5];
$dateMod = $articles[6];
$categorie = $articles[7];


if (empty($dateMod))
{
    $dateMod = "";
}
else
{
    $dateMod = " <span class=\"mod\"> // Article modifier le $dateMod</span>";
}

if ($categorie == 2)
    {
        $categorie = "CSS";
    }
    elseif ($categorie == 3)
    {
        $categorie = "JS";
    }
    elseif ($categorie == 1)
    {
        $categorie = "PHP";
    }

$article = new ArticlesTest();
$article-> setCol1($img);
$article->setCol2($categorie, $nom, $contenu, $auteur, $date, $dateMod);
$article->getArticle();
}
?>