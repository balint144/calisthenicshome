<?php 
$_GET['menu'] = 'services';
$_GET['submenu'] = 'Alakformálás';
$_GET['title'] = 'Alakformálás';
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
									<h1 class="heading text-uppercase">Alakformálás</h1>
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
									<h2>Alakformálás</h2>
									<ul class="list-unstyled list">
                                        <li>
                                            Vázizmok fejlesztésén, erősítésén túl a mélyizmok aktiválását, az egyensúly és a stabilitás fejlesztését végezzük, olyan eszközökkel, amelyekkel a teljes testet átmozgatják.
                                        </li>
                                        <li>
                                            Különböző erősítő eszközök használatára, dinamikus gyakorlatokra, egyszerűen kivitelezhető és változatos feladatokra lehet számítani.
                                        </li>
									</ul>
									<p class="service-txt">
										<img style="width:400px;margin:auto" src="<?php echo $pageUrl; ?>images/Alakformalas.jpg" alt="Alakformalas.jpg" class="img-responsive">
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