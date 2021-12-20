<?php session_start(); 
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

    <title><?php echo $_SESSION['nom'].' '.$_SESSION['prenoms']; ?></title>
    <?php 
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
    include('menu-admin.php');
   ?>

        <br><br><br><br>
         <br><br><br><br>
     <div id="wrapper">

        <!-- Navigation -->
        <?php include('menu-nav.php'); ?>
            <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
               <?php 
                
                   if(isset($_GET['q']) and $_GET['q']='prod'){
                    
                    ?>
                <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h4 > Liste des ventes du jour </4>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div >
                                        <?php 
                                         $jours=date('d');
                                        //le nombre de  client
                                    $req6=$db->prepare("SELECT `client`.`codclt`,`client`.`nomclt`,`client`.`prenclt`,`facture`.`codfact`, `facture`.`montfact` as TOTAL, DATE_FORMAT(`facture`.`datfact`, '%d-%m-%y %H:%i:%s') as dates  FROM client, facture where `facture`.`codclt`<>0 and `facture`.`codclt`=`client`.`codclt` and  day(`facture`.`datfact`)=$jours  order by `facture`.`codfact` DESC Limit 10");
  
                                    $req6->execute(array());
                                    ?>
                                    <table width="90%" border="1px" cellpadding="5px" cellspacing="3px" >
                                    <tr>
                                    <td> Nom</td>
                                    <td> Prenoms</td>
                                    <td> Montant Vente</td>
                                    <td> Date</td>
                                    </tr>
                                     <?php
                                     $totals=0;
                                      $totaux=0;
                                    while($resultat=$req6->fetch()){
                                        
                                        echo'<tr cellpadding="3px" cellspacing="3px">';
                                        echo "<td><a href="."clients.php?codfact=".$resultat['codfact']."&&codclt=".$resultat['codclt'].">".$resultat['nomclt']."<a/></td><td> ".$resultat['prenclt']."</td><td> ".$resultat['TOTAL']." CFA</td><td>".$resultat['dates']." </td>  </tr>";
                                     
                                }
                                        ?>
                                    

                                       </table>
                                    </div>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <a href="">
                            <div class="panel-footer">
                                <span class="pull-left">
                                  
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

                <div class="col-lg-12">
                    <h1 class="page-header">Listes des produits</h1>
                </div>
               
            </div>
            
            <!-- /.col-lg-6 -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <?php echo date('d-m-Y H:i'); ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive" >
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Ordre</th>
                                            <th>Nom</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    //le nombre de  produit
                                    $req2=$db->prepare('SELECT COUNT(*) AS nombre FROM produit');
                                    $req2->execute(array());
                                    while($resultat=$req2->fetch()){
                                        $nombre=$resultat['nombre'];
                                        echo 'Le nombre de pproduit :'.$nombre.'<br>';
                                    }
                                    //liste des produit
                                    $couleur[]='success';
                                    $couleur[]='info';
                                    $couleur[]='warning';
                                    $couleur[]='danger';
                                    $req1=$db->prepare('SELECT * FROM produit ORDER BY codprod DESC');
                                    $req1->execute(array());
                                    $cpt=0;
                                    $ordre=1;  
                                     ?>
                                    <tbody>
                                    <?php
                                    while($resultat=$req1->fetch()){


                                     ?>
                                        <tr class="<?php echo $couleur[$cpt]; ?>">
                                            <td><?php echo $ordre; ?></td>
                                            <td><?php echo $resultat['nomprod']; ?></td>
                                            <td><?php echo $resultat['descriprod']; ?></td>
                                            <td><img src="<?php echo'../../img/produit/'.$resultat['imgprod'];?>" width="50" height="50"></td>
                                            
                                        </tr>
                                        <?php 
                                        $cpt++;
                                        $ordre++;
                                        if($cpt>3){$cpt=0;}
                                    }
                                        ?>
                                                                            
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
           
        </div>
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
