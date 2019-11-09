<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'FMS';
$_GET['title'] = 'FMS';
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
									<h1 class="heading text-uppercase">FMS</h1>
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
									<h2>FMS</h2>
									<ul class="list-unstyled list">
                                        <li>Funkcionális
                                            Mozgásminta-Szűrés elvégzésével gyorsan meggyőződhetünk arról, áll-e fenn
                                            potenciális kockázat, ha az egyén mozgásmintája korlátozott vagy
                                            elváltozásokat mutat. A hagyományos edzések során ezek a jellegzetességek
                                            gyakran rejtve maradnak. A Szűrő alkalmas a sportági felmérések
                                            finomítására is.</li>
                                        <li>Javítja
                                            a funkcionális sportteljesítményt.</li>
                                        <li>Segít
                                            csökkenteni a sportsérülések potenciálját.</li>
                                        <li>Egyszerű
                                            pontozási rendszert kínál a mozgás felmérésére.</li>
                                        <li>Azonosítja
                                            a fizikai aránytalanságokat, a gyenge láncszemeket.</li>
                                        <li>Egyszerű
                                            javító gyakorlatok segítségével rehabilitálja az aránytalanságokat,
                                            megerősíti a gyenge láncszemeket.</li>
                                    </ul>
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