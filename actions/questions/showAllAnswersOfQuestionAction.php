<?php

require('actions/database.php');

$getAllAnswersOfThisQuestion = $bdd->prepare('SELECT contenue_reponse, date_reponse, id_question, id_users, pseudo_auteur FROM reponse WHERE id_question = ? ORDER BY id DESC');
$getAllAnswersOfThisQuestion->execute(array($idOfTheQuestion)); 