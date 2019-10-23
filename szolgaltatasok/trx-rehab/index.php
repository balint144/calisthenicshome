<?php 
$_GET['menu'] = 'services';
$_GET['submenu'] = 'TRX Rehab';
$_GET['title'] = 'TRX Rehab';
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
									<h1 class="heading text-uppercase">TRX Rehab</h1>
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
									<h2>TRX Rehab</h2>
									<ul class="list-unstyled list">
                                        <li>Mozgásszervi
                                            problémákat, sérüléseket TRX gyakorlatokkal is hatékonyan lehet
                                            kezelni.&nbsp;</li>
                                        <li>Az
                                            aktuális fizikai állapottól függően visszavezetünk az aktív sporttig.</li>
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