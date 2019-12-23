<?php 
$_GET['menu'] = 'prices';
$_GET['title'] = 'Árak';
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
									<h1 class="heading text-uppercase">Árak</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li class="active"><a href="#">Árak</a></li>
								</ul>
							</div>
						</div>
					</div>
                </header>
                <div class="prices-block padding-top-60 container">
                    <div class="row item-content">
                        <div class="col-12">
                            <div class="item-cost">
                                <h3 class="item-title title-bar-primary7">Árlista</h3>
                                <ul>
                                    <li>Állapotfelmérés*<span>11 500 Ft/fő/alkalom</span></li>
                                    <li>Személyi edzés<span>9 500 Ft/alkalom</span></li>
                                    <li>Páros személyi edzés<span>5 000 Ft/fő/alkalom</span></li>
                                    <li>Kiscsoportos személyi edzés (3fő)<span>4 500 Ft/fő/alkalom</span></li>
                                    <li>Funkcionális Mozgásminta Szűrés (FMS)<span>8 000 Ft/fő/alkalom</span></li>
                                    <li>Konzultáció az egészséges életmód kialakításáról<span>10 000 Ft/fő/alkalom</span></li>
                                    <li>Meditáció<span>9 500 Ft/fő/alkalom</span></li>
                                    <li>Flosstréning<span>9 500 Ft/fő/alkalom</span></li>
                                    <li>Relaxáció<span>9 500 Ft/fő/alkalom</span></li>
                                    <li>Légzésterápia<span>9 500 Ft/fő/alkalom</span></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <h3 class="item-title title-bar-primary7">Bérletek</h3>
                                <ul>
                                    <li>6 alkalmas személyi edzés<span>7 500 Ft/alkalom</span></li>
                                    <li>12 alkalmas személyi edzés<span>6 500 Ft/alkalom</span></li>
                                    <li>6 alkalmas páros személyi edzés<span>4 000 Ft/fő/alkalom</span></li>
                                    <li>12 alkalmas páros személyi edzés<span>3 500 Ft/fő/alkalom</span></li>
                                    <li>6 alkalmas kiscsoportos személyi edzés (3fő)<span>3 500 Ft/fő/alkalom</span></li>
                                    <li>12 alkalmas kiscsoportos személyi edzés (3fő)<span>3 000 Ft/fő/alkalom</span></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <h3 class="item-title title-bar-primary7">Diák kedvezmény**</h3>
                                <ul>
                                    <li>Állapotfelmérés*<span>10 500 Ft/fő/alkalom</span></li>
                                    <li>Személyi edzés<span>8 500 Ft/alkalom</span></li>
                                    <li>Páros személyi edzés<span>4 500 Ft/fő/alkalom</span></li>
                                    <li>Kiscsoportos személyi edzés (3fő)<span>4 000 Ft/fő/alkalom</span></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <h3 class="item-title title-bar-primary7">Diák bérletek**</h3>
                                <ul>
                                    <li>6 alkalmas személyi edzés<span>6 500 Ft/alkalom</span></li>
                                    <li>12 alkalmas személyi edzés<span>5 500 Ft/alkalom</span></li>
                                    <li>6 alkalmas páros személyi edzés<span>3 500 Ft/fő/alkalom</span></li>
                                    <li>12 alkalmas páros személyi edzés<span>3 000 Ft/fő/alkalom</span></li>
                                    <li>6 alkalmas kiscsoportos személyi edzés (3fő)<span>3 000 Ft/fő/alkalom</span></li>
                                    <li>12 alkalmas kiscsoportos személyi edzés (3fő)<span>2 500 Ft/fő/alkalom</span></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <h3 class="item-title title-bar-primary7">Érvényesség</h3>
                                <ul>
                                    <li>6 alkalmas bérletek<span>2 hónapig</span></li>
                                    <li>12 alkalmas bérletek<span>4 hónapig</span></li>
                                </ul>
                            </div>
                            <div class="item-cost">
                                <p>
                                *Minden személyi edzés állapotfelméréssel indul, azaz az első alkalmad nálunk egy állapotfelmérés lesz.<br><br>
                                **Diák kedvezmény érvényes nappali igazolvány felmutatása esetén, 25 éves korig.<br><br>
                                2019.október 1-től érvényes. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
			</main>			
<?php
include('../footer.php');
?>