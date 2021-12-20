<?php
session_start();
extract($_POST);

$_SESSION['email']='';
$_SESSION['password']='';
$_SESSION['cnx']='';
$_SESSION['codclt']='';
$_SESSION['nom']='';
$_SESSION['prenoms']='';
$_SESSION['telephone']='';
$_SESSION['categorie']='';
$_SESSION['codpers']='';
$_SESSION['cpt']='';
$_SESSION['totaux']='';


unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['cnx']);
unset($_SESSION['prenoms']);
unset($_SESSION['telephone']);
unset($_SESSION['categorie']);
unset($_SESSION['codpers']);
unset($_SESSION['cpt']);
unset($_SESSION['totaux']);
session_destroy();
header('location:../../index.php');
?>