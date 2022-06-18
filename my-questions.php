<?php 
    require('actions/users/securityAction.php');
    require('actions/questions/myQuestionsAction.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/my-questions-style.css">
<script src="https://kit.fontawesome.com/811878f6ff.js" crossorigin="anonymous"></script>
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
            <li><a  href="accueil.php">Les Sujets</a></li>
            <li> <a href="publish-question.php">Publier une question</a></li>
            <li> <a id="question" href="my-questions.php">Mes questions</a></li>
            <li> <a href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a></li>
            <li id="mobileDeco">             
                <a href="actions/users/logoutAction.php"><button class="btn btn-primary">Déconnexion</button></a>
            </li>
        </ul>
    </nav>

    <div class="text-question">
        <h3> Vos questions</h3>
        <p> Le savant n'est pas l'homme qui fournit les réponses, c'est celui qui pose les questions. </p>
        <hr>
    </div>  

    <div class="carte-question">

        <?php 
            while($question = $getAllMyQuestions->fetch()){
        ?>
        <div class="card">
            <h5 class="card-header">
            <a href="article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
            <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>">
            <img src="Logo\remove.png" alt="remove"></a>
            </h5>
        <div class="card-body">
            <p class="card-text"><?= $question['description']; ?></p>
            <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
            <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
        </div>
    </div>
     <br>
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