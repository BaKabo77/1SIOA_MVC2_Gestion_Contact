<?php

switch($action){
   
    case 'connexion':{
      $login = $_REQUEST['login'];
      $mdp = $_REQUEST['mdp'];

      $connex = login($login,$mdp);
      if($connex['nb'] == 1)
      {
        include 'views/accueil.php';
      }else
      {
        echo 'mot de passe ou identifiant incorrect';
        include 'views/connexion.php';
      }
      break;
    }

    default:
        include 'views/connexion.php';
    
}