<?php

session_start();


include('../../config/config.php');
extract($_POST);



// recuperation de l'image du modèle
if (!empty($_FILES))  {
$image=$_FILES['imgmod'];
$nomimg=$image['name'];
print_r($_FILES);
$ext=strtolower(substr($image['name'], -3));
$allow_ext=array("jpg","gif","png");
   if (in_array($ext,$allow_ext)){
    move_uploaded_file($image['tmp_name'], "../../../img/modele/".$image['name']);
   }
   else {
   
       header('location:../../pages/ajouter-modele.php?q=error');
   }
      

}
   $nomimg=addslashes($image['name']);
   




// vefification de l'existance du modele
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  modele WHERE nommod=? ');
  
  $req1->execute(array($nommod));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'ce modele est inscrit :'.$nombre.' fois<br>';
	}


echo $nomimg.'<br>';
echo $nommod.'<br>';
echo $descripmod.'<br>';
echo $catgmod.'<br>';
echo $tarifmod.'<br>';

//requete insertion du modele
if ($nombre==1){

           header('location:../../pages/ajouter-modele.php?q=exist');
		 
		 }
		 else {

$req=$db->prepare('insert into modele(
                          catgmod,
						  nommod,
						  tarifmod,
						  imgmod,
						  descripmod)
				values(:catgmod,:nommod,:tarifmod,:imgmod,:descripmod)');
				
	
//execution de la requete
$req->execute(array(
             'catgmod' => $catgmod,
			 'nommod' => $nommod,
			 'tarifmod'  =>  $tarifmod,
			 'imgmod'  =>  $nomimg,
			 'descripmod'  =>  $descripmod,
			 			  ));
			 
			 $req->closeCursor();
			 
			 
		header('location:../../pages/ajouter-modele.php?q=success');
			 			
			}	


?>
