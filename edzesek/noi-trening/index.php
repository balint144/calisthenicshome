<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Női tréning';
$_GET['title'] = 'Női tréning';
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
									<h1 class="heading text-uppercase">Női tréning</h1>
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
									<h2>Női tréning</h2>
									<ul class="list-unstyled list">
                                        <li>Ha
                                            szeretnél gondoskodni fittségedről úgy, hogy közben megóvod az altesti
                                            szerveidet is.</li>
                                        <li>Már
                                            köztudott, hogy a helytelen testedzés következménye lehet a
                                            vizeletvesztés, az aranyér, a méh-, hólyagsüllyedés. Azonban a
                                            rendszeresen végzett megfelelő mozgással intenzív testi hatások várhatók,
                                            az alhasi szervek védelme mellett.</li>
                                        <li>A
                                            minőségi gimnasztika különleges elemei: arcfiatalító torna, alakformálás,
                                            anyagcsere gyorsítás, gerinc-, izületvédelem, stresszoldás, intimtorna.</li>
                                        <li>A
                                            medencealapi izmokat ahhoz, hogy tökéletesen el tudják látni a
                                            feladatukat, ugyanúgy kell edzeni ahogyan az összes többi izmunkat is. Az
                                            apró mozdulatokból álló intimtorna éppen ebben nyújt segítséget.</li>
                                        <li>Az
                                            intimtorna az összes nő számára határozottan kötelező!</li>
                                        <li>Fontos
                                            tisztába lenni azzal, hogy kóros tünetek tapasztalása nélkül is kiemelten
                                            szükségük van rá a 40 éves kor feletti, illetve a szülés előtt és után
                                            lévő nőknek. Szintén nélkülözhetetlen, ha 6 kg-nál nagyobb túlsúlyunk van,
                                            fizikai vagy ülőmunkát végzünk, vagy székrekedéssel, gyakori köhögéssel
                                            küzdünk, illetve azoknak akik rendszeresen futnak, konditerembe járnak;
                                            tehát egyszerűbben fogalmazva: az intimtorna az összes nő számára
                                            határozottan kötelező!&nbsp;</li>
                                    </ul>
                                    <p class="service-txt">
                                        <img style="width:400px;margin:auto;" src="<?php echo $pageUrl; ?>images/Noi_trening.jpg" alt="Noi_trening.jpg" class="img-responsive">
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