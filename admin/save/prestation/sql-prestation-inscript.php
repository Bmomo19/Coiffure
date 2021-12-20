<?php

session_start();


include('../../config/config.php');
extract($_POST);



// recuperation de l'image de la presation
if (!empty($_FILES))  {
$image=$_FILES['imgprest'];
$nomimg=$image['name'];
print_r($_FILES);
$ext=strtolower(substr($image['name'], -3));
$allow_ext=array("jpg","gif","png");
   if (in_array($ext,$allow_ext)){
    move_uploaded_file($image['tmp_name'], "../../../img/prestation/".$image['name']);
   }
   else {
   
       header('location:../../pages/ajouter-prestation.php?q=error');
   }
      

}
   $nomimg=addslashes($image['name']);
   




// vefification de l'existance de la prestation
$req1 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
  prestation WHERE nomprest=? ');
  
  $req1->execute(array($nomprest));
  
  while ($resultat = $req1->fetch()) {
  $nombre=$resultat['nombre'];
  echo 'cette prestation est inscrite :'.$nombre.' fois<br>';
	}


echo $nomimg.'<br>';
echo $nomprest.'<br>';
echo $descriprest.'<br>';
echo $catgprest.'<br>';
echo $tarifprest.'<br>';

//requete insertion de la prestation
if ($nombre==1){

           header('location:../../pages/ajouter-prestation.php?q=exist');
		 
		 }
		 else {

$req=$db->prepare('insert into prestation(
                          catgprest,
						  nomprest,
						  tarifprest,
						  imgprest,
						  descriprest)
				values(:catgprest,:nomprest,:tarifprest,:imgprest,:descriprest)');
				
	
//execution de la requete
$req->execute(array(
             'catgprest' => $catgprest,
			 'nomprest' => $nomprest,
			 'tarifprest'  =>  $tarifprest,
			 'imgprest'  =>  $nomimg,
			 'descriprest'  =>  $descriprest,
			 			  ));
			 
			 $req->closeCursor();
			 
			 
		header('location:../../pages/ajouter-prestation.php?q=success');
			 			
			}	


?>
