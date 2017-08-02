<div class="loader">
    		<div class="spinner">
			  <div class="double-bounce1"></div>
			  <div class="double-bounce2"></div>
			</div>
    	</div>
				
		<div class="nav-container">
		<nav class="top-bar overlay-bar">
				<div class="container">
				
					<div class="row nav-menu">
						<div class="col-md-2 col-sm-3 columns">
								<a href="/">
								<?php 
							$actual_page = $_SERVER[REQUEST_URI];
							if(strlen($actual_page)>1){ 
								echo '<img alt="logo" class="outer-logo" src="/img/Logo-ProductStrategy-white-slim.png">';
							}
						 else{
								echo '<img alt="logo" class="outer-logo" src="/img/A-ProductStrategy-seul.png">';
						 }
							?> 
							</a>
						</div>
					
						<div class="col-md-10 col-sm-9 columns">
							<ul class="menu">
								<li><a href="#">Clients</a></li>
								<li class="has-dropdown"><a href="#">Offres</a>
									<ul class="subnav">
										<li><a href="offre-ideeMVP.php">De l'idée au MVP</a></li>
										<li><a href="offre-optimisation.php">Optimisation produit</a></li>
										<li><a href="offre-organisation.php">Organisation produit</a></li>
										<li><a href="offre-designsprint.php">Design Sprint</a></li>
									</ul>
								</li>
								<li><a href="publications.php">Publications</a></li>
								<li><a href="equipe.php">Équipe</a></li>
								<li><a href="playbook.php">Playbook</a></li>
							</ul>
		
							<ul class="social-icons text-right">
								<li>
									<a href="https://twitter.com/innothiga">
										<i class="icon social_twitter"></i>
									</a>
								</li>
							
							
								<li>
									<a href="https://www.instagram.com/thigafr">
										<i class="icon social_instagram"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="mobile-toggle">
						<i class="icon icon_menu"></i>
					</div>
					
				</div>
			</nav>
			
		
		</div>