

<form action="index.php" method="post"><br><br>
  <div class="form-row">
    <div class="col-md-4 mb-2">

<h1>Formulaire d'ajout des données</h1>
 prenom : <input type="text" name="prenom"/> <br><br>
 nom : <input type="text" name="nom" /><br><br>
 age(10 à 60 ans) : <input type="text" name="age" /> <br><br>
 <div class="form-group">
 <label for="">taille(entre 1.6 et 2.0m)</label>
     <input  name="taille" id="taille" type="number" min="1.6" max="2" step="0.1" class="form-control" /> 
    </div> 
    </div>
  </div> 
    <div class="form_item">
      <div class="options">
        <div class="options_item">
        
        </div>
      </div>
    </div>

        <input type="radio" name="Formateur" value="Apprenants"> Apprenants<br> <br>
        <input type="radio" name="Formateur" value="Formateur"> Formateur<br> <br>
         <!-- Name for strong select -->
        <button class="btn btn-primary btn-lg" href="#" role="button" type="submit" name="submit">Enregistre les données</button>
        
</form>
 
<!-- <form action="index.php" method="post"><br><br>

  <div class="form-row"> <br> <br>
    <div class="col-md12">
    <input type="text" class="form-control btn-outline-dark btn-lg" placeholder="Home">
    </div>
    <div class="col">
      <div class="alert alert-info" role="alert">
    Les données ont bien été sauvegardées
    </div>
   </div>
  </div>
</form>
<form action="index.php" method="post">
<div class="form-row">
  <div class="col-md-6 mb-2">
    <label for="validationCustom03"></label>
<button type="button" class="form-control btn btn-outline-dark btn-lg"id="validationCustom03" required>Home</button>
<div class="invalid-feedback"></div>
<div class="btn-group">
  Name for strong select -->
  <!-- <button type="button"  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" data-display="static" aria-expanded="false">
  Ajouter des données
  </button> --> 

  <!-- <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">
    <button class="dropdown-item" type="button">Debogage</button>
    <button class="dropdown-item" type="button">Concaténation</button>
    <button class="dropdown-item" type="button">Boucle</button>
    <button class="dropdown-item" type="button">Fonction</button>
    <button class="dropdown-item" type="button">Supprimer</button>
  </div>
 </div>
 </div>
</div>  -->

  
  </form> 