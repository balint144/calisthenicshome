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
			<!-- youga slider -->
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
												<p>Szeretnénk segíteni, hogy mihamarabb elérhesd egyéni céljaid, mi ebben fogunk Téged támogatni.</p>
												<a href="#" class="btn btn-f-default">Tudj meg többet</a>
												<a href="#" class="btn btn-f-info">Kapcsolat felvétel</a>
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
                <section class="about-app padding-top-90 padding-bottom-90">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">RÓLUNK</h2>
                        </div>
                    </header>
                    <!-- box -->
                    <div class="box">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                    </div>
                    <img src="<?php echo $pageUrl; ?>images/DSC01695.png" alt="image description" class="img-responsive fadeInUp animated" data-animate="fadeInUp" data-delay="200">
                </section>
                <section class="about-section padding-top-60 padding-bottom-60 bg-grey">
                    <!-- page heading -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">SZOLGÁLTATÁSAINK</h2>
                        </div>
                    </header>
                    <div class="container">
						<div class="row padding-bottom-30">
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Alakformálás</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Baba-mama torna</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Baba-mama-papa torna</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Calisthenics/Streetworkout</span>
								</a>
							</div>
						</div>
						<div class="row padding-bottom-30">
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Cross training</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Fascia / SMR training</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>Flossing</span>
								</a>
							</div>
							<div class="col-xs-12 col-sm-3">
				                <!-- client box -->
								<a href="#" class="client-box large">
									<span>FMS</span>
								</a>
                            </div>
                        </div>
						<div class="row text-center">
							<a class="btn btn-dark view-more" href="<?php echo $pageUrl; ?>szolgaltatasok">Tovább</a>
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
                <section class="container padding-bottom-90 padding-top-60">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Edzők</h2>
                        </div>
                    </header>
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<!-- team box -->
							<a href="#" class="team-box style2 right">
								<div class="img-box">
									<img src="<?php echo $pageUrl; ?>images/DSC07668_s.jpg" alt="Nóri" class="img-responsive">
                                    <span class="over"></span>
                                    <span class="plus lightbox">+</span>
                                </div>
								<div class="block">
									<h3 class="heading">Nóri</h3>
									<p>Ha belegondolsz az egészség egy döntés, melyet minden napunk minden percében megteszünk azért, hogy testünket, lelkünket és szellemünket életadó táplálékkal tápláljuk.</p>
								</div>
                            </a>
						</div>
						<div class="col-xs-12 col-sm-6">
							<!-- team box -->
							<a href="#" class="team-box style2">
								<div class="img-box">
									<img src="<?php echo $pageUrl; ?>images/Street_workout_Calistheics.jpg" alt="Zsolti" class="img-responsive">
                                    <span class="over"></span>
                                    <span class="plus lightbox">+</span>
                                </div>
								<div class="block">
									<h3 class="heading">Zsolti</h3>
									<p>A Calisthenics avagy a saját testsúlyos edzés elhivatott képviselője vagyok. Edzéseim alapját a felfüggesztett eszközök (Trx, G-Flex) illetve Street Workout elemek alkotják.</p>
								</div>
                            </a>
						</div>
					</div>
                </section>
                <!-- test section -->
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
			</main>
<?php
include('footer.php');
?>