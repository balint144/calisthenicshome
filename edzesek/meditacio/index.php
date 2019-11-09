<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Meditáció';
$_GET['title'] = 'Meditáció';
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
									<h1 class="heading text-uppercase">Meditáció</h1>
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
									<h2>Meditáció</h2>
									<ul class="list-unstyled list">
                                        <li>Legfőbb célja a tapasztalati önismeret fejlesztése.</li>
                                        <li>Ha fellélegznél és erőre kapnál a mindennapok
                                            vágtájában.</li>
                                        <li>Ha szeretnéd megérteni, hogy mi történik veled és mi
                                            lesz a jó lépés a következő élethelyzetben.</li>
                                        <li>A meditáció a&nbsp; külvilágtól független, öntapasztalás
                                            általi önismeretet nyújt számunkra.</li>
                                        <li>Ha nem tapasztalod meg az elméd működését, akkor nem is
                                            vagy képes változtatni rajta, nem vagy képes irányítani azt, nem vagy
                                            képes teremteni vele vagy elengedni általa, stb. Márpedig az emberi
                                            életnek a gondolataink adnak irányt, velük kezdődik minden. A legtöbb
                                            ember esetében öntudatlanul, de a gondolatainkkal építjük föl
                                            személyiségünket, életünket, kapcsolatainkat, mindent, aminek csak tartjuk
                                            magunkat és a világot. Amíg nem vagyunk képesek az elme valamilyen szintű
                                            csöndjére, addig nehezen tudjuk megváltoztatni annak működését. Ez pedig
                                            nélkülözhetetlen a sikeres és boldog élethez. Az elme fejlesztése a
                                            legfontosabb fejlődés az életben.</li>
                                        <li>A meditáció csodálatos önismereti ajándéka, hogy segít a
                                            tudattalan tartalmak tudatosba emelésében, hozzájárulva ezáltal tudatunk
                                            teljeskörű megismeréséhez.</li>
                                        <li>A meditáció egy technika, mellyel befolyásolod&nbsp;
                                            saját elméd működését. Ehhez nem szükséges különféle ideológiákat
                                            elsajátítani, csak természetes módon teret adni magadban az esetlegesen
                                            újszerű tapasztalásnak.</li>
                                    </ul>
                                    <p class="service-txt">
                                        <img style="width:400px;margin:auto;" src="<?php echo $pageUrl; ?>images/Meditacio.jpg" alt="Meditacio.jpg" class="img-responsive">
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