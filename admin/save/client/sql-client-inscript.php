
<?php

session_start();

include('../../config/config.php');
extract($_POST);

// vefification de l'existance du client
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  client WHERE mailclt=? ');
  
  $req1->execute(array($email));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'Nombre de fois inscrit :'.$nombre.'<br>';
	}


$date=date('Y-m-d H:i');
echo $nom.'<br>';
echo $prenoms.'<br>';
echo $telephone.'<br>';
echo $date.'<br>';
echo $email.'<br>';
echo $password.'<br>';
echo $confpassword.'<br>';
$password=md5($password);
$confpassword=md5($confpassword);
echo $password.'<br>';
echo $confpassword.'<br>';
//requete insertion du client
if ($nombre==1){

           header('location:../../pages/inscription-client.php?q=exist');
		 
		 }
		 else {

$req=$db->prepare('insert into client(

                          nomclt,
						  prenclt,
						  telclt,
						  mailclt,
						  motpassclt,
						  datinscripclt)
				values(:nomclt,:prenclt,:telclt,:mailclt,:motpassclt,:datinscripclt)');
				
	
//execution de la requete
if($password==$confpassword){
$req->execute(array(
             'nomclt' => $nom,
			 'prenclt' => $prenoms,
			 'telclt'  =>  $telephone,
			 'mailclt'  => $email,
			 'motpassclt'  => $password,
			 'datinscripclt'  => $date,
			 ));
			 
			  $req->closeCursor();
			  header('location:../../pages/inscription-client.php?q=success');
			
			 }
			 
			 else{header('location:../../pages/inscription-client.php?q=error');}
			 			
			}	


?>
