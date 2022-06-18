<?php

require('actions/database.php');

if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récupérer l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];

        $getAllAnswersOfThisQuestion = $bdd->prepare('SELECT * FROM reponse WHERE id_question = '.$idOfTheQuestion.' ORDER BY id_reponse DESC');
        $getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion)); 

}else{
    $errorMsg = "Aucune question n'a été trouvée";
}