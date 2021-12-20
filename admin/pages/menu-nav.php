 <nav class="navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Coiffure Expert</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index-admin.php">
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
                            <a href="../index-admin.php"><i class="fa fa-dashboard fa-fw"></i>Tableau de Bord</a>
                        </li>
                        						
						    <li>
                            <a href="#"><i class="glyphicon glyphicon-user "></i> Gestiion des clients<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							 
                                <li>
                                    <a href="inscription-client.php">Ajouter un nouveau client</a>
                                </li>
								
                                <li>
                                    <a href="clients.php">Liste des clients</a>
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
                                    <a href="inscription.php">Ajouter un nouveau personnel</a>
                                </li>';
								}
								?>
                                
                                <li>
                                    <a href="personnel.php">Liste du personnel</a>
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
                                    <a href="inscription-fournisseur.php">Ajouter un nouveau fournisseur</a>
                                 </li>';
							 	}
								?>
                                
                                <li>
                                    <a href="fournisseur.php">Liste des fournisseurs</a>
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
										<a href="ajouter-produit.php">Ajouter un nouveau produit</a>
									 </li>';
									}
									?>
                                
                                <li>
                                    <a href="produit.php">Liste des produits</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw "></i> Gestiion des prestations<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							       <?php 
									   if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
									 echo '
									 <li>
										<a href="ajouter-prestation.php">Ajoutez une nouvelle prestation</a>
									 </li>';
									}
									?>
                                
                                <li>
                                    <a href="prestation.php">Liste des prestation</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-star"></i> Gestiion des modeles<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							      <?php 
									   if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
									 echo '
									 <li>
										<a href="ajouter-modele.php">Ajoutez un nouveau modèle</a>
									 </li>';
									}
									?>
							  
                                
                                <li>
                                    <a href="modele.php">Liste des modèles</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-star"></i> Gestiion des rendez-vous<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
							   
							   <?php 
									   if( $_SESSION['categorie']=='adm' or $_SESSION['categorie']=='grt'){
									 echo '
									 <li>
										<a href="inscription-client.php">Ajoutez un Rendez-vous</a>
									 </li>';
									}
									?>
							  
							   
                                 <li>
                                    <a href="rdv.php">Liste des des rendez-vous</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>	                                 
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
