<?php
include 'base.php';

function login($login,$mdp){
    $sql = "SELECT COUNT(*) as nb FROM utilisateur WHERE login='$login' and mdp='$mdp'";
    $requete = database()->query($sql);
    $resultat = $requete->fetch();
    return $resultat;
    
}