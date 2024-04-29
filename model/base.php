<?php



function database(){

    $serveur='mysql:host=localhost:3306;dbname=contact';
    $user='root';
    $mdp ='';
    try{
        $db = new PDO($serveur,$user,$mdp);
        $db->query("SET CHARACTER SET utf8");
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        return $db;
    }catch(Exception $e){
        echo 'Impossible de se connecter a la base de donnée';
        echo $e->getMessage();
        die();
    }
} 
