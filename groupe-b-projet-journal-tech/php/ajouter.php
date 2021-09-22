<?php 
include '../include/header.html';
include './Form.php';
include './connexion.php';



?>

<!-- slider -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false" data-bs-pause="hover">
    <div class="carousel-inner">
      <?php 
        include './ArticlesTest.php';
        include './affichage2.php';
        include './update.php';
        include './delete.php';
      ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<?php 
$form = new Form();
$form->setInput();
$form->setInput1();
$form->setInput2();
$form->setInput3();
$form->setCheck();
$form->setSubmit();
$form->getForm();

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;
?>

<!-- Script de validation Bootstrap -->
<script>
// désactiver les soumissions de formulaires s'il y a des champs non valides
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Récupérez tous les formulaires auxquels nous voulons appliquer des styles de validation Bootstrap personnalisés
    var forms = document.getElementsByClassName('needs-validation');
    // Boucle sur eux et empêche la soumission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

</script>
<script type="text/javascript">
function reste(texte)
{
    var restants=365-texte.length;
    document.getElementById('caracteres').innerHTML=restants;
}
</script>

<!-- POPUP -->
<div class="contenus">
      <div>
            <form action="./update.php" class="container-fluid needs-validation2" method="post" novalidate>
                <div class="row">
                    <label for="validationCustom11">Titre</label>
                    <input type="text" id="validationCustom11" name="titre" class="inputStyle form-control" patern="[a-zA-Z]{1-10}" required>             
                </div>
                <div class="row">
                </div>
                <div class="row formStyle">
                    <label for="validationCustom12">Url image</label>
                    <input type="url" id="validationCustom12" name="img" class="inputStyle form-control" required>
                </div>
                <div class="row formStyle">
                    <label for="validationCustom13">Description</label>
                    <textarea name="description" id="validationCustom13" cols="30" rows="5" class="inputStyle form-control" maxlength="365" required></textarea>
                </div>
                <div class="row formStyle">
                    <label for="validationCustom13">Auteur</label>
                    <input type="text" id="validationCustom13" name="auteur" class="inputStyle form-control" patern="[a-zA-Z]{1-10}" required>
                </div>
                <div class="row formStyle">
                    <label for="dateMod"></label>
                    <input type="hidden" id="dateMod" name="dateMod" class="inputStyle form-control" value="<?php echo $today; ?>"required>
                </div>
                <div class="row formStyle">
                  <label for="validationCustom15">Catégorie</label>
                  <select class="form-control inputStyle" id="validationCustom15" name="catégorie" required><option></option><option>CSS</option><option>JS</option><option>PHP</option></select>
                </div>
                <div class="row formStyle">
                  <input type="submit" value="Modifier" name="" id="modifier" class="col-4 offset-4 fill button_Submit" />                
                </div>
            </form>
            <div class="row formStyle">
                <div class="col-4 offset-4"><button class="button_Submit" onclick="cacherFormModifierFormule()">Anuler</button></div>
            </div>
      </div>
  </div>

<script>

// désactiver les soumissions de formulaires s'il y a des champs non valides
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Récupérez tous les formulaires auxquels nous voulons appliquer des styles de validation Bootstrap personnalisés
    var forms = document.getElementsByClassName('needs-validation2');
    // Boucle sur eux et empêche la soumission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


// function qui permet d'afficher la popupFormule avec le formulaire
      function afficherFormModifierFormule(id){
          formuleID = id;

          var btnUpd = document.querySelector("#modifier")
          var popupFormule = document.querySelector(".contenus");
          popupFormule.classList.remove("cacher")
          btnUpd.setAttribute("name", `update${id}`)
          popupFormule.classList.add("montrer");
      }

      // function qui permet de cacher la popupFormule si la personne veut anuler
      function cacherFormModifierFormule(){
          var popupFormule = document.querySelector(".contenus");
          popupFormule.classList.add("cacher");
      }
// fin fonctionnalité pour modifier les formules
</script>

<?php include '../include/footer.html';
?>





