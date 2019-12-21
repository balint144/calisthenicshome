<?php 
$_GET['menu'] = 'home';
$_GET['title'] = 'Főoldal';
include('config.php');
include('head.php');
?>
            <div id="pre-loader">
                <div class="loader-holder">
                    <div class="frame">
                        
                    </div>
                </div>
            </div>
			<!-- header -->
			<section class="youga-slider beans-slider" data-rotate="true">
				<div class="beans-mask">
					<div class="beans-slideset">
						<!-- beans-slide -->
						<div class="beans-slide">
							<div class="stretch">
								<img src="<?php echo $pageUrl; ?>images/DSC04447-1.jpg" alt="image description">
							</div>
							<div class="caption">
								<div class="caption-holder">
									<div class="container">
										<div class="row">
											<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
												<h1>CALISTHENICS HOME</h1>
												<p>Egy modern, minőségi személyi edző stúdió Budapest II. kerületében, ahol privát órákon, páros és kiscsoportos edzéseken várunk.</p>
												<a href="<?php echo $pageUrl; ?>edzesek" class="btn btn-f-default">Tudj meg többet</a>
												<a href="<?php echo $pageUrl; ?>kapcsolat" class="btn btn-f-info">Kapcsolat felvétel</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="beans-pagination"></div>
			</section>
			<!-- contain main informative part of the site -->
			<main id="main">
				<!-- Rólunk start -->
                <section class="about-app padding-top-90 padding-bottom-90 bg-grey">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">RÓLUNK</h2>
                        </div>
                    </header>
                    <!-- box -->
                    <div class="box">
                        <p>	A Calisthenics Home Nádas Nóri és Szilágyi Zsolt személyi edző stúdiója Budapest csodálatos II. kerületében, Szemlőhegyen.<br>
							Várunk privát órákon, páros személyi edzéseken és kiscsoportos edzéseken ahol a legjobb minőségre törekszünk szakmailag, szolgáltatásaink során, környezeteti feltételek és sportszerek tekintetében is.<br> 
							Mindkettőnknek más az irányvonala, érdeklődése, így nagyon jól kiegészítjük egymást és a sok éves tapasztalatunknak, folyamatos továbbképzéseinknek köszönhetően nagyon sok területen tudunk segíteni a mozgás, életmód, fitness, egészségfejlesztés területén.<br>
							Szeretettel várunk!
						</p>
                    </div>
                    <img src="<?php echo $pageUrl; ?>images/DSC01695.png" alt="image description" class="img-responsive fadeInUp animated" data-animate="fadeInUp" data-delay="200">
                </section>
				<!-- Rólunk end -->
				<!-- Szolgáltatások start -->
                <section class="about-app padding-top-90 padding-bottom-90">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Szolgáltatások</h2>
                        </div>
                    </header>
                    <!-- box -->
                    <div class="container home-services">
						<?php include('szolgaltatasok/szolgaltatasokBody.php') ?>
                    </div>
                </section>
				<!-- Szolgáltatások end -->
				<!-- Edzések start -->
                <section class="about-section padding-top-60 padding-bottom-60 bg-grey">
                    <!-- page heading -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Edzések</h2>
                        </div>
                    </header>
                    <div class="container">
						<div class="row padding-bottom-30">
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/alakformalas" class="client-box large">
									<span>Alakformálás</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/baba-mama-torna" class="client-box large">
									<span>Baba-mama torna</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/baba-mama-papa-torna" class="client-box large">
									<span>Baba-mama-papa torna</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/calisthenics-streetworkout" class="client-box large">
									<span>Calisthenics/Streetworkout</span>
								</a>
							</div>
						</div>
						<div class="row padding-bottom-30">
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/cross-training" class="client-box large">
									<span>Cross training</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/fascia-smr-training" class="client-box large">
									<span>Fascia / SMR training</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/flossing" class="client-box large">
									<span>Flossing</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="<?php echo $pageUrl; ?>edzesek/fms" class="client-box large">
									<span>FMS</span>
								</a>
                            </div>
                        </div>
						<div class="row text-center">
							<a class="btn btn-dark view-more" href="<?php echo $pageUrl; ?>edzesek">Tovább</a>
						</div>
                        <!-- <div class="row padding-bottom-30">
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Funkcionális edzés</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Gerinctorna</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Kismama torna</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Légzésterápia</span>
								</a>
                            </div>
                        </div>
                        <div class="row padding-bottom-30">
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Meditáció</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Női tréning</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Páros edzés</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Polar pulzuskontrollált edzés</span>
								</a>
                            </div>
                        </div>
                        <div class="row padding-bottom-30">
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Reaxing training</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Relaxáció</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Spartan Fighter</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Stability Workout</span>
								</a>
                            </div>
                        </div>
                        <div class="row padding-bottom-30">
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>Stretching</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>TRX</span>
								</a>
                            </div>
                            <div class="col-xs-12 col-sm-3">
								<a href="#" class="client-box large">
									<span>TRX Rehab</span>
								</a>
							</div>
						</div> -->
					</div>
                </section>
				<!-- Edzések end -->
				<!-- Edzők start -->
                <?php include('edzok/edzokBody.php') ?>
				<!-- Edzők end -->
                <!-- test section start -->
				<div class="testimon-section alt-version bg-grey">
					<div class="container">
                        <!-- page heading -->
                        <header class="page-heading small">
                            <div class="heading">
                                <h2 class="heading5 small-heading lime text-uppercase font-medium">Rólunk mondták</h2>
                            </div>
                        </header>
						<div class="row">
							<div class="col-xs-12">
								<!-- beans-slider -->
								<div class="beans-slider" data-rotate="true">
									<div class="beans-mask">
										<div class="beans-slideset">
                                            <!-- beans-slide -->
                                            <div class="beans-slide">
												<blockquote>
													<q>Nóri és Zsolti emberileg nagyon kedves és figyelmes akár egyéni, csoportos vagy páros edzésről legyen szó. Bármilyen problémával, kérdéssel fordultam hozzájuk szakmailag mindig tudtak segíteni. Sokat tanultam tőlük saját magamról is. A jó hangulat, motiváció, sikerélmény mindig része az edzéseknek.</q>
													<i class="fa fa-comments-o"></i>
													<cite>
														<span class="name">K.Melinda</span>
														<span class="comp-name"><a href="#">Vendég</a></span>
													</cite>
												</blockquote>
											</div>
											<div class="beans-slide">
												<blockquote>
													<q>Náluk jó kezekben vagy, figyelmük sosem lankad (bár néha szeretnél elbújni:-))), de mindez a fejlődésedet szolgálja! Kihívásokkal teli, változatos és vidám edzések. Ha fejlődni szeretnél gyere Nórihoz és Zsoltihoz!</q>
													<i class="fa fa-comments-o"></i>
													<cite>
														<span class="name">Eszti</span>
														<span class="comp-name">Vendég</span>
													</cite>
												</blockquote>
											</div>
											<!-- beans-slide -->
											<div class="beans-slide">
												<blockquote>
													<q>Nóri és Zsolt együtt, a páros edzéseken, és külön-külön is bombasztikus edzők! Náluk az órák mindig energikusak, jó hangulatúak, és mindig kihajtják az emberből a maximumot. :-) Magasan képzettek és folyamatosan képzik magukat, hogy a legmodernebb, leghatékonyabb módszerekkel és eszközökkel segítsenek elérni az egyéni célokat.</q>
													<i class="fa fa-comments-o"></i>
													<cite>
														<span class="name">Tomi</span>
														<span class="comp-name"><a href="#">Vendég</a></span>
													</cite>
												</blockquote>
											</div>
											<!-- beans-slide -->
											<div class="beans-slide">
												<blockquote>
													<q>
                                                        Nóri és Zsolti páros edzése a város legjobb titkos randiprogramja.<br>
                                                        Nekünk szimplán megváltoztatták az életünket.<br>
                                                        Az edzés ahol a hasizomra duplán dolgozunk.<br>
                                                        A jutalom is burpee :D
                                                    </q>
													<i class="fa fa-comments-o"></i>
													<cite>
														<span class="name">Eszti&Peti</span>
														<span class="comp-name"><a href="#">Vendég</a></span>
													</cite>
												</blockquote>
                                            </div>
                                            <div class="beans-slide">
												<blockquote>
													<q>Nóri és Zsolt profi edzők, akik a szakmai felkészültség mellett szívüket és humorukat is mindig hozzáadják az órákhoz így teremtve remek hangulatot. Szívből ajánlom mindkettőjüket!</q>
													<i class="fa fa-comments-o"></i>
													<cite>
														<span class="name">G.Rita</span>
														<span class="comp-name"><a href="#">Vendég</a></span>
													</cite>
												</blockquote>
                                            </div>
										</div>
									</div>
									<div class="beans-pagination">
										<!-- pagination generated here -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- test section end -->
			</main>
<?php
include('footer.php');
?>