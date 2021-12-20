<?php

session_start();

include('../../config/config.php');
extract($_POST);


$date=date('Y-m-d H:i');
echo $libcmd.'<br>';
echo $codfseur.'<br>';
$codpers=$_SESSION['codpers'];
echo $codpers.'<br>';
echo $codprod.'<br>';
echo $qtecmd.'<br>';
echo $prixachat.'<br>';
echo $date.'<br>';

$req=$db->prepare('insert into commande(
	              libcmd,
	              datcmd,
	              codfseur,
	              codpers)
	              values(:libcmd, :datcmd, :codfseur, :codpers)');

//execution de la requete

$req->execute( array(
			'libcmd'=>$libcmd,
			'datcmd'=>$date,
			'codfseur'=>$codfseur,
			'codpers'=>$codpers,
						));
$req->closeCursor();


// recuperation du code commande
$req1 = $db->prepare('SELECT MAX(codcmd) AS nombre FROM 
  commande');
  
  $req1->execute(array());
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'Numero de la derniere commande :'.$nombre.'<br>';
	}

$req1->closeCursor();

// la requete
$req2=$db->prepare('insert into contenir(
	              qtecmd,
	              prixachat,
	              codcmd,
	              codprod)
	              values(:qtecmd, :prixachat, :codcmd, :codprod)');

//execution de la requete

$req2->execute( array(
			'qtecmd'=>$qtecmd,
			'prixachat'=>$prixachat,
			'codcmd'=>$nombre,
			'codprod'=>$codprod,
						));
$req2->closeCursor();

header('location:../../pages/ajouter-commande.php?q=success');
?>
