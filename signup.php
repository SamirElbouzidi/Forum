<?php require('actions/users/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="assets/style.css">
<?php include 'includes/head.php'; ?>
<body>
        

    <div class="inscrire">   
        <div class="float" > 
            <img src="Logo/Ordi.png" class="img2"> 
            <p id="text-inscri"> Odyssée est un site web proposant des questions et réponse sur un large  choix de thèmes concernant la programmation informatique.</p>
        </div>
        <form class="forum1" method="POST">    
            <div class="float1">  <img src="Logo/Odyssé.jpg" class="logo"></div>
                <h3>Inscrivez-vous à votre forum de développement Odyssé.</h3>
                    <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                            <input type="text" class="form-control" name="pseudo" placeholder="Votre pseudo ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Prénom</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Votre prénom ">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Votre Nom ">
                        </div>      
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="password" placeholder=" Votre mot de passe ">
                        </div>
                        <p>En vous inscrivant, vous confirmez avoir lu et accepté les conditions d'utilisation.</p>
                        <button type="submit" class="btn btn-primary" name="validate">Enregistre-moi</button>
                        <a href="login.php"><p>J'ai déjà un compte, je me connecte</p></a>
                </form>    
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