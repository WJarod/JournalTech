<?php


class Form{


    public $section;
    public $element;
    public $input;
    public $input1;
    public $input2;
    public $input3;
    public $check;
    public $submit;

    public function __construct($_method = "post")
    {
        $this->element = "<section class=\"row\"><div class=\"col-8 offset-2\"><form action=\"./add.php\" class=\"needs-validation addArticle\" method=\"$_method\" novalidate>";
    }

    public function setInput()
    {
        $this->input .= "<div class=\"row\"><div class=\"mb-3 col-6\"><label for=\"validationCustom01\" class=\"form-label\">Titre</label><input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"titre\" patern=\"[a-zA-Z]{1-10}\" required><div class=\"invalid-feedback\">Titre invalide</div></div><div class=\"mb-3 col-6\"><label for=\"validationCustom02\" class=\"form-label\">Url image</label><input type=\"url\" class=\"form-control\" id=\"validationCustom02\" name=\"img\" required><div class=\"invalid-feedback\">Url invalide</div></div></div>";
    }

    public function setInput1()
    {
        $this->input1 .= "<div class=\"mb-3\"><label for=\"validationCustom03\">Description</label><textarea class=\"form-control\" id=\"validationCustom03\"  name=\"description\" rows=\"5\" maxlength=\"365\" onkeyup=\"reste(this.value);\" required></textarea><span class=\"fw-lighter\">Nombre de caractères restants : </span><span class=\"fw-lighter\" id=\"caracteres\">365</span><div class=\"invalid-feedback\">Description invalide</div></textarea></div>";
    }

    public function setInput2()
    {
        $this->input2 .= "<div class=\"row\"><div class=\"mb-3 col-6\"><label for=\"validationCustom04\" class=\"form-label\">Auteur</label><input type=\"text\" class=\"form-control\" id=\"validationCustom04\" name=\"auteur\" required><div class=\"invalid-feedback\">Auteur invalide</div></div><div class=\"mb-3 col-6\"><label for=\"validationCustom05\" class=\"form-label\">Date de publication</label><input type=\"date\" class=\"form-control\" id=\"validationCustom05\" name=\"date\" required><div class=\"invalid-feedback\">Date invalide</div></div></div>";
    }

    public function setInput3()
    {
        $this->input3 .= "<div class=\"row btnform\"><div class=\"form-group col-4 offset-1\"><label for=\"validationCustom06\">Catégorie</label><select class=\"form-control\" id=\"validationCustom06\" name=\"catégorie\" required><div class=\"invalid-feedback\">url invalide</div><option></option><option>CSS</option><option>JS</option><option>PHP</option></select></div>";
    }

    public function setCheck()
    {
        $this->check .= "<div class=\"form-check col-5 offset-1 check\" name=\"check\"><label class=\"form-check-label\" for=\"invalidCheck\">En cochant la case, vous accepter nos conditions d'utilisation</label><input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"invalidCheck\" required><label class=\"form-check-label\" for=\"invalidCheck\"><div class=\"invalid-feedback\">merci de chocher la case...</div></div></div>";
    }

    public function setSubmit()
    {
        $this->submit .= "<div class=\"row\"><div class=\"col-1 offset-4\"></div><input type=\"submit\" value=\"Ajouter\" name=\"submit\" class=\"col-4 offset-2 fill button_Submit\" /></div></div>";
    }

    public function getForm()
    {
        $this->section = "";
        $this->section .= $this->element;
        $this->section .= $this->input;
        $this->section .= $this->input1;
        $this->section .= $this->input2;
        $this->section .= $this->input3;
        $this->section .= $this->check;
        $this->section .= $this->submit;
        $this->section .= "</form></div></section>";
        echo $this->section;
    }


}
?>





