<?php

try{
    
$bdd = new PDO('mysql:host=185.221.182.4;dbname=svrujyqz_forum;charset=utf8', 'svrujyqz', '=Y_IapqIQ2@vwFeB7/');
}catch(Exception $e){
    die('Une erreur à été trouvée : ' .$e->getMessage());
}