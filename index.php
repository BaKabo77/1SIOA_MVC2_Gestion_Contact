<?php
include 'model/modele.php';

if(!isset($_REQUEST['action'])){
    $action = '';
}else{
    $action = $_REQUEST['action'];
}
include 'controller.php';

