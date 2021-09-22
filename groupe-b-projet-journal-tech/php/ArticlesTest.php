<?php

class ArticlesTest {
public $html;
public $container;
public $col1;
public $col2;
public $btn;
public $fin;

public function __construct()
{
    $this->container = "<div class=\"container-fluid\"><div class=\"row\"><div class=\"col-8 offset-2 article_base\"><div class=\"row\">";
}

public function carousel($id)
{
    if ($id == 0)
    {
        $this->carousel = "<div class=\"carousel-item active\">";
    }
    else
    {
        $this->carousel = "<div class=\"carousel-item\">";
    }    
}

public function setCol1($img)
{
    $this->col1 = "<div class=\"col-3 article_img\"><img src=\"$img\" class=\"img-responsive\"></div>";
}

public function setCol2($categorie, $titre, $description, $auteur, $date, $dateMod)
{
    $this->col2 = "<div class=\"col\">
                    <div class=\"row\">
                        <div class=\"col-2 offset-5 text-center\" id=\"$categorie\">$categorie</div>
                    </div>
                    
                    <div class=\"row\">
                        <div class=\"col-6 offset-3 text-center fw-bolder\">$titre</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12 article_descri text-center fw-light\">$description</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-4 offset-4 text-center fw-lighter\">$auteur</div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-8 offset-2 text-center fw-lighter\">$date $dateMod</div>
                    </div>
                </div>";
}

public function setBtn($id)
{
    $this->btn = "<div class=\"row\">
                    <div class=\"col-2 offset-6\">
                        <button value=\"Modifier\" onclick=\"afficherFormModifierFormule($id)\" class=\"button_DelUpd\">Modifier</button>
                    </div>
                    <div class=\"col-2\">
                        <form action=\"./delete.php\" method=\"post\" class=\"col\">
                            <input type=\"submit\" name=\"supprimer$id\" id=\"supprimer$id\" value=\"Supprimer\" class=\"button_DelUpd\">
                        </form>
                    </div>
                </div>";
}

public function getArticleCar()
{
    $this->html = "";
    $this->html .= $this->carousel;
    $this->html .= $this->container;
    $this->html .= $this->col1;
    $this->html .= $this->col2;
    $this->html .= $this->btn;
    $this->html .= "</div></div></div></div></div>";    
    echo $this->html;
}

public function getArticle()
{
    $this->html = "";
    $this->html .= $this->container;
    $this->html .= $this->col1;
    $this->html .= $this->col2;
    $this->html .= "</div></div></div></div></div>";    
    echo $this->html;
}

}
?>