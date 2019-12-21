<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Reaxing training';
$_GET['title'] = 'Reaxing training';
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
									<h1 class="heading text-uppercase">Reaxing training</h1>
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
									<h2>Reaxing training</h2>
									<ul class="list-unstyled list">
                                        <li>Újdonság
                                            a funkcionális edzésben.</li>
                                        <li>Kihívást
                                            nyújt, de mégis szórakoztató.</li>
                                        <li>Testformálás,
                                            teljesítménynövelés, érzékelés fejlesztés, kőkemény edzés.</li>
                                        <li>A
                                            hirtelen és kiszámíthatatlan impulzusokra való reagálás fejleszti.</li>
                                        <li>A
                                            Reaxing Training az egyetlen a világon, amely az érzékeket fejleszti így
                                            fokozva a teljesítményt.</li>
                                        <li>Az
                                            érdekszerveidet fokozatos reagálásra készteti. A folyamatosan változó
                                            ingerek gyors reakcióra kényszerítik a neuromuszkuláris rendszert, így
                                            fokozzák a teljesítményt.</li>
                                        <li>Javul
                                            az anyagcsere-aktivitás, az izomrendszer reagálási képessége, a sérülés
                                            utáni rehabilitáció sikeressége, miközben alapvetően csökkenti a
                                            sérülések, újrasérülések kockázatát.</li>
                                    </ul>
                                    <p class="service-txt">
                                        <img style="margin:auto" src="<?php echo $pageUrl; ?>images/Reaxing_r.jpg" alt="Reaxing_r.jpg" class="img-responsive">
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