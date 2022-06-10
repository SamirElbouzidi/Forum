<?php 
    session_start(); 
    require('actions/users/showOneUsersProfileAction.php');   
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/profil-style.css">
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
            <li><a  href="accueil.php">Les Sujets</a></li>
            <li> <a href="publish-question.php">Publier une question</a></li>
            <li> <a href="my-questions.php">Mes questions</a></li>
            <li> <a id="profil" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a></li>
        </ul>
    </nav>

    <div class="text-profil">
        <h3> Votre Profil</h3>
        <hr>
    </div>  

    <div class="prof">
        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($getHisQuestions)){

        ?>
            <div class="card">
                <div class="card-body">
                    <h4>Pseudo: <?= $user_pseudo; ?></h4>
                    <hr>
                    <p> Nom : <?=' '. $user_lastname ?></p>
                    <p> Prenom :<?= ' '.$user_firstname;?></p>
                </div>
            </div>
            <br>
        <?php
            while($question = $getHisQuestions->fetch()){ 
        ?>
            <div class="card">
                <div class="card-header">
                    <?= $question['titre'];?>
                </div>
                <div class="card-body">
                    <?= $question['description']; ?>
                </div>
                <div class="card-footer">
                    Par <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                </div>
            </div>
                <br>
        <?php
            }
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