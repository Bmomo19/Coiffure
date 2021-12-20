     <!-- Navigation -->
<div id="">
        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
                              <div class="container">
                                 <div class="row">
         <div class="col-md-12" id="entete"><span>accessoire</span><span>|le salon</span><div>|<a href="../save/deconnection.php">
		 
		  <?php

if (!empty($_SESSION['cnx']) and isset($_SESSION['cnx'])) {
    echo $_SESSION['cnx'];
}
else {
    //redirection vers index-admin
    header('location:../../index.php');
}

                
                ?>
		 
		 
		 </a></div>
                                 </div> 
                                 </div>
                                    <div class="row">
                                          <div class="col-md-2">
                                                   <div class="site-logo">
                                                            <a href="../index-admin.php"><img src="../../img/logo.jpg" alt="logo" /></a>
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
                                                                  <li class="active"><a href="../index-admin.php">
                                                                    <span class="glyphicon glyphicon-home"></span>
                                                                  </a></li>
                                                                 <li><a href="clients.php">Listes des clients</a></li>
                                                                  <li><a href="personnel.php">Liste du personnel</a></li>
                                                                  <li><a href="rdv.php">Liste des RDV</a></li>
                                                                  <li><a href="fournisseur.php">Liste des fournisseurs</a></li>
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