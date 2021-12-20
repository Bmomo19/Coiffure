<?php session_start(); ?>
<?php 
include('../config/config.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> coiffure expert </title>
      
  <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../../css/nivo-lightbox.css" rel="stylesheet" />
	<link href="../../css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="../../css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="../../css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="../../css/flexslider.css" rel="stylesheet" />
	<link href="../../css/slippry.css" rel="stylesheet" >
	<link href="../../css/animate.css" rel="stylesheet" />
  <link href="../../css/style.css" rel="stylesheet">
	<link href="../../color/default.css" rel="stylesheet">
	

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- LE LIEN DES MODIFICATION DE NOTRE CSS -->
    <link href="../../css/styles.css" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Navigation -->
 <?php
    include"menu-admin.php";
   ?>
   <!-- /Navigation --> 

   <br/><br/><br/> 
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Programmer prix de vente des produits</h3>
                        <?php 
                        if(isset($_GET['q'])&& $_GET['q']=="error"){
echo'<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
Votre mot de passe n\'est pas correct!
</div>';
  }
if(isset($_GET['q'])&& $_GET['q']=="exist"){
echo'<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
              Vous etre deja enregistrés!
               </div>';
               }

if(isset($_GET['q'])&& $_GET['q']=="success"){
echo'<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
              Le prix  été enregistrée avec succes!
               </div>';
               }

                        

                        ?>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../save/commande/sql-prixvente.php" method="post" enctype="multipart/form-data">
                            <fieldset>
                           
                                                             
								<div class="form-group">
                  <select class="form-control" placeholder="fournisseur" name="codprod" autofocus required>

									<option value="dft">Choisissez Le produit</option>
									 <?php
                  // recuperation dees  code produit distinct ................ 
                  $req2 = $db->prepare('SELECT produit.codprod, produit.nomprod FROM produit WHERE produit.codprod IN (SELECT DISTINCT contenir.codprod FROM contenir)');
                    
                    $req2->execute(array());
                    $i=1;
                    while ($resultat = $req2->fetch()) {
                      $codprod[$i]=$resultat['codprod'];
                      //echo '<br>code du produit'.$codprod[$i].'<br>';
                      $i++;
                       }
                    $req2->closeCursor();

                     // recuperation du prix d'achat du prouduit a la derniere  commande.....
                    $taille=count($codprod);
                    //echo 'nombre de produit distinct :'.$taille.'<br>';
                    
                     $j=1;
                     while ( $taille>0) {
                     
                   $req3= $db->prepare('SELECT MAX(codcmd) as cmd FROM contenir WHERE codprod='.$codprod[$taille]);
                    
                    $req3->execute(array());
                    
                    if ($resultat = $req3->fetch()) {
                      $codcmd[$j]=$resultat['cmd'];
                      //echo 'code de la commande:'.$codcmd[$j].'<br>';
                          $j++;
                       }
                     $taille--;
                       }

                   $req3->closeCursor();


                   // affichage du prix d'achat, du nom et de la quantité des produit
                    
                    $taille2=count($codcmd);
                   //echo 'nombre de produit dernierement commandée :'.$taille2.'<br>';
                    $k=1;
                    while ( $taille2>0) {
                     
                  $req4 = $db->prepare('SELECT contenir.qtecmd,contenir.prixachat,contenir.codcmd, contenir.codprod, produit.nomprod from contenir, produit
                   where contenir.codprod=produit.codprod and contenir.codcmd='.$codcmd[$k]);
                    $req4->execute(array());
                    if ($resultat = $req4->fetch()) {
                                        
                      ?>

                <option value="<?php echo $resultat['codprod']; ?>">  <?php echo $resultat['nomprod'].'  |Qte en stock : '.$resultat['qtecmd'].' |Prix achat : '.$resultat['prixachat'].'Fr' ; ?></option>
                  <br>
                    <?php   
                            
                       }
                       $k++;
                     $taille2--;
                                   
                       } 
               $req4->closeCursor();
               
              
                   ?>
                   
									 
									 </select>
                                </div>
								 
								              <div class="form-group">
                                    <input class="form-control" placeholder="Saisir le prix de vente" name="prixvente" type="number" autofocus required>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="Montant de la remise" name="remise" type="number" autofocus required>
                                </div>

                                <!-- Change this to a button or input when using this as a form -->
                             <input type="submit" value="Valider votre commande"  class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <ul class="pager">
        <li class="previous"><a href="../index-admin.php">
        <span class="glyphicon glyphicon-backward"> Retour</span></a></li>
        </ul> 
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
