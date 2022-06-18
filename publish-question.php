<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/publish-style.css">
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
            <li> <a id="publier-question" href="publish-question.php">Publier une question</a></li>
            <li> <a href="my-questions.php">Mes questions</a></li>
            <li> <a href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a></li>
            <li id="mobileDeco">             
                <a href="actions/users/logoutAction.php"><button class="btn btn-primary">Déconnexion</button></a>
            </li>
        </ul>
    </nav>
    <div class="text-publish">
        <h3> Publier votre question</h3>
        <p>La recherche de la vérité est la plus noble des occupations, et sa publication, un devoir... Négligez aucune question ! </p>
        <hr>
    </div> 

    <div class="form-publish">
        <form  method="POST">
            <?php 
                if(isset($errorMsg)){ 
                    echo '<p id="mesP">'.$errorMsg.'</p>'; 
                }elseif(isset($successMsg)){ 
                    echo '<p id="mesP">'.$successMsg.'</p>'; 
                }
            ?>

            <div class="publish">
                <label for="exampleInputEmail1" class="form-label" >Titre de la question</label>
                <input type="text" class="form-control" name="title" placeholder="Titre de la question">
            </div>
            <div class="publish">
                <label for="exampleInputEmail1" class="form-label">Description de la question</label>
                <textarea class="form-control" name="description" placeholder="Description de la question"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="validate" placeholder="Publier la question">Publier la question</button>
        </form>
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