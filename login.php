<?php require('actions/users/loginAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/login-style.css">
<body>

<div id="blanc"> </div>
<div id="blanc2"> </div>
<div class="block_mere">

    <!-- 1ere partie gauche logo+form ******************************************************-->
    <div class="block_gauche">
        <div> <a href="index.php"> <img class="logo" src="Logo/Odyssée.png" > </a> </div>
        
        <form class="log" method="POST">

            <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                <input type="text" class="form-control" name="pseudo" placeholder="pseudo">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <button type="submit" class="btn btn-primary" name="validate">Se connecter</button> 
            <div id="mdpHelp"> 
                <a href="#">Mot de passe oublié</a>
            </div>
        </form>
        <p id="copy"> © Copyright 2022 Odyssée, Inc.<a href=""> Tous droit réservé</a></p>
    </div> 
    <!-- END 1ere partie gauche logo+form *************************************************-->

    <!-- 2eme partie droite ******************************************************-->
    <div class="block_droite">
        <div>
            <h1> Rejoignez-nous au <br> sommet d' Odyssée !</h1>
            <p>1er forum francophone pour <br> les développeurs. Rejoignez notre <br> communauté riche et variée de plus de <br> 5 000 utlisateurs.</p>
        </div>
        <div><a class="button" href="signup.php"><button>S'inscrire maintenant </button></a></div>
    </div>
    <!-- END 2eme partie droite *************************************************-->
</div> 

<footer> 
        <p id= "Copy">Copyright 2022 Odyssée, Inc. <a href="mentionsLegales.php">Tous droits réservés</a></p>
        <div id="foot">    
            <a  id="myA" class="cond" href="conditions.php">Conditions d'utilisation</a>
            <a  id="myA" href="mentionsLegales.php">Mention légal</a>
        </div>    
    </footer>   

</body>
</html>