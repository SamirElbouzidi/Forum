<?php
    require('actions/users/securityAction.php');
    require('actions/questions/getInfosOfEditedQuestionAction.php');
    require('actions/questions/editQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/edit-question-style.css">
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

    <div class="text-edit">
        <h3> Modifier la question</h3>
        <p> Si l'une de vos questions vous semble mal comprise, ici, vous pourrez la reformuler. </p>
        <hr>
    </div>  

    <div class="edit">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        
        <?php 
            if(isset($question_description)){ 
                ?>
                <form method="POST">
                    <div class="edits">
                        <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
                        <input type="text" class="form-control" name="title" value="<?= $question_title; ?>">
                    </div>
                    <div class="edits">
                        <label for="exampleInputEmail1" class="form-label">Description de la question</label>
                        <textarea class="form-control" name="description"><?= $question_description; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-warning" name="validate">Modifier la question</button>
                </form>
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