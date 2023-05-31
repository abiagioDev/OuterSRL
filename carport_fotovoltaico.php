<!doctype html>
<html class="no-js" lang="it">
    <head>
      <?php include("includes/analytics.php"); ?>
		<?php
			$currenturl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			$title = "Carport Fotovoltaico Roma | Carport Fotovoltaico da Giardino Roma";
			$description = "I Carport Fotovoltaici regolano la penetrazione dei raggi solari. Vantaggio, dei Carport Fotovoltaici, edilizia libera Detrazione fiscale 50%.";
			$bannerimage = "images/banner/pergole-a-lamelle-orientabili.jpg";
		?>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo"$title"; ?></title>
        <meta name="description" content="<?php echo"$description"; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- OPEN GRAPH BEGIN -->
        <meta property="og:site_name" "Outer Srl">
		    <meta property="og:type" content="website">
		    <meta property="og:url" content="<?php echo"$currenturl"; ?>">
		    <meta property="og:title" content="<?php echo"$title"; ?>">
		    <meta property="og:image" content="<?php echo"$currenturl"; ?><?php echo"$bannerimage"; ?>">
		    <meta property="og:description" content="<?php echo"$description"; ?>">
		    <meta property="og:locale" content="it_IT">
        <!-- OPEN GRAPH END -->
        <!-- TWITTER CARD BEGIN -->
        <meta name="twitter:card" content="summary" />
        <meta property="og:url" content="<?php echo"$currenturl"; ?>" />
        <meta property="og:title" content="<?php echo"$title"; ?>" />
        <meta property="og:description" content="<?php echo"$description"; ?>" />
        <!-- TWITTER CARD BEGIN -->

        <?php include("includes/link.php"); ?>
        <?php include("includes/schema-main.php"); ?>

    </head>
    
    <body>
	<?php include("includes/analytics_body.php"); ?>
	<?php include("includes/cookiebanner.php"); ?>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- main wrapper start -->
        <div class="main-wrapper">

			<?php include("includes/header-top.php"); ?>

            <!-- page header start -->
            <div class="page-header" style="background-image:url(images/banner/carport-pensilsole-maxi.jpg)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="page-heading text-center">
                                <h2 class="page-title">
                                    CARPORT FOTOVOLTAICO
                                </h2>
                                <div class="page-breadcrumb">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page header end -->

            <!-- page content start -->
            <section id="page-content" class="page-wrapper">
                <!-- about area start -->
                <div class="background-white about-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h1>Carport | Copertura e Sostenibilità</h1>
									<p>Copertura per auto da giardino</p>

                                </div>
                                <div class="about-info">
                                    <p>
                                        Design e sostenibilità in un unico prodotto.<br />
Il <b>carport fotovoltaico</b>, ti permette di proteggere la tua auto
producendo <b>energia green</b>.<br />
I pannelli fotovoltaici, posizionati sul tetto, permettono di sfruttare al
massimo l’<b>energia solare</b>.<br />
I pannelli modulari, con tecnologia inverter e batterie di accumulo
integrate a gestione telematica, accumulano energia elettrica per la tua
auto e la tua casa.<br /><br />
Detrazione fiscale 50%

									</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- about area end -->

				<!-- GALLERY start -->
				<div class="background-grey  about-area pt-100 pb-70">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="footer-widget mb-20">
										<h4 class="widget-title"></h4>
										<div class="widget-gallery">
											<div class="gallery-item">
												<a class="gallery-image" href="images/gallery/carport-pensilsole-maxi-1-840x600.jpg">
													<img src="images/gallery/carport-pensilsole-maxi-1-585x363.jpg" alt="gallery_img">
												</a>
											</div>
											<div class="gallery-item">
												<a class="gallery-image" href="images/gallery/carport-pensilsole-maxi-2-840x600.jpg">
													<img src="images/gallery/carport-pensilsole-maxi-2-585x363.jpg" alt="gallery_img">
												</a>
											</div>
											<div class="gallery-item">
												<a class="gallery-image" href="images/gallery/carport-pensilsole-maxi-3-840x600.jpg">
													<img src="images/gallery/carport-pensilsole-maxi-3-585x363.jpg" alt="gallery_img">
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
				<!-- GALLERY end -->

				<?php include("includes/footer.php"); ?>


    </body>
</html>