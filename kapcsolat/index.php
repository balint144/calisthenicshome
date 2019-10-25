<?php 
$_GET['menu'] = 'contact';
$_GET['title'] = 'Kapcsolat';
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
									<h1 class="heading text-uppercase">Kapcsolat</h1>
								</div>
								<ul class="breadcrumbs list-inline">
									<li><a href="<?php echo $pageUrl; ?>">Főoldal</a></li>
									<li class="active"><a href="#">Kapcsolat</a></li>
								</ul>
							</div>
						</div>
					</div>
                </header>
                <div class="contact-block container">
                    <!-- contact map -->
					<div class="row contact-map">
						<div class="col-xs-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2694.106601086108!2d19.024220415627738!3d47.526787579179526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741d95279d95927%3A0xbb7b2bc84fc6f8a6!2sBudapest%2C%20Pusztaszeri%20%C3%BAt%2046%2C%201025!5e0!3m2!1shu!2shu!4v1572043551996!5m2!1shu!2shu" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                        <div class="col-xs-12">
                            <h3>Parkolás</h3>
                            <p>A környező utcákban a parkolás ingyenes.</p>
                            <h3>Tömegközlekedés</h3>
                            <p>91/291-es autóbusz</p>
                            <p>
                                291-es jelzésű autóbusz a Nyugati pályaudvar és Zugliget, Libegő között  közlekedik.<br>
                                91-es jelzésű autóbusz a Széll Kálmán tér és a Nyugati pályaudvar között közlekedik.
                            </p>
						</div>
					</div>
                    <!-- contact message -->
					<div class="row contact-message">
						<div class="col-sm-6 col-xs-12">
							<h2>Üzenj nekünk</h2>
							<form action="#" class="contact-form2">
								<fieldset>
									<input class="form-control" type="text" placeholder="Név*">
									<input class="form-control" type="email" placeholder="Email *">
									<textarea class="form-control" cols="30" rows="10" placeholder="Üzenet*"></textarea>
									<input class="btn btn-f-info" type="submit" value="Küldés">
								</fieldset>
							</form>
                        </div>
                        <div class="visible-xs" style="height:40px;width:100%;float:left;"></div>
						<div class="col-sm-6 col-xs-12">
							<h2>Hogyan érsz el minket</h2>
							<div class="contact-address">
								<div class="alignleft">
									<img class="img-responsive visible-lg" alt="_MG_3594.JPG" src="<?php echo $pageUrl; ?>images/_MG_3594.JPG">
								</div>
								<div class="contact-info">
									<h3><i class="fa fa-road"></i>Cím</h3>
									<address>Budapest, Pusztaszeri út 46, 1025</address>
									<h3><i class="fa fa-phone"></i>Telefonszámok</h3>
									<div class="tel-box">
										<span class="tel">Nádas Nóra Piroska<a href="tel:+36305602411" class="tel">+36305602411</a></span>
										<span class="tel">Szilágyi Zsolt<a href="tel:0201008431112" class="tel">+36306503224</a></span>
									</div>
                                    <h3><i class="fa fa-envelope"></i>Email</h3>
                                    <a href="mailto:nadas.nora.piroska@gmail.com">nadas.nora.piroska@gmail.com</a><br>
                                    <a href="mailto:sz.zsolt.avf@gmail.com">sz.zsolt.avf@gmail.com</a><br>
                                    <a href="mailto:calisthenicscouplehu@gmail.com">calisthenicscouplehu@gmail.com</a>
                                    <h3 style="margin-top:10px;"><i class="fa fa-facebook"></i>Facebook</h3>
                                    <a target="_blank" href="https://www.facebook.com/fit.life.nori"><span class="hidden-lg">https://www.facebook.com/</span>fit.life.nori</a><br>
                                    <a target="_blank" href="https://www.facebook.com/zsolt.szilagyi.399"><span class="hidden-lg">https://www.facebook.com/</span>zsolt.szilagyi.399</a><br>
                                    <a target="_blank" href="https://www.facebook.com/calisthenics.couple.hu"><span class="hidden-lg">https://www.facebook.com/</span>calisthenics.couple.hu</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>			
<?php
include('../footer.php');
?>