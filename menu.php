<div id="navigation">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                              <div class="container">
                              	 <div class="row">
                              	 	<div class="col-md-12" id="entete"><span> <?php if(isset($_SESSION['nom']) and !empty($_SESSION['nom'])){ echo $_SESSION['nom'].' '.$_SESSION['prenoms'];} ?>
</span><span>|
	          <?php if(isset($_SESSION['nom']) and !empty($_SESSION['nom']))
			  { 
			  echo 'votre tableau de bord ';
			  echo '|<i class="fa fa-shopping-cart fa-2x"> </i>  ' ;
        if(isset($_SESSION['cpt']) and !empty($_SESSION['cpt'])){
        echo '<font size="4 px"><a href="?q=cmd#cmd">'.$_SESSION['cpt'].'</a></font>' ;
			  }
        else {
            echo '0';

        }

			  } ?>
									
									
									</span>
                     <div>
					
                     <li class="dropdown">
					<?php if(isset($_SESSION['cnx']) and $_SESSION['cnx']=='Deconnexion'){ echo '<a href="admin/save/deconnection.php">'.$_SESSION['cnx'].'</a>';} else {echo ' <a href="admin/login.php">Connexion </a>';}?>
                    <a class="rd" class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Compte Client</a>
                        </li>
                        <li><a href="admin/pages/inscription-client.php"><i class="fa fa-sign-out fa-fw"></i>Inscription</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin/pages/login.php"><i class="fa fa-gear fa-fw"></i>Administrateur</a>
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
                                                            <a href="index.php"><img src="img/logo.jpg" alt="logo" /></a>
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
                                                                  <li class="active"><a href="#intro">
                                                                  	<span class="glyphicon glyphicon-home"></span>
                                                                  </a></li>
                                                                  <li><a class="fa fa-male" href="#hommes">Hommes</a></li>
                                                                  <li><a class="fa fa-female" href="#femmes">Femmes</a></li>
																   <li><a href="#service">Services</a></li>
																   <li><a href="#articles">Articles</a></li>
                                                                  <!-- <li><a href="#works">Works</a></li> -->				                                                                  
                                                                  
                                                                  <li><a href="#contact">Contact</a></li>
																  
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 