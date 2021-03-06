<?php session_start();?>
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
<div id="navigation">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                              <div class="container">
                              	 <div class="row">
         <div class="col-md-12" id="entete"><span>accessoire</span><span>|le salon</span>
           <div>
                     <li class="dropdown">
					   <?php if(isset($_SESSION['cnx']) and $_SESSION['cnx']=='Deconnexion'){ echo '<a href="../save/deconnection.php">'.$_SESSION['cnx'].'</a>';} else {echo ' <a href="../login.php">Connexion </a>';}?>
                    <a class="rd" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Compte Client</a>
                        </li>
                        <li><a href="inscription-client.php"><i class="fa fa-sign-out fa-fw"></i>Inscription</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-gear fa-fw"></i>Administrateur</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                  </li>
                </div>
                              	 </div> 
                              	 </div>
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="../../index.php"><img src="../../img/logo.jpg" alt="logo" /></a>
                                                    </div>
                                          </div>
                                          

                                          <div class="col-md-10">
                         
                                                      <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav navbar-right">
                                                                  <li class="active"><a href="../../#intro">
                                                                  	<span class="glyphicon glyphicon-home"></span>
                                                                  </a></li>
                                                                  <li><a href="../../#hommes">Hommes</a></li>
                                                                  <li><a href="../../#femmes">Femmes</a></li>
																                                  <li><a href="../../#service">Services</a></li>
																                                  <li><a href="../../#articles">Articles</a></li>
                                                                  <!-- <li><a href="#works">Works</a></li> -->
                                                                  <li><a href="../../#contact">Contact</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
   <!-- /Navigation --> 

   <br/><br/><br/> 
  
    <div class="container">
    
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Inscrivez-vous</h3>
						<?php 
						if(isset($_GET['q'])&& $_GET['q']=="error"){
						echo'<div class="alert alert-dismissable alert-danger">
							<button type="button" class="close" data-dismiss="alert">??</button>
							Votre mot de passe n\'est pas correct!
							 </div>';
							 }

						if(isset($_GET['q'])&& $_GET['q']=="exist"){
						echo'<div class="alert alert-dismissable alert-success">
							<button type="button" class="close" data-dismiss="alert">??</button>
							Vous etre deja enregistr??s!
							 </div>';
							 }
							 
							 if(isset($_GET['q'])&& $_GET['q']=="success"){
						echo'<div class="alert alert-dismissable alert-success">
							<button type="button" class="close" data-dismiss="alert">??</button>
							Vous etre inscrit avec succ??s!
							 </div>';
							 }
						
						?>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../save/client/sql-client-inscript.php" method="post">
                            <fieldset>
                            <div class="form-group">
                                    <input class="form-control" placeholder="Nom" name="nom" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Prenoms" name="prenoms" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="T??l??phone" name="telephone" type="number" autofocus  required>
                                </div>
                                                                
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus  required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Confirme Password" name="confpassword" type="password" value="" required>
                                </div>
                               
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Memorisez vos logins
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                             <input type="submit" value="Connexion"  class="btn btn-lg btn-success btn-block" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <ul class="pager col-lg-4">

  <li class="previous"><a href="../index-admin.php"><span class="glyphicon glyphicon-backward"></span>  Retour</a></li>

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
