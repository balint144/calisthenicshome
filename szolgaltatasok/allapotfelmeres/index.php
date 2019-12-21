<?php 
$_GET['menu'] = 'services';
$_GET['title'] = 'Állapotfelmérés';
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
									<h1 class="heading text-uppercase">Állapotfelmérés</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li><a href="<?php echo $pageUrl; ?>szolgaltatasok">Szolgáltatások</a></li>
                                    <li class="active"><a href="#">Állapotfelmérés</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <section class="container padding-top-60">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Állapotfelmérés</h2>
                        </div>
                    </header>
                </section>
				<section class="padding-bottom-100 container single-service">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-responsive" src="<?php echo $pageUrl; ?>images/allapotfelmeres_r.jpg" alt="Állapotfelmérés">
                        </div>
                        <div class="col-md-7">
                            <div class="team-lightbox">
                                <p>
									Ez lesz az első alkalmad nálunk. Anamnézissel, állapotfelméréssel, testösszetétel méréssel kezdünk. A mozgásszervi állapotfelmérés körülbelül 60 percet vesz igénybe.  Alsóneműben/fürdőruhába/ kisnadrágban, stb. történik, a teljes testen tapasztalható elváltozásokat vizsgáljuk testtartás analízis, illetve komplex funkcionális tesztek segítségével. Tájékoztatást adunk a kóros elváltozásokról, illetve átbeszéljük a problémák kialakulásának okait, a kezelési lehetőségeket, illetve a kezeléstől várható eredményeket. Ellátunk tanácsokkal az esetleges kisebb életmódbeli változtatásokkal kapcsolatban annak érdekében, hogy a meglévő testi elváltozások, betegségek a kezelést követően ne újuljanak ki. 
                                </p>
								<p>
									Az állapotfelmérésre kérjük, hozd el orvosi leleteid, amennyiben vannak. 
								</p>
                            </div>
                        </div>
                    </div>
                </section>
			</main>			
<?php
include('../../footer.php');
?>