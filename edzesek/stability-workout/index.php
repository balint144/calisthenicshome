<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Stability Workout';
$_GET['title'] = 'Stability Workout';
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
									<h1 class="heading text-uppercase">Stability Workout</h1>
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
									<h2>Stability Workout</h2>
									<ul class="list-unstyled list">
										<li>A Stability Workout egy új koncepció, amiben az
											alakformálás, erőfejlesztés ötvöződik olyan elemekkel, melyek erősítik a
											törzs izmait is.&nbsp;</li>
										<li>Speciális stabilitást fejlesztő eszközöket használunk,
											többek közt a Stability Boardot, egy instabil deszkát.&nbsp;</li>
										<li>Ajánljuk sportolóknak a jobb eredmény és sérülés mentesebb
											felkészülés érdekében, az egyensúlyt igénylő sportágakat űzőknek, például:
											wakeboard, snowboard, sí, surf, deszkás sportok, labdajátékok stb.&nbsp;</li>
										<li>Ajánljuk azoknak, akik egészségtudatosan szeretnének
											edzeni, és akik meg szeretnék előzni az oly sokakat érintő mozgásrendszeri
											problémákat.</li>
									</ul>
									<p class="service-txt">
										<img style="width:400px;margin:auto" src="<?php echo $pageUrl; ?>images/Reaxing_stability_funkcionalis.jpg" alt="Reaxing_stability_funkcionalis.jpg" class="img-responsive">
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