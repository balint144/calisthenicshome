<?php 
$_GET['menu'] = 'services';
$_GET['title'] = 'Személyi edzés';
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
									<h1 class="heading text-uppercase">Személyi edzés</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li><a href="<?php echo $pageUrl; ?>szolgaltatasok">Szolgáltatások</a></li>
                                    <li class="active"><a href="#">Személyi edzés</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <section class="container padding-top-60">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Személyi edzés</h2>
                        </div>
                    </header>
				</section>
				<section class="padding-bottom-100 container single-service">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-responsive" src="<?php echo $pageUrl; ?>images/szemelyi_edzes_r.jpg" alt="Személyi edzés">
                        </div>
                        <div class="col-md-7">
                            <div class="team-lightbox">
                                <p>
									Személyi edző által tervezett és irányított edzés során, pontosabban, hatékonyabban, valamint kevesebb idő és energia ráfordítással, a sérülések kockázatának minimalizálásával érheted el kitűzött céljaitdat. Megtanítjuk a feladatok pontos végrehajtási módját a Te testi, fizikai állapotodnak megfelelően. Személyi edzés során folyamatos kontroll alatt végzed a gyakorlatokat, melyhez megfelelő motivációs szintet biztosítunk. Hosszú távú tervezés mellett, az aktuális állapotodat is figyelembe vesszük, annak megfelelően adaptáljuk az edzésterhelés mértékét, csökkentve ezzel a túlterhelés, megerőltetés, sérülés veszélyeit.
								</p>
								<p>
									Javasoljuk a személyi edzést ha kezdő vagy újrakezdő vagy, ha eddig edzettél, de nem értél el eredményt, ha fogyni, erősödni vagy formásodni szeretnél. Különösen javasoljuk akkor is, ha valamilyen mozgásszervi problémád van, sportsérülést szenvedtél, rehabilitációra van szükséged, esetleg a rehabilitációs folyamat után térnél vissza edzeni.
								</p>                
                            </div>
                        </div>
                    </div>
                </section>
			</main>			
<?php
include('../../footer.php');
?>