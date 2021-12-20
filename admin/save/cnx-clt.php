<?php
session_start();
include('../config/config.php');
extract($_POST);

// connexion  du personnel
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  client WHERE mailclt=? AND motpassclt=?');
  
  $req1->execute(array($email, md5($password)));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo $nombre;
	}
if($nombre==1){
$req2 = $db->prepare('SELECT codclt, nomclt, prenclt, telclt, mailclt,motpassclt, datinscripclt FROM 
  client WHERE mailclt=? AND motpassclt=?');
$req2->execute(array($email, md5($password)));

while ($personnel = $req2->fetch()) {
  $_SESSION['codclt']=$personnel['codclt'];
  $_SESSION['nom']=$personnel['nomclt'];
  $_SESSION['prenoms']=$personnel['prenclt'];
  $_SESSION['email']=$personnel['mailclt'];
  $_SESSION['telephone']=$personnel['telclt'];
  
  }
$req2->closeCursor();
$_SESSION['cnx']='Deconnexion';
$_SESSION['cpt']=0;
$_SESSION['totaux']=0;
header('location:../../index.php');
  exit();
}

else{
	//redirection vers index-admin
	header('location:../../index.php');
}


 
						  
						  
						  
						  
						  
						  
						  



/*
$_SESSION['email']=$email;
$_SESSION['password']=$password;

if(!empty($_SESSION['email']) and isset($_SESSION['email']) and !empty($_SESSION['password']) and isset($_SESSION['password'])){
	$_SESSION['cnx']='Deconnection';
	//redirection vers index-admin
	header('location:../index-admin.php');
}
else{
	//redirection vers index-admin
	header('location:../pages/login.php');
}

*/

?>
<a href="../index-admin.php">Admin</a>