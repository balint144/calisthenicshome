<?php 
$_GET['menu'] = 'workouts';
$_GET['submenu'] = 'Trx';
$_GET['title'] = 'Trx';
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
									<h1 class="heading text-uppercase">Trx</h1>
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
									<h2>Trx</h2>
									<div class="col-md-7">
										<ul class="list-unstyled list">
											<li>Az
												összes fittségi szinten kiaknázza a felfüggesztéses tréning előnyét.&nbsp;</li>
											<li>A
												több száz gyakorlat segítségével erősebb, rugalmasabb és fittebb lehetsz,
												mint valaha, ráadásul a TRX legnagyobb előnyét is kiaknázhatod: szinte
												minden gyakorlatnál aktiválod a core izmokat - “all the core all the
												time“, amely nem csak a kockás has elérésében, hanem a mélyen fekvő
												törzsizmok hatékony erősítésében is kulcsszerepet játszik.</li>
											<li>Legyen
												szó bármilyen sportról, vagy fitnesz célról, a TRX segít, hogy jobb legyél
												abban, amit a legjobban szeretsz.</li>
											<li>A
												feladatokat mi adjuk a dőlésszöget Te választod, így tudod könnyíteni /
												nehezíteni az adott kihívás mértékét!&nbsp;</li>
										</ul>
									</div>				
									<div class="col-md-5">
										<img src="<?php echo $pageUrl; ?>images/Trx.jpg" alt="Trx.jpg" class="img-responsive">
									</div>
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