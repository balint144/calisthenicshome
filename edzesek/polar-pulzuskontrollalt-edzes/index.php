<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Polar pulzuskontrollált edzés';
$_GET['title'] = 'Polar pulzuskontrollált edzés';
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
									<h1 class="heading text-uppercase">Polar pulzuskontrollált edzés</h1>
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
									<h2>Polar pulzuskontrollált edzés</h2>
									<ul class="list-unstyled list">
                                        <li>Ha nyomon követed a pulzusodat, biztos lehetsz benne,
                                            hogy mindig a megfelelő intenzitási szinten végzed az edzést. Légy
                                            okosabb, használd ki hatékonyan az idődet!</li>
                                        <li>A
                                            pulzusod mérése révén pontosan tudni fogod, hogy milyen keményen dolgozik
                                            a tested.</li>
                                        <li>Ahhoz,
                                            hogy a legtöbbet hozd ki az edzésekből, nem mindig kell gyorsabban vagy
                                            keményebben dolgoznod, hanem okosabban kell edzened.</li>
                                        <li>A
                                            pulzusmérésen alapuló edzés segít neked, optimalizálja az erőkifejtésed,
                                            így az edzésszakaszod minden egyes percét hasznosan töltöd el.</li>
                                        <li>A pulzusmérés nagyszerű eszköz az erőkifejtésed és az
                                            összesített terhelésed értékelésére. A segítségével megtudhatod, hogy a
                                            tested milyen keményen dolgozik az edzésszakaszok adott pillanatában, és
                                            utólag adatokat szolgáltat az edzésszakaszod intenzitásáról. Nem kell
                                            többé találgatnod!</li>
                                        <li>A pulzusmérésen alapuló edzés lehetővé teszi az
                                            optimális célpulzuszóna meghatározását az egyes edzésszakaszokhoz a
                                            céljaid függvényében.&nbsp;</li>
                                    </ul>
                                    <p class="service-txt">
                                        <img style="margin:auto" src="<?php echo $pageUrl; ?>images/polar_pulzus_kontrollalt_edzes_r.jpg" alt="polar_pulzus_kontrollalt_edzes_r.jpg" class="img-responsive">
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