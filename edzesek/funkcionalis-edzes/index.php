<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Funkcionális edzés';
$_GET['title'] = 'Funkcionális edzés';
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
									<h1 class="heading text-uppercase">Funkcionális edzés</h1>
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
									<h2>Funkcionális edzés</h2>
									<ul class="list-unstyled list">
                                        <li>Egy
                                            erő-, állóképességi, robbanékonysági és stabilitást fejlesztő edzés, ahol
                                            a saját testsúlyos és egyéb sportszeres feladatok váltják egymást.</li>
                                        <li>Húzó-toló
                                            erő, egyensúly és állóképesség fejlesztése a mindennapi életben is
                                            megjelenő mozgások használatával.</li>
									</ul>
									<p class="service-txt">
										<img style="width:500px;margin:auto" src="<?php echo $pageUrl; ?>images/Funkcionalis_Koredzes.jpg" alt="Funkcionalis_Koredzes.jpg" class="img-responsive">
									</p>
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