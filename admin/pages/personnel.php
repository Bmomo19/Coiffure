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
    include"menu-admin.php"
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
                    <h1 class="page-header">Liste du personnel</h1>
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
									  personnel ');
									  
									  $req2->execute(array());
									  
									  while ($resultat = $req2->fetch()) {
									  $nombre=$resultat['nombre'];
									  echo 'Nombre de personnel :'.$nombre.'<br>';
										}

									// vefification de l'existance du client
									
									
									// liste des client  client
									       $couleur[]='success';
											$couleur[]='info';
											$couleur[]='warning';
											$couleur[]='danger';
										    $req1 = $db->prepare('SELECT *  FROM personnel');
										  
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
                                            <td><?php echo $resultat['nompers'].' '.$resultat['prenpers']; ?></td>
                                            <td><?php echo $resultat['telpers']; ?></td>
                                            <td><?php echo $resultat['mailpers']; ?></td>
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
