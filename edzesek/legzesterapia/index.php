<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Légzésterápia';
$_GET['title'] = 'Légzésterápia';
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
									<h1 class="heading text-uppercase">Légzésterápia</h1>
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
									<h2>Légzésterápia</h2>
									<ul class="list-unstyled list">
                                        <li>Felszabadítja
                                            a légzésben résztvevő izmokat, így segíti a helyes testtartás
                                            kialakítását.</li>
                                        <li>Segít
                                            felszabadítani a tüdőt és kihasználni annak maximális kapacitását.</li>
                                        <li>Harmonizálja
                                            az idegrendszeri és hormonális működést.</li>
                                        <li>A
                                            helyes légzés által több energiához, frissességhez jutunk, amely
                                            hozzájárul a stresszmentesebb élet megvalósításához</li>
                                        <li>Nincs
                                            még egy olyan „mozgásforma”, amely teljes körűen lazítaná és erősítené a
                                            testtartásunk alapját képező mélyizom-rendszert</li>
									</ul>
									<p class="service-txt">
										<img src="<?php echo $pageUrl; ?>images/Legzesterapia.jpg" alt="Legzesterapia.jpg" class="img-responsive">
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