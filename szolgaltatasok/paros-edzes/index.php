<?php 
$_GET['menu'] = 'services';
$_GET['submenu'] = 'Páros edzés';
$_GET['title'] = 'Páros edzés';
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
									<h1 class="heading text-uppercase">Páros edzés</h1>
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
									<h2>Páros edzés</h2>
									<ul class="list-unstyled list">
                                        <li>Egy igazi élmény edzés pároknak, családtagoknak,
                                            barátoknak. Kifejezetten páros gyakorlatokra számíthattok, egyéni
                                            edzettségi szintetekhez igazítva.&nbsp;</li>
                                        <li>Közös a bemelegítés, közösek az erősítő, állóképesség
                                            fejlesztő gyakorlatok, közösek az acro jóga és nyújtás pozíciók. A
                                            partnerednek Te adod az ellenállást, a támogatást, a könnyítést vagy épp a
                                            nehezítés mértékét. Igazi csapatmunka folyik itt.</li>
                                        <li>Lehet ez egy sportos randi program is, csábítsd el Te is
                                            a párod.</li>
                                        <li>Azonban a közös gyakorlatokat nemcsak az összeszokott
                                            pároknak ajánljuk, hanem egy új, alakuló párkapcsolat esetén is. Ez a
                                            program a testeteket és a köztetek lévő érzelmi köteléket is
                                            megerősíti. Plusz a sportos program az egyik
                                            leghasznosabb és legegészségesebb közös időtöltés, amit csak kitalálhattok.</li>
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