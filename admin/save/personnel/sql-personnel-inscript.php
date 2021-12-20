<?php
session_start();


include('../../config/config.php');
extract($_POST);

// vefification de l'existance du personnel
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  personnel WHERE mailpers=? ');
  
  $req1->execute(array($email));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'Nombre de fois inscrit :'.$nombre.'<br>';
	}


$date=date('Y-m-d H:i');
echo $nom.'<br>';
echo $prenoms.'<br>';
echo $telephone.'<br>';
echo $salaire.'<br>';
echo $date.'<br>';
echo $email.'<br>';
echo $password.'<br>';
echo $confpassword.'<br>';
echo $categorie.'<br>';
$password=md5($password);
$confpassword=md5($confpassword);
echo $password.'<br>';
echo $confpassword.'<br>';
//requete insertion du personnel
if ($nombre==1){

           header('location:../../pages/inscription.php?q=exist');
		 
		 }
		 else {

$req=$db->prepare('insert into personnel(
                          
						  nompers,
						  prenpers,
						  telpers,
						  salpers,
						  datembpers,
						  mailpers,
						  motpasspers,
						  catgpers)
				values(:nompers,:prenpers,:telpers,:salpers,:datembpers,:mailpers,:motpasspers,:catgpers)');
				
				
//execution de la requete
if($password==$confpassword){
$req->execute(array(
             'nompers' => $nom,
			 'prenpers' => $prenoms,
			 'telpers'  =>  $telephone,
			 'salpers'  => $salaire,
			 'datembpers'  => $date,
			 'mailpers'  => $email,
			 'motpasspers'  => $password,
			 'catgpers'  => $categorie,
			 ));
			 
			 
			 $req->closeCursor();
			
  			$_SESSION['nom']=$nom;
  			$_SESSION['prenoms']=$prenoms;
 			$_SESSION['email']=$email;
 			$_SESSION['telephone']=telephone;
  			$_SESSION['categorie']=$categorie;
			
		//recuperation de l'identifiant du personnel nouvellement inscrit 
			$req3 = $db->prepare('SELECT codpers,FROM 
  			personnel WHERE mailpers=? AND motpasspers=?');
			$req3->execute(array($email, md5($password)));

			while ($personnel = $req3->fetch()) {
 	 $_SESSION['codpers']=$personnel['codpers'];
  	
  }
  $_SESSION['cnx']='Deconnection';
header('location:../../index-admin.php');
  exit();
			 }
			 
			 else{header('location:../../pages/inscription.php?q=error');}
			 			
			}	


?>
