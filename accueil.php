<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/accueil-style.css">

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
    </header>

    <nav class="navbar bg-light"> 
        <ul>
            <li><a id="sujets" href="accueil.php">Les Sujets</a></li>
            <li> <a href="publish-question.php">Publier une question</a></li>
            <li> <a href="my-questions.php">Mes questions</a></li>
            <li> <a href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a></li>
        </ul>
    </nav>


    <div class="text-accueil">
        <h3> Fil de l'odyssée</h3>
         <p> Trouver les contenues qui vous seront utiles et n'hésitaient pas vous-même à partager des contenues qui seront utiles à d'autres utilisateurs en les créent sur la page "Publier une question". </p>
         <hr>
    </div>  
            
    <div class="question">
        <form method="GET">
            <div class="form-group row">
                <div class="col-10">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-2">
                     <button class="btn btn-success" type="submit">Rechercher</button>
                </div>

            </div>
        </form>
             <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
        ?>
            <div class="card">
                <div class="card-header">
                    <a href="article.php?id=<?= $question['id']; ?>"><?= $question['titre']; ?></a>
                </div>
                <div class="card-body">
                    <?= $question['description']; ?>
                </div>
                <div class="card-footer">
                    Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                </div>
            </div>
                <br>
        <?php
            }
        ?>

            </div>

    <footer>
        <p id= "Copy">Copyright 2022 Odyssée, Inc. <a href="">Tous droits réservés</a></p>

        <div id="foot">    
            <a  id="myA" class="cond" href="">Conditions d'utilisation</a>
            <a  id="myA" href="cond">Mention légal</a>
        </div>
    </footer>   

</body>

</html>