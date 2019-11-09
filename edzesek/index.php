<?php 
$_GET['menu'] = 'services';
$_GET['title'] = 'Edzések';
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
									<h1 class="heading text-uppercase">Edzések</h1>
								</div>
								<?php include('breadcrumb.php') ?>
							</div>
						</div>
					</div>
				</header>
                <section class="work-section service-txt padding-top-100 padding-bottom-100">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-8 col-md-9 col-sm-push-4 col-md-push-3">
								<p>Mindannyian valamilyen egyéni céllal kezdünk el mozogni, életmódot váltani, ami sokszor nem is olyan egyszerű. Szeretnénk segíteni, hogy mihamarabb elérhesd egyéni céljaid, mi ebben fogunk Téged támogatni.</p>
								<p>Személyi edzővel edzeni biztonságosabb és szórakoztatóbb, mint egyedül; preventívebb és sokkal hatékonyabb fejlődést eredményez, mintha csoportos edzéseken vennél részt.</p>
								<p>Mi biztosítjuk számodra a külső motivációt, a tanácsokat, a bátorítást és biztatást, melyek hatalmas lendületet adnak a rendszeres sportoláskor. Nemcsak segítik az edzéseidet, de hozzájárulnak, hogy minél hamarabb elérd a vágyott céljaidat, ami lehet akár állóképesség növelés, izomépítés, fogyókúra, életmódváltás, rehabilitáció vagy hogy minél hamarabb visszanyerd alakod a szülés után!</p>
								<p>Minden embernek más edzésprogram a legmegfelelőbb. A kívánt cél és az adott fizikai állapot figyelembevételével állítjuk össze a személyre szabott edzéstervet, melyet az idő haladtával a fejlettségi szintedhez igazítunk. Mi az edzéseiden túl az egész életedre is hatással lehetünk: tanácsokat kaphatsz a tudatos, helyes életmód kialakításáról, az egészséges táplálkozásról, javaslatokat kaphatsz, hogy mit kellene változtatnod az életviteleddel kapcsolatban.</p>
								<div style="margin-top:40px;" class="container-fluid">
									<div class="row">
										<div class="col-md-6">
											<img  src="<?php echo $pageUrl; ?>images/DSC01291.jpg" alt="DSC01291.jpg" class="img-responsive">
										</div>
										<div class="col-md-6">
											<img  src="<?php echo $pageUrl; ?>images/DSC01680.jpg" alt="DSC01680.jpg" class="img-responsive">
										</div>
									</div>
								</div>
								
							</div>
                            <?php include('leftMenu.php') ?>
						</div>
					</div>
				</section>
			</main>			
<?php
include('../footer.php');
?>