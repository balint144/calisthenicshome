<?php 
$_GET['menu'] = 'services';
$_GET['submenu'] = 'Flossing';
$_GET['title'] = 'Flossing';
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
									<h1 class="heading text-uppercase">Flossing</h1>
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
									<h2>Flossing</h2>
									<ul class="list-unstyled list">
                                        <li>A
                                            flossing egy rendkívül sokoldalú, elsősorban a mozgásszervi prevenció és
                                            rehabilitáció terén használt komplex fizioterápiás eljárás, amelynek része
                                            a floss szalaggal végzett kompressziós terápia, illetve a
                                            flosstréning.</li>
                                        <li>A
                                            kezelés fő célja a mobilitás növelése, a fájdalom csillapítása és a
                                            szöveti letapadások oldása.</li>
                                        <li>A
                                            terápia során az egyes izmokat, ízületeket, fasciát egy speciális
                                            gumiszalaggal (floss szalag) körbetekerjük (kompresszió) és így a
                                            problémától függően aktív mozgásokat végzünk.</li>
                                        <li>Akut
                                            és krónikus sérülések, fájdalmak esetén egyaránt használható, az izom-és
                                            kötőszöveti egyensúly megbomlását,&nbsp; az ízületek mozgásterjedelmének
                                            beszűkülését, a szövetek krónikus feszességét, az izmok gyengülését,
                                            sérülését, a különféle gyulladásokat, letapadásokat és fájdalmakat
                                            hivatott csökkenteni.</li>
                                        <li>
                                            <div class="col-md-8 col-lg-9" style="padding-left:0;">
                                                Mire jó?<br>
                                                <span><i class="fa fa-caret-right"></i>fájdalomcsillapítás</span><br>
                                                <span><i class="fa fa-caret-right"></i>a mozgásterjedelem (ROM) növelése</span><br>
                                                <span><i class="fa fa-caret-right"></i>gyulladáscsökkentés</span><br>
                                                <span><i class="fa fa-caret-right"></i>a koordináció javítása</span><br>
                                                <span><i class="fa fa-caret-right"></i>ödéma csökkentés</span><br>
                                                <span><i class="fa fa-caret-right"></i>az izmok, idegek, szalagok és egyéb szövetek csúszásának,</span><br>
                                                <span style="padding-left:30px;">csúsztathatóságának javítása</span><br>
                                                <span><i class="fa fa-caret-right"></i>a vérkeringés serkentése</span><br>
                                                <span><i class="fa fa-caret-right"></i>a szövetek oxigén és tápanyagellátásának javítása</span><br>
                                                <span><i class="fa fa-caret-right"></i>a sérülések megakadályozása (prevenció)</span><br>
                                                <span><i class="fa fa-caret-right"></i>a szöveti gyógyulás felgyorsítása (rehabilitáció)</span><br>
                                                <span><i class="fa fa-caret-right"></i>sérülések esetén elsősegély</span><br>
                                                <span><i class="fa fa-caret-right"></i>mozgásminták javítása (sport és mindennapok)</span><br>
                                            </div>
                                            <div class="col-md-4 col-lg-3" style="padding-left:0;">
                                                <img style="margin-top:20px;" src="<?php echo $pageUrl; ?>images/Flossing.jpg" alt="Flossing.jpg" class="img-responsive">
                                            </div>
                                        </li>
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