<?php

session_start();


include('../../config/config.php');
extract($_POST);

// vefification de l'existance du fournisseur
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  fournisseur WHERE mailfseur=? ');
  
  $req1->execute(array($email));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'Nombre de fois inscrit :'.$nombre.'<br>';
	}
echo $nom.'<br>';
echo $prenoms.'<br>';
echo $telephone.'<br>';
echo $email.'<br>';

//requete insertion du fournisseur
if ($nombre==1){

           header('location:../../pages/inscription-fournisseur.php?q=exist');
		 
		 }
		 else {

$req=$db->prepare('insert into fournisseur(

                          nomfseur,
						  prenfseur,
						  telfseur,
						  mailfseur)
						  
				values(:nomfseur,:prenfseur,:telfseur,:mailfseur)');
				
	
//execution de la requete

$req->execute(array(
             'nomfseur' => $nom,
			 'prenfseur' => $prenoms,
			 'telfseur'  =>  $telephone,
			 'mailfseur'  => $email,
			
			 ));
			 
			 $req->closeCursor();
			 }
			 
			 header('location:../../pages/inscription-fournisseur.php?q=succes');
			 			
	


?>
