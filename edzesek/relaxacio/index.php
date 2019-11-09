<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Relaxáció';
$_GET['title'] = 'Relaxáció';
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
									<h1 class="heading text-uppercase">Relaxáció</h1>
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
                                    <h2>Relaxáció</h2>
                                    <div class="col-md-8">
                                        <ul class="list-unstyled list">
                                            <li>A
                                                relaxáció nem meditáció és nem alvás.</li>
                                            <li>A
                                                teljes testi és lelki ellazultság állapota.</li>
                                            <li>A
                                                figyelem nem csapong, de nem is rögzül egy ponton sem.&nbsp;</li>
                                            <li>Idegrendszer
                                                megpihen, paraszimpatikus hatás kerül előtérbe.</li>
                                            <li>Izomtónus
                                                csökken.</li>
                                            <li>Vérkeringés
                                                javul.</li>
                                            <li>Szívritmus
                                                egyenletessé, nyugodttá válik.</li>
                                            <li>Felfrissít,
                                                felüdít, oldja a stresszt</li>
                                        </ul>
                                    </div>
									<div class="col-md-4">
										<img src="<?php echo $pageUrl; ?>images/Relaxacio.jpg" alt="Relaxacio.jpg" class="img-responsive">
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