<?php SESSION_START();

 include('config/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $_SESSION['nom'].'  '.$_SESSION['prenoms'];?></title>
    
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="../css/nivo-lightbox.css" rel="stylesheet" />
	<link href="../css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="../css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="../css/flexslider.css" rel="stylesheet" />
	<link href="../css/slippry.css" rel="stylesheet" >
	<link href="../css/animate.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet">
	<link href="../color/default.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- LE LIEN DES MODIFICATION DE NOTRE CSS -->
    <link href="../css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
      <!-- Navigation -->
<div id="wrapper">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                              <div class="container">
                                 <div class="row">
         <div class="col-md-12" id="entete"><span>accessoire</span><span>|le salon</span><div>|<a href="save/deconnexion.php">
            <?php

if (!empty($_SESSION['cnx']) and isset($_SESSION['cnx'])) {
    echo $_SESSION['cnx'];
}
else {
    //redirection vers index-admin
    header('location:../index.php');
}

                
                ?>
         </a></div>
                                 </div> 
                                 </div>
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="index-admin.php"><img src="../img/logo.jpg" alt="logo" /></a>
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
                                                                  <li class="active"><a href="index-admin.php">
                                                                    <span class="glyphicon glyphicon-home"></span>
                                                                  </a></li>
                                                                  <li><a href="pages/clients.php">Listes des clients</a></li>
                                                                  <li><a href="pages/personnel.php">Liste du personnel</a></li>
                                                                  <li><a href="pages/rdv.php">Liste des RDV</a></li>
                                                                  <li><a href="pages/fournisseur.php">Liste des fournisseurs</a></li>
                                                                  <!-- <li><a href="#works">Works</a></li> -->
                                                                
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

      
    <br><br><br>
    <br><br><br>
    <br><br><br>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Reference coiffure</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index-admin.php">
                    <?php echo $_SESSION['nom'].'  '.$_SESSION['prenoms'];
				 if( $_SESSION['categorie']=='adm'){
								 echo '<BR> (Administrateur)';
				}
				
				if( $_SESSION['categorie']=='grt'){
								 echo '<BR> (Gerant)';
				}
				
				if( $_SESSION['categorie']=='stg'){
								 echo '<BR> (Stagiaire)';
				}
				if( $_SESSION['categorie']=='pers'){
								 echo '<BR> (Personnel)';
				}
				?></a>
            </div>
            <!-- /.navbar-header -->

    
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index-admin.php"><i class="fa fa-dashboard fa-fw"></i>Tableau de Bord</a>
                        </li>
                        						
						    <li>
                            <a href="#"><i class="glyphicon glyphicon-user "></i> Gestion des clients<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							 
                                <li>
                                    <a href="pages/inscription-client.php">Ajouter un nouveau client</a>
                                </li>
								
                                <li>
                                    <a href="pages/clients.php">Liste des clients</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-group"></i> Gestion du personnel<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							     <?php 
							     if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
								 echo '
                                <li>
                                    <a href="pages/inscription.php">Ajouter un nouveau personnel</a>
                                </li>';
								}
								?>
                                
                                <li>
                                    <a href="pages/personnel.php">Liste du personnel</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="glyphicon glyphicon-user "></i> Gestion des fournisseurs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							     <?php 
							     if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
								 echo '
                                 <li>
                                    <a href="pages/inscription-fournisseur.php">Ajouter un nouveau fournisseur</a>
                                 </li>';
							 	}
								?>
                                
                                <li>
                                    <a href="pages/fournisseur.php">Liste des fournisseurs</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-shopping-cart "></i> Gestion des produits<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							        <?php 
									   if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
									 echo '
									 <li>
										<a href="pages/ajouter-produit.php">Ajouter un nouveau produit</a>
									 </li>';
									}
									?>
                                
                                <li>
                                    <a href="pages/produit.php">Liste des produits</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw "></i> Gestion des prestations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							       <?php 
									   if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
									 echo '
									 <li>
										<a href="pages/ajouter-prestation.php">Ajoutez une nouvelle prestation</a>
									 </li>';
									}
									?>
                                
                                <li>
                                    <a href="pages/prestation.php">Liste des prestation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-star"></i> Gestion des modeles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							      <?php 
									   if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
									 echo '
									 <li>
										<a href="pages/ajouter-modele.php">Ajoutez un nouveau modèle</a>
									 </li>';
									}
									?>
							  
                                
                                <li>
                                    <a href="pages/modele.php">Liste des modèles</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-star"></i> Gestion des rendez-vous<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							   
							   
							  
							   
                                 <li>
                                    <a href="pages/rdv.php">Liste des des rendez-vous</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-star"></i> Gestion des commandes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                               <?php 
                                       if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
                                     echo '
                                     <li>
                                        <a href="pages/ajouter-commande.php">Ajouter une commande</a>
                                     </li>';
                                    }
                                    ?>
                              
                               
                                 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>         
                         <li>
                            <a href="#"><i class="fa fa-star"></i>Prix de vent des produits<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                               
                               <?php 
                                       if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
                                     echo '
                                     <li>
                                        <a href="pages/ajouter-prixvente.php">Ajoutez Prix des Produits</a>
                                     </li>';
                                    }
                                    ?>
                              
                               
                                 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>              
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tableau de Bord</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php 
                                        //le nombre de  client
                                    $req2=$db->prepare('SELECT COUNT(*) AS nombre FROM client');
                                    $req2->execute(array());
                                    while($resultat=$req2->fetch()){
                                        $nombre=$resultat['nombre'];
                                        echo $nombre;
                                    }
                                        ?>
                                    </div>
                                    <div>Total Clients!</div>
                                </div>
                            </div>
                        </div>
                        <a href="pages/clients.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                       <?php 
                                        //le nombre de  personnel
                                    $req2=$db->prepare('SELECT COUNT(*) AS nombre FROM personnel');
                                    $req2->execute(array());
                                    while($resultat=$req2->fetch()){
                                        $nombre=$resultat['nombre'];
                                        echo $nombre;
                                    }
                                        ?>
                                    </div>
                                    <div>Total personnel!</div>
                                </div>
                            </div>
                        </div>
                        <a href="pages/personnel.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php 
                                        //le nombre de  client
                                    $jour=date('d');
                                    $req2=$db->prepare("SELECT  day(datfact) as jours ,SUM(montfact) AS total FROM facture where day(datfact)=$jour");
                                    $req2->execute(array());
                                    while($resultat=$req2->fetch()){
                                        if(empty($resultat['total'])){ echo '0 <em></em>';}
                                       echo $resultat['total'].'<em>Fr</em>';
                                                                               
                                    }
                                        ?>
                                    </div>
                                    <div>Total vendu du jour!</div>
                                </div>
                            </div>
                        </div>
                        <a href="pages/produit.php?q=prod">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-star fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                    <?php 
                                        //le nombre de  client
                                    
                                    $req2=$db->prepare("SELECT COUNT(*) AS nombre FROM rdv");
                                    $req2->execute(array());
                                    while($resultat=$req2->fetch()){
                                         
                                        $nombre=$resultat['nombre'];
                                        echo $nombre;
                                    }
                                        ?>
                                    </div>
                                    <div>Total RDV !</div>
                                </div>
                            </div>
                        </div>
                        <a href="pages/rdv.php">
                            <div class="panel-footer">
                                <span class="pull-left">Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    
                    <!-- /.panel -->
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="timeline-title"><i class="glyphicon glyphicon-user fa-1x"></i>Liste des  RDV Clients / Personnels</h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                            <?php
                                    // nombre totale de client en sql
                                    $req2 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
                                      rdv ');
                                      
                                      $req2->execute(array());
                                      
                                      while ($resultat = $req2->fetch()) {
                                      $nombre=$resultat['nombre'];
                                                                        }

                                    // vefification de l'existance du client
                                    
                                    
                                    // liste des client  client
                                           
                                           $classe[]='timeline-badge';
                                            $classe[]='fa fa-check';
                                            $classer[]='timeline-panel';
                                            $classe[]='imeline-heading';
                                            $classe[]='timeline-title';
                                            $classe[]='text-muted';
                                            $classe[]='a fa-clock-o';
                                            $classe[]='timeline-body';
                                            $classe[]='timeline-inverted';
                                            $classe[]='timeline-badge warning';
                                            $classe[]='fa fa-credit-card';
                                            $classe[]='timeline-panel';
                                            $classe[]='timeline-heading';
                                            $classe[]='danger';
                                            $req1 = $db->prepare('SELECT `rdv`.`codrdv`, `rdv`.`daterdv`, `rdv`.`objetrdv`, `client`.`nomclt`, `client`.`prenclt`,`personnel`.`nompers`,`personnel`.`prenpers`, `prestation`.`nomprest`,`prestation`.`tarifprest`, `modele`.`nommod`,`modele`.`tarifmod` FROM `rdv` , `client` , `prestation` , `modele` , `personnel` WHERE (( rdv.codclt =client.codclt and rdv.codpers =personnel.codpers and rdv.codmod =modele.codmod and rdv.codprest =prestation.codprest     )) ORDER BY rdv.daterdv DESC Limit 5 ');
                                          
                                          $req1->execute(array());
                                          
                                            $cpt=0;
                                            $ordre=1;
                                            while ($resultat = $req1->fetch()) {
                                    ?>
                                <li >
                                    <div class="<?php echo  $cpt++; $classe[$cpt]; ?>"><i class="<?php $cpt++;echo $classe[$cpt]; ?>"></i>
                                    </div>
                                    <div class="<?php $cpt++;echo $classe[$cpt]; ?>">
                                        <div class="<?php $cpt++;echo $classe[$cpt]; ?>">
                                            <h4 class="<?php $cpt++;echo $classe[$cpt]; ?>"><?php echo $resultat['nomclt'].' '.$resultat['prenclt']; ?></h4>
                                            <p><small class="<?php $cpt++;echo $classe[$cpt]; ?>"><i class="<?php $cpt++;echo $classe[$cpt]; ?>"></i><?php echo $resultat['daterdv']; ?></small>
                                            </p>
                                        </div>
                                        <div class="<?php $cpt++;echo $classe[$cpt]; ?>">
                                            <p>
                                                <?php echo 'RDV avec '.$resultat['nompers'].' '.$resultat['prenpers'].'<br>'; ?>
                                                <?php echo 'Les servieces demandés:'.'<br>'; ?>
                                                <?php echo $resultat['nomprest'].' '.$resultat['tarifprest'].' CFA <br>'; ?>
                                                <?php echo $resultat['nommod'].' '.$resultat['tarifmod'].' CFA<br>'; ?>

                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <?php  
                                          $cpt++;
                                          $ordre++;
                                          if($cpt>7){$cpt=0;}
                                    }  ?>
                                
                               
                                                                  
                                
                                
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="glyphicon glyphicon-user fa-1x"></i>Achat des clients par date
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                           
                             <?php

                         $req5=$db->prepare("SELECT `client`.`codclt`,`client`.`nomclt`,`client`.`prenclt`,`facture`.`codfact`, `facture`.`montfact` as TOTAL, 
                         DATE_FORMAT(`facture`.`datfact`, '%d-%m-%y %H:%i:%s') as dates  FROM client, facture where `facture`.`codclt`<>0 and `facture`.`codclt`=`client`.`codclt` order by `facture`.`codfact` DESC Limit 10");
                          $req5->execute(array());
                            while($resultat = $req5->fetch()) {
                               ?>
                                <a href="pages/clients.php?codfact=<?php echo $resultat['codfact'];?>&&codclt=<?php echo $resultat['codclt'];?>" class="list-group-item">
                                    <i class="glyphicon glyphicon-user fa-1x"></i>  <?php echo $resultat['nomclt'].' '.$resultat['prenclt']; ?>
                                    <span class="pull-right text-muted small"><em>Total achat: <?php echo ' '.$resultat['TOTAL'].'CFA'; ?> </em><br>
                                    <?php echo $resultat['dates']; ?>
                                    </span>
                                </a>

                                  <?php  
                                 }  
                                    
                            ?>
                                

                                
                               
                            </div>
                            <!-- /.list-group -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    <!-- /.panel -->
                    
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
