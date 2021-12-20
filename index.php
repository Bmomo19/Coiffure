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

    <!-- page loader -->
    <div id="page-loader">
      <div class="loader">
        <div class="spinner">
          <div class="spinner-container con1">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con2">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
          <div class="spinner-container con3">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="circle4"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /page loader -->

	<!-- Section: home slide -->
    <section id="intro" class="home-slide text-light">
		<ul id="valera-slippry">
		  <li>
			<div>
			<img src="img/slides/1.jpg" alt="Bienvenu sur le site Réference Coiffure <br /><a href='#hommes' class='btn btn-skin btn-slide'>cliquez-ici</a>">
			</div>
		  </li>
		  <li>
			<div><img src="img/slides/2.jpg"  alt="La beauté n'a pas de prix <br /><a href='#femmes' class='btn btn-skin btn-slide'>visitez notre salon </a>"></div>
		  </li>
		  <li>
			<div><img src="img/slides/3.jpg" alt="un cadre agreable <span class='red'>♥</span> <br /><a href='#service' class='btn btn-skin btn-slide'>cliquez ici</a>"></div>
		  </li>
		</ul>
    </section>
	<!-- /Section: intro -->
	
	
    <!-- Navigation -->
    <?php include("menu.php"); ?>
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
					<p>Liste des produits commandés</p>
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
                            <form  action="admin/save/produit/sql-produit-commander-valider.php" method="post">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										     <th>Produit</th>
                                            <th>Prix unitaire</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                            
                                        </tr>
                                    </thead>
									
									<?php
									// Nombre de produit commandé
									//echo 'Nombre de produit acheté: '.$_SESSION['cpt'].'<br>';
								    echo '<h4>Total  :'.$_SESSION['totaux'].' CFA</h4>';
								    $nbreproduit=$_SESSION['cpt'];
                                       $k=1;
                                    
                                       	  while($nbreproduit>0)	{
									 	$cleprod='cleprod'.$k;
                                        $cleprixvente='cleprixvente'.$k;
										//echo $cleprod.' : '.$_SESSION[$cleprod].'<br>';
										//echo $cleprixvente.' : '.$_SESSION[$cleprixvente].'<br>';
										$listevente[$k]=$_SESSION[$cleprod];
										$prixvent[$k]=$_SESSION[$cleprixvente];

										$nbreproduit--;
										$k++;
                                           }
                                         // print_r($listevente).'<br>';
                                          // echo '<br>';
										  //print_r(array_count_values($listevente)).'<br>';
										  $achat=array_count_values($listevente); 
                                          $nbreprod=count($achat);
									// classement des achats
										
																					 //echo count($achat).'cccc<br>'; ;      
									// vefification de l'existance du client
									
									
									// liste des produits commandés
									       $couleur[]='success';
											$couleur[]='info';
											$couleur[]='warning';
											$couleur[]='danger';										  
										 	$cpt=0;
											$ordre=1;
											
											 //echo "Code du Produit=$codproduit ,Quantité=$quantites <br/>";
											   // $req= $db->prepare('SELECT codprod, nomprod  FROM produit WHERE codprod='.$codproduit);
											   // $req->execute(array());
											   // $quantite[$j]=$quantites ;
											   // $j++;

																			 							 
										  //$nomclt=$resultat['nomclt'];
									?>
									 
                                    <tbody>
                                   
									<?php
									    $j=1;
                                      foreach($achat as $codproduit => $quantites)
											{
																			 									
									?>   
                                        <tr class="<?php echo $couleur[$cpt]; ?>">
                                            <td><?php 

                                           $req1= $db->prepare('SELECT codprod, nomprod  FROM produit WHERE codprod='.$codproduit);
                                           $req1->execute(array());

									     if($resultat1 = $req1->fetch()) {
                                              echo $resultat1['nomprod'];
                                              $nomprod[$j]=$resultat1['nomprod'];
                                              $codprod[$j]=$resultat1['codprod'];

                                           }

                                            ?>
                                            	<input type="hidden" name="<?php echo 'nomprod'.$j;?>" value="<?php echo $resultat1['nomprod']; ?>">
                                            	<input type="hidden" name="<?php echo 'codprod'.$j;?>" value="<?php echo $resultat1['codprod']; ?>">
                                            </td>
                                            <td><?php  
                                            $req2= $db->prepare('SELECT `prixvente`,`remise` FROM `constituer` WHERE `codconst`=(SELECT max(`codconst`) FROM `constituer` WHERE `codprod`='.$codproduit.')');
                                             $req2->execute(array());
                                              if($resultat2 = $req2->fetch()) {
                                              $prix=$resultat2['prixvente']-$resultat2['remise'];
                                              echo $prix.' CFA';
                                              $prixvte[$j]=$prix;
                                                 }
                                                   
                                                  ?> 
                                                  <input type="hidden" name="<?php echo 'prixvte'.$j;?>" value="<?php echo $prix; ?>">                                           	
                                            </td>
                                            <td><?php echo $quantites; $qte[$j]=$quantites;   ?>
                                            	<input type="hidden" name="<?php echo 'quantites'.$j;?>" value="<?php echo $quantites; ?>">	
                                            	<?php  $_SESSION['nbrligne']=$j;   ?>	
                                            </td>
                                            <td><?php
                                             echo $quantites*$prix;

                                             ?>
                                              

                                             </td>
                                        </tr>
																				
									<?php  
									       
                                           $j++;
									      $cpt++;
										  $ordre++;
										  if($cpt>3){$cpt=0;}
									

                                     }

									 ?>

                                        </tbody>

                                </table>
                               
                                       <input type="submit" class="btn btn-success" value="Valider"> - -
                                        <span class="btn btn-warning"><a href="admin/save/produit/sql-produit-commander-annuler.php">Annuler</a></span> 
                                        </form>
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
								$req1 = $db->prepare('SELECT *  FROM modele where catgmod=? order by catgmod DESC Limit 4');
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
<a href="plusmod.php"><button>Plus de modeles</button></a>

        
		</div><!--/la taille des images hommes-->
		</div>
		</div>
	</section>
	<!-- /Section: hommes -->

	<!-- Section: parallax 1 -->	
	<section id="parallax1-hommes" class="home-section parallax text-light" data-stellar-background-ratio="0.5">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
						<h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">NOS PETERNAIRES SONT DISPONIBLE</h2>
						</div>
					</div>				
				</div>
            </div>
	</section>	

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
								$req1 = $db->prepare('SELECT *  FROM modele where catgmod=? order by catgmod DESC Limit 4');
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
        <a href="plusmod.php"><button>Plus de modeles</button></a>		
		</div><!--/la taille des images femmes-->
		</div>
		</div>
	</section>
	<!-- /Section: femmes -->
	
	<!-- Section: parallax 1 -->	
	<section id="parallax1-femmes" class="home-section parallax text-light" data-stellar-background-ratio="0.5">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
						<h2 class="big-heading highlight-dark wow bounceInDown" data-wow-delay="0.2s">Nos partenairs</h2>
						</div>
					</div>				
				</div>
            </div>
	</section>	
	
	<!-- Section: services -->
  <!-- Section: services -->
    <section id="service" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Services</h2>
					<div class="divider-header"></div>
					<p>Les differents types de service disponible</p>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row">
                        	<?php
								$req1 = $db->prepare('SELECT *  FROM prestation  order by catgprest DESC Limit 4');
										  
								 $req1->execute(array());
							   while ($resultat = $req1->fetch()) {
								?>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<span class=""><img src="<?php echo 'img/prestation/'.$resultat['imgprest']; ?>" width="150" height="150" alt="" /></span> 
					</div>
					<div class="service-desc">						
						<h5><?php echo $resultat['nomprest']; ?></h5>
						<p>
						<?php echo $resultat['descriprest'].'<br><b>Prix :</b> '.$resultat['tarifprest'].' FCFA<br> '; ?>
						</p>
						<a  class="btn btn-skin" href="<?php echo 'admin/pages/ajouter-rdv.php?p='.$resultat['codprest']; ?>">Prendre RDV</a>
					</div>
                </div>
				</div>
            </div>
                             <?php  
									     } 
									 ?>

					 
			<a href="plusprest.php"><button>Plus de prestations</button></a>
        </div>		
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	<!-- /Section: services -->

	<!-- Section: articles -->
    <!-- Section: articles -->
    <section id="articles" class="home-section color-dark bg-white">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Articles</h2>
					<div class="divider-header"></div>
					<p>Les differents types d'articles disponibles</p>
					</div>
					</div>
				</div>
			</div>

		</div>

		<div class="text-center">
		<div class="container">

        <div class="row">
                        	<?php
								$req1 = $db->prepare('SELECT produit.codprod, produit.nomprod, produit.imgprod, produit.descriprod, constituer.prixvente, 
								constituer.remise   FROM produit, constituer WHERE produit.codprod=constituer.codprod and constituer.remise<>0 order by nomprod DESC Limit 4');
										  
								 $req1->execute(array());
							   while ($resultat = $req1->fetch()) {
								?>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<span class=""><img src="<?php echo 'img/produit/'.$resultat['imgprod']; ?>" width="150" height="150" alt="" /></span> 
					</div>
					<div class="service-desc">						
						<h5><?php echo $resultat['nomprod']; ?></h5>
						<p style="background:#ff0000; border-radius:50%;  border:2px solid #679403; color:white; ">
						<?php echo $resultat['prixvente'].' CFA '; ?>
						</p>
						<p>
						<?php echo $resultat['descriprod'].' '; ?>
						</p>
						 <p style="background:#ff0000; border-radius:50%; width:35%;  border:1px solid #679403; color:white; ">
						<?php $remise=($resultat['remise']/ $resultat['prixvente'])*100; echo '-'.intval($remise) .' % '; $prixvente=$resultat['prixvente']-$resultat['remise']; ?>
						</p>
						<a href="<?php echo'admin/save/produit/sql-produit-commander.php?codprod='.$resultat['codprod'].'&&prixvente='.$prixvente;   ?>" class="btn btn-skin">Commander</a>
					</div>
                </div>
				</div>
            </div>
                             <?php  
									     } 
									 ?>

					 <a href="plusprod.php"><button>Plus de produits</button></a>
			
        </div>		
		</div>
		</div>
	</section>
   
	<!-- /Section: articles -->
	<!-- /Section: articles -->
	
	<!-- Section: parallax 2 -->	
		
	

	<!-- Section: works -->
   
	<!-- /Section: works -->

	<!-- Section: parallax 3 -->	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section nopadd-bot color-dark bg-white text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow flipInY" data-wow-offset="0" data-wow-delay="0.4s">
					<div class="section-heading text-center">
					<h2 class="h-bold">Contactez nous</h2>
					<div class="divider-header"></div>
					<p>Nous atendons vos messages et suggetions </p>
					</div>
					</div>
				</div>
			</div>

		</div>
		
		<div class="container">

			<div class="row marginbot-80">
				<div class="col-md-8 col-md-offset-2">
		            <div id="sendmessage">Votre message sera envoyé. Merci!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="S'il vous plait entrez plus 4 caracteres !" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre mail" data-rule="email" data-msg="S'il vous plait entrez un mail valide !" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="S'il vous plait entrez plus de 8 caracteres" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="S'il vous plait Envoyez nous au moins un message" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        
                        <div class="text-center"><button type="submit" class="btn btn-skin btn-lg btn-block">Envoyez le Message</button></div>
                    </form>
				</div>
			</div>	


		</div>
	</section>
	<!-- /Section: contact -->

	<!-- google map -->
	<div id="map-btn1-div">
		<a id="map-btn1" class="gmap-btn close-map-button btn-show" href="#map">
		Cliquez ici pour notre adresse
		</a>
	</div>
	<a id="map-btn2" class="btn btn-skin btn-lg btn-noradius gmap-btn close-map-button btn-hide" href="#map" title="Close google map" data-toggle="tooltip" data-placement="top">
	Nous sommes situé à Bouaké *******
	</a>
	
	<!-- google map -->
	<section id="map" class="close-map">
		<div id="google-map"></div>
	</section>
	<!-- /google map -->		
	

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
						<p>&copy;IDA 2 Theme. Tous les droits sont reservés</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Valera
                            -->
                            <a href="#">Fait par IDA 2</a>
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
