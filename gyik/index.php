<?php 
$_GET['menu'] = 'faq';
$_GET['title'] = 'GYIK';
include('../config.php');
include('../head.php');
?>
			<!-- contain main informative part of the site -->
			<main id="main" role="main" style="margin-top:86px;">
                <!-- page banner -->
				<header class="page-banner small grey">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="holder">
									<h1 class="heading text-uppercase">GYIK</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li class="active"><a href="#">GYIK</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <!-- faq section -->
				<div class="container padding-bottom-100 faq-section padding-top-100">
                    <!-- page heading -->
                    <header class="page-heading">
                        <h2 class="heading2 lime font-medium margin-bottom-30">Néhány gyakrani kérdés</h2>
                        <p>Megválaszolunk néhány gyakori kérdést. Ha ezeken kívül bármilyen egyéb kérdés felfelmerül, szíven válaszulonk minden kérdésre a Kapcsolatok menüpont alatti eléhetőségeinken.</p>
                    </header>
					<div class="row holder">
						<div class="col-xs-12">
							<!-- beans-accordion -->
							<ul class="beans-accordion list-unstyled">
								<li class="active">
									<h2><a href="#" class="opener"><i class="fa fa-angle-right"></i>Hogyan történik az időpontot foglalás?</a></h2>
									<!-- beans-slide -->
									<div class="beans-slide">
										<p>
											Időpontfoglalásra telefonon, e-mailen vagy Facebook Messengeren van lehetőség.
										</p>
										<p>
											Telefon:<br>
											Nóri <a href="tel:+36305602411">06305602411</a> <br>
											Zsolt <a href="tel:+36306503224">06306503224</a> 
										</p>
										<p>
											Email: <br>
											Nóri <a href="mailto:nadas.nora.piroska@gmail.com">nadas.nora.piroska@gmail.com</a><br>
											Zsolt <a href="mailto:sz.zsolt.avf@gmail.com">sz.zsolt.avf@gmail.com</a><br>
											Közös <a href="mailto:calisthenicscouplehu@gmail.com">calisthenicscouplehu@gmail.com</a>
										</p>
										<p>
											Facebook<br>
											Nóri <a href="https://www.facebook.com/nadas.nori/" target="_blank">https://www.facebook.com/nadas.nori/</a> <br>
											Zsolt <a href="https://www.facebook.com/zsolt.szilagyi.399" target="_blank">https://www.facebook.com/zsolt.szilagyi.399</a><br>
											Közös <a href="https://www.facebook.com/calisthenicshome/" target="_blank">https://www.facebook.com/calisthenicshome/</a>
										</p>
										<p>
											Abban az esetben, ha nem tudjuk felvenni a telefont, valószínűleg dolgozunk.<br>
											Ha engedélyezted a számkijelzést, minden esetben visszahívunk! 
										</p>
									</div>
								</li>
								<li>
									<h2><a href="#" class="opener"><i class="fa fa-angle-right"></i>Hogyan történik az időpont lemondás?</a></h2>
									<!-- beans-slide -->
									<div class="beans-slide">
										<p>Ha nem tudsz megjelenni a lefoglalt időpontban, kérjük, értesíts minket minél előbb.</p>
										<ul>
											<li>Ha a lemondás 24 órával az időpont előtt megtörténik, akkor ingyenes.</li>
											<li>24 órán belüli lemondás esetén viszont a teljes összeg felszámolásra kerül, hiszen nem tudjuk kiadni az időpontot másnak.</li>
										</ul>
									</div>
								</li>
								<li>
									<h2><a href="#" class="opener"><i class="fa fa-angle-right"></i> Akadálymentesített?</a></h2>
									<!-- beans-slide -->
									<div class="beans-slide">
										<p>Nem</p>
									</div>
								</li>
								<li>
									<h2><a href="#" class="opener"><i class="fa fa-angle-right"></i> Kutyabarát?</a></h2>
									<!-- beans-slide -->
									<div class="beans-slide">
										<p>Igen.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</main>			
<?php
include('../footer.php');
?>