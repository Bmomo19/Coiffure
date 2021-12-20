<?php

session_start();
include('../../config/config.php');
extract($_POST);

//$date=date('Y-m-d H:i');
echo 'code pruit'.$codprod.'<br>';
echo 'Prix vente'.$prixvente.'<br>';
echo 'Remise'.$remise.'<br>';
$qteproduit=0;
$codfact=0;
echo 'qte'.$qteproduit.'<br>';
echo 'cotde facture'.$codfact.'<br>';

$req=$db->prepare('insert into constituer(
	              qteproduit,
	              prixvente,
	              remise,
	              codprod,
	              codfact 
	                )
	              values(:qteproduit, :prixvente, :remise, :codprod, :codfact )');

//execution de la requete

$req->execute( array(
			'qteproduit'=>$qteproduit,
			'prixvente'=>$prixvente,
			'remise'=>$remise,
			'codprod'=>$codprod,
			'codfact'=>$codfact,
						));
$req->closeCursor();


header('location:../../pages/ajouter-prixvente.php?q=success');

?>
