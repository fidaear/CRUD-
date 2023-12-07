<?php
require_once 'model/admitedmodel.php';
function liste_admisAction(){
$admited=liste_admis();

require_once 'views/liste_admited.php';
}

function create_act(){
require_once 'views/create.php';
}
function storact(){
    $iscreated=create_candidat();
    var_dump($iscreated);
    header("location:index.php");
    
}

function update_act(){
    $Id=$_GET['id'];
    $stagiaire=viewer($Id);
    require_once 'views/edit.php';
    var_dump($_POST);

}
function suppr_act(){
    $Id=$_GET['id'];
    suppr_candidat($Id);
    require_once 'views/delete.php';
    header("location:index.php");
}


