<?php 
$_GET['menu'] = 'services';
$_GET['title'] = 'Kiscsoportos személyi edzés';
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
									<h1 class="heading text-uppercase">Kiscsoportos edzés</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li><a href="<?php echo $pageUrl; ?>szolgaltatasok">Szolgáltatások</a></li>
                                    <li class="active"><a href="#">Kiscsoportos személyi edzés</a></li>
								</ul>
							</div>
						</div>
					</div>
				</header>
                <section class="container padding-top-60">
                    <!-- page heading small -->
                    <header class="page-heading small">
                        <div class="heading">
                            <h2 class="heading5 small-heading lime text-uppercase font-medium">Kiscsoportos személyi edzés</h2>
                        </div>
                    </header>
				</section>
				<section class="padding-bottom-100 container single-service">
                    <div class="row">
                        <div class="col-md-5">
                            <img class="img-responsive" src="<?php echo $pageUrl; ?>images/kiscsoportos_edze_r.jpg" alt="Kiscsoportos személyi edzés">
                        </div>
                        <div class="col-md-7">
                            <div class="team-lightbox">
                                <p>
									A kiscsoportos, azaz 3 fős edzésen is figyelembe vesszük egyéni kompetenciáidat és célodat miközben megoszthatod a mozgás nyújtotta örömöt akár a barátaiddal, családtagjaiddal, akár új barátságokat köthetsz. Javulni fog a mozgásod, kalóriát égetsz el, változik a test kompozíciód és nem utolsó sorban egy nagyszerű csapat tagja lehetsz.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
			</main>			
<?php
include('../../footer.php');
?>