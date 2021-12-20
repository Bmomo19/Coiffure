<?php
session_start();
include('../config/config.php');
extract($_POST);

// connexion  du personnel
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  personnel WHERE mailpers=? AND motpasspers=?');
  
  $req1->execute(array($email, md5($password)));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo $nombre;
	}
if($nombre==1){
$req2 = $db->prepare('SELECT codpers, nompers, prenpers, datembpers, telpers, salpers, mailpers, motpasspers,catgpers FROM 
  personnel WHERE mailpers=? AND motpasspers=?');
$req2->execute(array($email, md5($password)));

while ($personnel = $req2->fetch()) {
  $_SESSION['codpers']=$personnel['codpers'];
  $_SESSION['nom']=$personnel['nompers'];
  $_SESSION['prenoms']=$personnel['prenpers'];
  $_SESSION['email']=$personnel['mailpers'];
  $_SESSION['telephone']=$personnel['telpers'];
  $_SESSION['categorie']=$personnel['catgpers'];
  }
$req2->closeCursor();
$_SESSION['cnx']='Deconnexion';
header('location:../index-admin.php');
  exit();
}

else{
	//redirection vers index-admin
	header('location:../pages/login.php');
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