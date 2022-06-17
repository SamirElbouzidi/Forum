<?php

try{
    //$conn = mysqli_connect("localhost","svrujyqz_samir","aa.PeYx1P.x,(b7B.b","svrujyqz_forum");
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
}catch(Exception $e){
    die('Une erreur à été trouvée : ' .$e->getMessage());
}