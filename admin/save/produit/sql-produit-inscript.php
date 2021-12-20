<?php

session_start();


include('../../config/config.php');
extract($_POST);



// recuperation de l'image du produit
if (!empty($_FILES))  {
$image=$_FILES['imgprod'];
$nomimg=$image['name'];
print_r($_FILES);
$ext=strtolower(substr($image['name'], -3));
$allow_ext=array("jpg","gif","png");
   if (in_array($ext,$allow_ext)){
    move_uploaded_file($image['tmp_name'], "../../../img/produit/".$image['name']);
   }
   else {
   
       header('location:../../pages/ajouter-produit.php?q=error');
   }
      

}
   $nomimg=addslashes($image['name']);
   




// vefification de l'existance d'un produit
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  produit WHERE nomprod=? ');
  
  $req1->execute(array($nomprod));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'ce produit est escrit :'.$nombre.' fois<br>';
	}


echo $nomimg.'<br>';
echo $nomprod.'<br>';
echo $descriprod.'<br>';

//requete insertion du produit
if ($nombre==1){

           header('location:../../pages/ajouter-produit.php?q=exist');
		 
		 }
		 else {

$req=$db->prepare('insert into produit(

                          nomprod,
						  imgprod,
						  descriprod)
				values(:nomprod,:imgprod,:descriprod)');
				
	
//execution de la requete
$req->execute(array(
             'nomprod' => $nomprod,
			 'imgprod' => $nomimg,
			 'descriprod'  =>  $descriprod,
			  ));
			 
			 $req->closeCursor();
			 
			 
		header('location:../../pages/ajouter-produit.php?q=success');
			 			
			}	


?>
