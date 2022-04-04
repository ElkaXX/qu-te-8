<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP procédural</title>
    <?php
    include 'includes/head.php'
    ?>
    
</head>

    <?php
    include 'includes/header.php'
    ?>

<body>

     <?php

     if (isset($_GET['addForm'])){
        include 'includes/form.php' ;
     }

 ////////// Formulaire----
    if(isset($_POST['submit'])){

        $_SESSION['table'] = [
            'prenom' => $_POST['prenom'],
            'nom' => $_POST['nom'],
            'age' => $_POST['age'],
            'taille' => $_POST['taille'],
            'Formateur' => $_POST['Formateur']
        ];
        echo $_SESSION['table']['prenom']. '<br>';
        echo $_SESSION['table']['nom'] . '<br>';
        echo $_SESSION['table']['age'] . '<br>';
        echo $_SESSION['table']['taille'] . '<br>';
        echo $_SESSION['table']['Formateur'] . '<br>';
        ?>
        <div class="alert alert-success text-center" role="alert">
        Les données ont bien été sauvegardées!
        </div>
        <?php
    }
////////////////////
if(!empty($_SESSION)){
    include 'includes/ul.php';

    if (isset($_GET['debug'])){
        print_r($_SESSION['table']);
        echo 'Bonjour je m\'appelle ' . $_SESSION['table']['prenom'] . ' '.  $_SESSION['table']['nom'] . ' ' . $_SESSION['table']['taille'] . 'm' . ' ' . $_SESSION['table']['age'] . 'ans';
    }
    //------
    if (isset($_GET['delete'])){
        session_destroy();
    }
    //----concatenation---
    if(isset($_GET['concatenation'])){
        echo  '<strong><h5>Concatenation</h5></strong><br> ===> construction d\'une phrase avec les données du tableau' . '<strong>' . '<br>'. '<br>' . $_SESSION['table']['prenom'] .' '. $_SESSION['table']['nom'] . '<br>'. '</strong>' . ' je mesure',  '&nbsp',$_SESSION['table']['taille'], 'm' . ' ' . $_SESSION['table']['age'] . 'ans',
        '&nbsp',  'et je fais partie des',  '&nbsp', $_SESSION['table']['Formateur'],'&nbsp',  'de L\'AFCI.' . '<br>';

        echo '===> construction d/une phrase  après maj du tableau' . '<strong>'. '<br>'. strtoupper($_SESSION['table']['prenom'] .' '. $_SESSION['table']['nom']) .  '</strong>' . '<br>'. ' je mesure',  '&nbsp',$_SESSION['table']['taille'], 'm' . ' ' . $_SESSION['table']['age'] . 'ans',
        '&nbsp',  'et je fais partie des',  '&nbsp', $_SESSION['table']['Formateur'],'&nbsp',  'de L\'AFCI.' . '<br>'; 
        echo '===> affichage d/une vergule à la place d\'un point pour la taille' . '<br>' .  '<strong>' . strtoupper($_SESSION['table']['prenom'] .' '. $_SESSION['table']['nom']) .  '</strong>' . '<br>'. ' je mesure',  '&nbsp',$_SESSION['table']['taille'], 'm' . ' ' . $_SESSION['table']['age'] . 'ans',
        '&nbsp',  'et je fais partie des',  '&nbsp', $_SESSION['table']['Formateur'],'&nbsp',  'de L\'AFCI.' . '<br>';
  
    }
    //-- boucle-----
    if(isset($_GET['boucle'])){
        for ($i = 0; $i < 10; $i++){
            echo 'je m\'appelle' . ' ' . $_SESSION['table']['prenom'] . ' '.  $_SESSION['table']['nom'] . ' ' . 'j\'ai' .' '. $_SESSION['table']['age'] . 'ans'  . ' ' . 'je mesure' .' ' . $_SESSION['table']['taille'] . 'm' . '<br>';
        }
    }
    //--fonction---
        function readtable($table){
        foreach( $table as $key => $value){
            echo 'cette ligne correspond à la key: ' . $key .  'et la valeur: ' . $value . '<br>';
        }
       
    }

    readtable($_SESSION['table']);
}


    include 'includes/footer.php' ;
   ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>