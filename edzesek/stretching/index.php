<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Stretching';
$_GET['title'] = 'Stretching';
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
									<h1 class="heading text-uppercase">Stretching</h1>
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
									<h2>Stretching</h2>
									<ul class="list-unstyled list">
                                        <li>A
                                            stretching szó nyújtást jelent, mely többféle technikát is magába foglal.</li>
                                        <li>Célja
                                            az izmok, szövetek, ízületek rugalmasságának helyreállítása, megtartása és
                                            fejlesztése.</li>
                                        <li>Sokan
                                            nem tudják, de az izomzat megfelelő rugalmassága kiemelkedően fontos
                                            ahhoz, hogy az erő és állóképesség fejlődjön, a testtartás és mozgás
                                            fiziológiás, harmonikus legyen.&nbsp;</li>
                                        <li>Nem
                                            csak passzív nyújtás, stabilizációs, erősítő gyakorlat anyagokat is magába
                                            foglal.</li>
                                        <li>Rendszeres
                                            gyakorlással csökken a sérülésveszély, az izomláz kialakulásának esélye és
                                            csökken a stresszhormon (kortizol) szint a szervezetben.</li>
                                        <li>Gyorsítja a regenerációt, ezáltal a
                                            regenerálódott rugalmas izom nagyobb erőkifejtésre, gazdaságosabb
                                            működésre, és nagyobb mozgásterjedelemben történő mozgásra lesz képes,
                                            mint a megrövidült merev izom.&nbsp;</li>
                                    </ul>
                                    <p class="service-txt">
                                        <img src="<?php echo $pageUrl; ?>images/Stretching.jpg" alt="Stretching.jpg" class="img-responsive">
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