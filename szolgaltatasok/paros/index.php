<?php 
$_GET['menu'] = 'services';
$_GET['title'] = 'Páros edzés';
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
									<h1 class="heading text-uppercase">Páros edzés</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li><a href="<?php echo $pageUrl; ?>szolgaltatasok">Szolgáltatások</a></li>
                                    <li class="active"><a href="#">Páros személyi edzés</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <section class="container padding-bottom-90 padding-top-60">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Páros személyi edzés</h2>
                        </div>
                    </header>
                </section>
			</main>			
<?php
include('../../footer.php');
?>