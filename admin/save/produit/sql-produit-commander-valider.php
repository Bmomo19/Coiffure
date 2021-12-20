<?php

session_start();
if($_SESSION['cnx']!='Deconnexion'){

header('location:../../login.php?q=clt');
  exit();
}

if($_POST['k']=='annuler'){

header('location:../../../index.php?k=annuler');
  exit();
}



include('../../config/config.php');

extract($_POST);

 $nbrligne=$_SESSION['nbrligne'];

// creation de la facture	codclt

 $libfact='Achat de produit ';
 $montfact=$_SESSION['totaux'];
 $datfact=date('Y-m-d H:i');
  $codclt=$_SESSION['codclt'];
  $codpers=0;
  $codmod=0;
 $codprest=0;
$req=$db->prepare('insert into facture(
                          libfact,
						  montfact,
						  datfact,
						  codclt,
						  codpers,
						  codmod,
						  codprest)
				values(:libfact,:montfact,:datfact,:codclt,:codpers,:codmod,:codprest)');
				
	
//execution de la requete
$req->execute(array(
             'libfact' => $libfact,
			 'montfact' => $montfact,
			 'datfact'  =>  $datfact,
			 'codclt'  =>  $codclt,
			 'codpers'  =>  $codpers,
			 'codmod'  =>  $codmod,
			 'codprest'  =>  $codprest,
			  ));
 $req->closeCursor();
// recuperation du code de la facture


$req= $db->prepare('SELECT max(codfact) as code FROM facture');
$req->execute(array());
 while($resultat = $req->fetch()) {
                                      
$codfacts= $resultat['code'];                                         
echo  $codfacts.'<br>';
			}						     
 $req->closeCursor();

for($i=1; $i<=$nbrligne; $i++){
$nomprod='nomprod'.$i;
$codprod='codprod'.$i;
$prixvte='prixvte'.$i;
$remise=0;
$quantites ='quantites'.$i;
echo $_POST[$nomprod].'<br>';
     $codproduit=$_POST[$codprod];
     $prixvtes=$_POST[$prixvte];
     $qutes=$_POST[$quantites];
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
			'qteproduit'=>$qutes,
			'prixvente'=>$prixvtes,
			'remise'=>$remise,
			'codprod'=>$codproduit,
			'codfact'=>$codfacts,
						));

     $req->closeCursor();
                             

}

$_SESSION['nbrligne']='';
$_SESSION['cpt']='';
$_SESSION['totaux']='';
unset($_SESSION['nbrligne']);
unset($_SESSION['tcpt']);
unset($_SESSION['totaux']);









header('location:../../../index.php?c=success');

?>
