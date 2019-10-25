<?php 
$_GET['menu'] = 'services';
$_GET['submenu'] = 'Spartan Fighter';
$_GET['title'] = 'Spartan Fighter';
include('../../config.php');
include('../../head.php');
?>
			<!-- contain main informative part of the site -->
			<main id="main" role="main" style="margin-top:86px;">
                <!-- page banner -->
				<header class="page-banner small grey">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-uppercase">Spartan Fighter</h1>
								</div>
								<?php include('../breadcrumb.php') ?>
							</div>
						</div>
					</div>
				</header>
                <section class="core-section padding-top-100 padding-bottom-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
                            	<div class="service-txt">
									<h2>Spartan Fighter</h2>
									<div class="col-md-8">
										<ul class="list-unstyled list">
											<li>Spartan
												Fighter tudás és gyakorlatanyaga tökéletes kiegészítő és felkészítő
												edzéstípus a Crossfitt és Crossfitt alapú edzésekhez, a terepfutások,
												akadályfutások (Spartan Race, Brutál futás) szerelmeseinek, a küzdősportot
												végző sportolóknak és azoknak, akik az igazi funkcionális edzéseket
												szeretik és ezt egy magasabb szinten szeretnék űzni.</li>
											<li>Ez
												nem egy új fitness irányzat, hanem egy eredményorientált, erőnléti edzés-
												koncepció!</li>
											<li>Cél
												az erő- állóképesség, robbanékonyság fejlesztése, ahol küzdősporti elemek
												(boxzsák, ütő- rúgópárna) végrehajtásával is próbára teheted magad.</li>
											<li>Jellemző
												a változatos sportszerhasználat (girja, battle rope, miniband, agility
												létra, illetve természetesen a saját testsúly).</li>
										</ul>
									</div>
									<div class="col-md-4">
										<img src="<?php echo $pageUrl; ?>images/Spartan_Fighter.jpg" alt="Spartan_Fighter.jpg" class="img-responsive">
									</div>
                                </div>
							</div>
                            <?php include('../leftMenu.php') ?>
						</div>
					</div>
                </section>
			</main>			
<?php
include('../../footer.php');
?>