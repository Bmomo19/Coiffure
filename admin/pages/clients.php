<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo $_SESSION['nom'].'  '.$_SESSION['prenoms'];?>/Liste des clients</title>
    <?php 
	   include('../config/config.php');
        include("entete-admin.php");
		
     ?>


    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../../css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

 <?php
    include"menu-admin.php";
   ?>

        <br><br><br><br>
         <br><br><br><br>
     <div id="wrapper">

        <!-- Navigation -->
        
           <?php

           include('menu-nav.php');

           ?>

            <!-- /.navbar-static-side -->

        <div id="page-wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
                <?php 
                
                
                if(isset($_GET['codfact'])){
                    $codfact=intval($_GET['codfact']);
                      $codclt=intval($_GET['codclt']);
                    ?>
                <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div >
                                        <?php 
                                         
                                        //le nombre de  client
                                    $req2=$db->prepare("SELECT `produit`.`nomprod`,`client`.`codclt`,`client`.`nomclt`,`client`.`prenclt`,`constituer`.`qteproduit`,`constituer`.`prixvente`,`constituer`.`codprod`,`constituer`.`codfact`, DATE_FORMAT(`facture`.`datfact`, '%d-%m-%y %H:%i:%s') as datfact ,`facture`.`montfact` FROM `produit`,`client`,`constituer`, `facture` where `constituer`.`codfact`=$codfact and `client`.`codclt`=$codclt and `facture`.`codfact`=$codfact and `produit`.`codprod`=`constituer`.`codprod` ");

  
                                    $req2->execute(array());
                                    ?>
                                    <table width="90%" border="1px" cellpadding="5px" cellspacing="3px" >
                                    <tr>
                                    <td> Produit</td>
                                    <td> Quantité</td>
                                    <td> Prix de vente</td>
                                    <td> Total</td>
                                    </tr>
                                     <?php
                                     $totals=0;
                                      $totaux=0;
                                    while($resultat=$req2->fetch()){

                                        echo'<tr cellpadding="3px" cellspacing="3px">';
                                        echo '<td>'.$resultat['nomprod'].'</td><td> '.$resultat['qteproduit'].'</td><td> '.$resultat['prixvente'].'</td><td>'.$resultat['prixvente']*$resultat['qteproduit'].' </td>  </tr>';
                                     $totals=$resultat['qteproduit']*$resultat['prixvente'];
                                      $totaux+=$totals;
                                      $date=$resultat['datfact'];
                                }
                                        ?>
                                    <tr>
                                    <td colspan="4"> Total : <?php echo $totaux;?></td>
                                    
                                    </tr>

                                       </table>
                                    </div>
                                    <div>Fait le : <?php echo $date; ?></div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">
                                  <?php 
                                        //le nombre de  client
                                    $req2=$db->prepare("SELECT `nomclt`, `prenclt`, `telclt` FROM `client` WHERE `client`.`codclt`=$codclt");
                                    $req2->execute(array());
                                    while($resultat=$req2->fetch()){
                                       echo $resultat['nomclt'].' '.$resultat['prenclt'].' Tel: '.$resultat['telclt'];
                                        
                                    }
                                        ?>
                                </span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                </div>
                <?php 
                }
                    ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Liste des clients</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
              <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo date('d-m-Y H:i'); ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										     <th>Ordre</th>
                                            <th>Nom et Prénoms</th>
                                            <th>Téléphone</th>
                                            <th>Mail</th>
                                            
                                        </tr>
                                    </thead>
									
									<?php
									// nombre totale de client en sql
									$req2 = $db->prepare('SELECT COUNT(*) AS nombre FROM 
									  client ');
									  
									  $req2->execute(array());
									  
									  while ($resultat = $req2->fetch()) {
									  $nombre=$resultat['nombre'];
									  echo 'Nombre de client :'.$nombre.'<br>';
										}

									// vefification de l'existance du client
									
									
									// liste des client  client
									       $couleur[]='success';
											$couleur[]='info';
											$couleur[]='warning';
											$couleur[]='danger';
										    $req1 = $db->prepare('SELECT *  FROM client');
										  
										  $req1->execute(array());
										  
										 	$cpt=0;
											$ordre=1;
											
									?>
                                    <tbody>
									<?php
									
									 while ($resultat = $req1->fetch()) {
										  //$nomclt=$resultat['nomclt'];
										 									
									?>
                                        <tr class="<?php echo $couleur[$cpt]; ?>">
                                            <td><?php echo $ordre; ?></td>
                                            <td><?php echo $resultat['nomclt'].' '.$resultat['prenclt']; ?></td>
                                            <td><?php echo $resultat['telclt']; ?></td>
                                            <td><?php echo $resultat['mailclt']; ?></td>
                                        </tr>
																				
									<?php  
									      $cpt++;
										  $ordre++;
										  if($cpt>3){$cpt=0;}
									}  ?>
                                        
                                        
                                        </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
            </div>
                <!-- /.col-lg-6 -->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
