<?php include('admin/config/config.php'); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?php echo"Reference coiffure"; ?> </title>
	
    <!-- css -->
	 
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/flexslider.css" rel="stylesheet" />
	<link href="css/slippry.css" rel="stylesheet" >
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
    
    <!-- =======================================================
        Theme Name: Valera
        Theme URL: https://bootstrapmade.com/valera-free-bootstrap-theme/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
  
	
    <!-- Navigation -->
    <?php include("menu1.php"); ?>
    <!-- /Navigation -->  
    <!-- Commander -->
<!-- Section: articles -->
 <?php 
    if (isset($_GET['q']) and !empty($_GET['q']) and $_GET['q']="cmd"){
  ?>
    <section id="cmd" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">	Votre panier</h2>
					<div class="divider-header"></div>
					<p>Liste des produits command??s</p>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row">
         <div class="panel-body">
                            <div class="table-responsive">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										     <th>Produit</th>
                                            <th>Prix unitaire</th>
                                            <th>Quantit??</th>
                                            <th>Total</th>
                                            
                                        </tr>
                                    </thead>
									
									<?php
									// Nombre de produit command??
									echo 'Nombre de produit achet??: '.$_SESSION['cpt'].'<br>';
									  
								
									// vefification de l'existance du client
									
									
									// liste des produits command??s
									       $couleur[]='success';
											$couleur[]='info';
											$couleur[]='warning';
											$couleur[]='danger';
										    $req1 = $db->prepare('SELECT nomprod,tarifprod  FROM produit');
										  
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
                                            <td><?php echo $resultat['nomprod']; ?></td>
                                            <td><?php echo $resultat['tarifprod']; ?></td>
                                            <td><?php echo $_SESSION['cpt']; ?></td>
                                            <td><?php
                                            $total=$_SESSION['cpt']*$resultat['tarifprod']; 
                                            echo $total; ?></td>
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

					 
			
        </div>		
		</div>
		</div>
	</section>*
	<?php
}
?>
	<!-- /Section: articles -->
    <!-- /Commander -->

	<!-- Section: hommes -->
    <section id="hommes" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Hommes</h2>
					<div class="divider-header"></div>
					<p>Un cadre et une decoration agreable pour la coiffure homme.</p>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="text-center">
		<div class="container">


		<div class="taille-images-hommes"><!--la taille des images hommes-->	
<div class="row">
                            <?php
								$req1 = $db->prepare('SELECT *  FROM modele where catgmod=? order by catgmod DESC ');
								$catgmod='hm';			  
								 $req1->execute(array($catgmod));
							   while ($resultat = $req1->fetch()) {
								?>
            <div class="col-xs-6 col-sm-3 col-md-3">				
				<div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.2s">
					<div class="team-wrapper-overlay">
                          <h5><?php echo $resultat['nommod']; ?></h5>
                          <p><?php echo $resultat['descripmod'].'<br><b>Prix :</b> '.$resultat['tarifmod'].' FCFA<br> '; ?>
						   
						  
						  </p>
						 
                          <div class="social-icons">
								<ul class="team-social">
									<li ><a href="<?php echo 'admin/pages/ajouter-rdv.php?p='.$resultat['codmod']; ?>"><i class="fa fa-shopping-cart fa-2x">Prendre RDV</i></a></li>
									
								</ul>
                          </div>
                        </div>
                        <img src="<?php echo 'img/modele/'.$resultat['imgmod']; ?>" alt="" />
                               
                </div>
            </div>
			
			                         <?php  
									     } 
									 ?>
        </div>		
  
		</div><!--/la taille des images hommes-->
		</div>
		</div>
	</section>
	<!-- /Section: hommes -->

	<!-- Section: parallax 1 -->	
		

	<!-- Section: femmes -->
    <section id="femmes" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Femmes</h2>
					<div class="divider-header"></div>
					<p>Un cadre et une decoration agreable pour la coiffure femme.</p>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="text-center">
		<div class="container">

<div class="taille-images-femmes">
<!--la taille des images femmes-->
		
        <div class="row">
                            <?php
								$req1 = $db->prepare('SELECT *  FROM modele where catgmod=? order by catgmod DESC ');
								$catgmod='fm';			  
								 $req1->execute(array($catgmod));
							   while ($resultat = $req1->fetch()) {
								?>
            <div class="col-xs-6 col-sm-3 col-md-3">				
				<div class="team-wrapper-big wow bounceInUp" data-wow-delay="0.2s">
					<div class="team-wrapper-overlay">
                          <h5><?php echo $resultat['nommod']; ?></h5>
                          <p><?php echo $resultat['descripmod'].'<br><b>Prix :</b> '.$resultat['tarifmod'].' FCFA<br> '; ?>
						   
						  
						  </p>
						 
                          <div class="social-icons">
								<ul class="team-social">
									<li ><a href="<?php echo 'admin/pages/ajouter-rdv.php?p='.$resultat['codmod']; ?>"><i class="fa fa-shopping-cart fa-2x">Prendre RDV</i></a></li>
									
								</ul>
                          </div>
                        </div>
                        <img src="<?php echo 'img/modele/'.$resultat['imgmod']; ?>" alt="" />
                               
                </div>
            </div>
			
			                         <?php  
									     } 
									 ?>
        </div>		
		</div><!--/la taille des images femmes-->
		</div>
		</div>
	</section>
	<!-- /Section: femmes -->	

	
	

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					
					<div class="text-center">
						<a href="#intro" class="totop"><i class="pe-7s-angle-up pe-3x"></i></a>
						
						<div class="social-widget">
							
							
							<ul class="team-social">
									<li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							</ul>						
						
						</div>
						<p>&copy;IDA 2 Theme. Tous les droits sont reserv??s</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Valera
                            -->
                            <a href="#">Themes Bootstrap Fait par IDA 2</a>
                        </div>
					</div>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/slippry.min.js"></script> 
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/morphext.min.js"></script>
	<script src="js/gmap.js"></script>
	<script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>

</html>
