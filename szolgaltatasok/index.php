<?php 
$_GET['menu'] = 'services';
$_GET['title'] = 'Szolgáltatások';
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
									<h1 class="heading text-uppercase">Szolgáltatások</h1>
								</div>
								<?php include('breadcrumb.php') ?>
							</div>
						</div>
					</div>
				</header>
                <section class="work-section padding-top-100 padding-bottom-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
								
							</div>
                            <?php include('leftMenu.php') ?>
						</div>
					</div>
				</section>
			</main>			
<?php
include('../footer.php');
?>