<?php 
    session_start();
    require('actions/questions/showArticleContentAction.php'); 
    require('actions/questions/postAnswerAction.php');
    require('actions/questions/showAllAnswersOfQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/article-style.css">
<body>
    
<header class="container-fluid" >
        <div class="part-gauche">
             <img src="Logo/Odyssée.png" alt="">
             <p>Odyssée</p>
        </div>
        <div class = "part-droit">
            <div class="d-flex">             
                <a href="actions/users/logoutAction.php"><button class="btn btn-primary">Déconnexion</button></a>
            </div>
        </div>

        <div class="mobile">
            <img src="Logo\menu.png"/>
        </div>

    </header>

    <nav class="navbar bg-light" id="menuLight"> 
        
        <div class="croix">
            <img src="Logo\fermer.png"/>
        </div>
        
        <ul>
            <li><a id="sujets" href="accueil.php">Les Sujets</a></li>
            <li> <a href="publish-question.php">Publier une question</a></li>
            <li> <a href="my-questions.php">Mes questions</a></li>
            <li> <a href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a></li>
            <li id="mobileDeco">             
                <a href="actions/users/logoutAction.php"><button class="btn btn-primary">Déconnexion</button></a>
            </li>
        </ul>
    </nav>
    
    <div class="text-article">
        <h3> La question </h3>
        <p> Répondez à la question de l'utilisateur pour l'aider à répondre à son besoin, en écrivant une réponse puis en l'envoyant en cliquant sur le button "Répondre". </p>
        <hr>
    </div>

    <div class="article">
        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($question_publication_date)){
        ?>
        <section class="show-content">
            <h3><?= $question_title; ?></h3>
            <hr>
            <p><?= $question_description; ?></p>
            <hr>
            <small><?= '<a href="profile.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
        </section>
            <br>
        <section class="show-answers">
            <form class="form-group" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Réponse :</label>
                    <textarea name="answer" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-primary" type="submit" name="validate">Répondre</button>
                </div>
            </form>

            <?php

            while( $reponse = $getAllAnswersOfThisQuestion->fetch()){

            ?>
                
                    <div class="card">

                        <div class="card-header"> 
                            <?= $reponse['pseudo_auteur']; ?>
                        </div>

                        <div class="card-body">
                            <?= $reponse['contenue_reponse']; ?>
                        </div>
                    </div> <br>
            <?php

            }

            ?>

            </section>

            <?php
        }
        ?>
                    </div>

      
            

    <footer> 
        <p id= "Copy">Copyright 2022 Odyssée, Inc. <a href="mentionsLegales.php">Tous droits réservés</a></p>
        <div id="foot">    
            <a  id="myA" class="cond" href="conditions.php">Conditions d'utilisation</a>
            <a  id="myA" href="mentionsLegales.php">Mention légal</a>
        </div>    
    </footer>   
    <script src="js\menu.js"></script>
</body>
</html>