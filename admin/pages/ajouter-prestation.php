<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> reference coiffure </title>
      
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
                        <h3 class="panel-title">Ajouter une prestation</h3>
                        <?php 
                        if(isset($_GET['q'])&& $_GET['q']=="error"){
echo'<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert">×</button>
Votre fichier n\'est pas une image!
</div>';
  }
if(isset($_GET['q'])&& $_GET['q']=="exist"){
echo'<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
              La prestation existe deja!
               </div>';
               }

if(isset($_GET['q'])&& $_GET['q']=="success"){
echo'<div class="alert alert-dismissable alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
              La prestation a été enregistré avec succes!
               </div>';
               }

                        

                        ?>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../save/prestation/sql-prestation-inscript.php" method="post" enctype="multipart/form-data">
                            <fieldset>
							                  <div class="form-group">
                                    <input class="form-control" placeholder="Nom de la prestation" name="nomprest" type="text" autofocus required>
                                </div>
								               <div class="form-group">
                                    <textarea class="form-control" placeholder="Description de la prestation" name="descriprest" rows="5" autofocus >
                                    Description de la prestation
                                    </textarea>
                                </div>
								                  <div class="form-group">
                                    <input class="form-control" placeholder="Image de prestation" name="imgprest" type="file" autofocus required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" placeholder="Categorie" name="catgprest"  autofocus>
                                    <option value="dft">Choisissez le genre</option>
                                    <option value="fm">Femme</option>
                                    <option value="hm">Homme</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Prix de la prestation" name="tarifprest" type="number" autofocus required>
                                </div>
                      
                                <!-- Change this to a button or input when using this as a form -->
                             <input type="submit" value="Ajouter la prestation"  class="btn btn-lg btn-success btn-block" />
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
