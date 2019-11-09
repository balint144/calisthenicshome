<?php 
$_GET['menu'] = 'coaches';
$_GET['title'] = 'Edzők';
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
									<h1 class="heading text-uppercase">Edzők</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li class="active"><a href="#">Edzők</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <?php include('edzokBody.php') ?>
			</main>			
<?php
include('../footer.php');
?>