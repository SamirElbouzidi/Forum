<?php

require('actions/database.php');

if(isset($_POST['validate'])){

    if(!empty($_POST['answer'])){
        
        //Les données de la réponse
        $user_answer = nl2br(htmlspecialchars($_POST['answer']));
        $reponse_date = date('d/m/Y');
         

        
        $insertAnswer = $bdd->prepare('INSERT INTO reponse(contenue_reponse, date_reponse, id_question, id_users)VALUES( ?, ?, ?, ?)');
        $insertAnswer->execute(array($user_answer, $reponse_date, $idOfTheQuestion, $_SESSION['id']));

    }

}