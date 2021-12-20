<?php

session_start();
if($_SESSION['cnx']!='Deconnexion'){

header('location:../../login.php?q=clt');
  exit();
}




include('../../config/config.php');

extract($_POST);



// creation de la facture	codclt


$_SESSION['nbrligne']='';
$_SESSION['cpt']='';
$_SESSION['totaux']='';
unset($_SESSION['nbrligne']);
unset($_SESSION['tcpt']);
unset($_SESSION['totaux']);









header('location:../../../index.php?c=success');

?>
