<?php

session_start();


include('../../config/config.php');
extract($_POST);



// vefification de l'existance d'un produit
/*$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  produit WHERE nomprod=? ');
  
  $req1->execute(array($nomprod));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'ce produit est escrit :'.$nombre.' fois<br>';
	}
*/

$date=date($annee.'-'.$mois.'-'.$jour.' '.$heure.':'.$minute);
$codclt=$_SESSION['codclt'];
echo $codprest.'<br>';
echo $codmod.'<br>';
echo $codpers.'<br>';
echo $codclt.'<br>';
echo $objetrdv.'<br>';
echo $date;
//requete insertion du produit
//if ($nombre==1){

         //  header('location:../../pages/ajouter-produit.php?q=exist');
		 
		 //}
		// else {

$req=$db->prepare('insert into rdv(

                          daterdv,
						  objetrdv,
						  codclt,
						  codpers,
						  codprest,
						  codmod)
				values(:daterdv,:objetrdv,:codclt,:codpers,:codprest,:codmod)');
				
	
//execution de la requete
$req->execute(array(
             'daterdv' => $date,
			 'objetrdv' => $objetrdv,
			 'codclt'  =>  $codclt,
			 'codpers'  =>  $codpers,
			 'codprest'  =>  $codprest,
			 'codmod'  =>  $codmod,
			  ));
			 
			 $req->closeCursor();
			 
			 
header('location:../../pages/ajouter-rdv.php?q=success');
			 			
			//}	


?>
