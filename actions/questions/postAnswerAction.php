<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){
        
        //Les données de la réponse
        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $reponse_date = date('d/m/Y');
        $reponse_pseudo_author = $_SESSION['pseudo'];

        
        $insertAnswer = $bdd->prepare('INSERT INTO reponse(contenue_reponse, date_reponse, id_question, id_users, pseudo_auteur)VALUES(?, ?, ?, ?, ?)');
        $insertAnswer->execute(array($user_answer, $reponse_date, $idOfTheQuestion, $_SESSION['id'], $reponse_pseudo_author ));

    }

}