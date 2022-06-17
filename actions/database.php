<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '');
    //$bdd = new PDO('mysql:host=localhost;dbname=svrujyqz_forum', 'svrujyqz_samir', 'J@M$4ur)M)$:;LOK):');
}catch(Exception $e){
    die('Une erreur à été trouvée : ' .$e->getMessage());
}