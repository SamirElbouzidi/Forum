<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/index-style.css">
<body>



    <header class="container-fluid" >
        <div class="part-gauche">
            <a href="index.php" ><img src="Logo/Odyssée.png" alt="logo"></a>
            <p>Odyssée</p>
        </div>
        <div class = "part-droit">
            <div class="d-flex">
                <input class="form-control me-2"  placeholder="Search">
                <a href="login.php"><button class="btn btn-primary">Connexion</button></a>
                <a href="signup.php"><button class="btn btn-outline-primary">S'inscrire</button></a>
            </div>
        </div>
    </header>
 
    <div class="presentation">
        <h4>Rejoignez le monde des dévelopeurs avec Odyssée pour comprendre, apprendre et partager votre amour <br>tout comme votre besoin pour le code. </h4>
        <h2>Innovation.start(here)</h2>
        <a href="login.php"><button type="button" class="btn btn-primary">Commencer</button></a>
    </div>

    <div class="lescartes">
        <div class="carte">
            <img class="icon" src="Logo/echange.png" alt="">
        <div class="card" >
            <div class="card-body">
                <h5 class="card-title">Échange</h5>
                <p id ="para1" class="card-text">Il y a plus d’idées dans deux têtes que dans une.</p>
                <p>Jacques Chirac</p>
                        
            </div>
        </div>
    </div>

    <div class="carte">
        <img class="icon" src="Logo/entraide.png" alt="">
            <div class="card " >
            <div class="card-body">
                <h4 class="card-title">Entraide</h4>
                <p  id="para2" class="card-text">Décidons de nous rassembler dans un esprit d'entraide au lieu <br> de se disperser dans le  « chacun pour soi ».</p>
                <p>Serge Desjardins</p>
            </div>
            </div>
    </div>

    <div class="carte"> 
        <img class="icon" src="Logo/partage.png" alt="">
        <div class="card " >
            <div class="card-body">
                <h4 class="card-title">Partage</h4>
                <p id ="para3"class="card-text">Lorsque deux forces sont jointes, leur efficacité est double.</p>
                <p>Isaac Newton</p>
                        
            </div>        
        </div>
    </div>
</div>
    <footer>
        <p id= "Copy">Copyright 2022 Odyssée, Inc. <a href="">Tous droits réservés</a></p>
        <div id="foot">    
            <a  id="myA" class="cond" href="">Conditions d'utilisation</a>
            <a  id="myA" href="cond">Mention légal</a>
        </div>   
     </footer>   
           
</body>