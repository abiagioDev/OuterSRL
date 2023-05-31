<!doctype html>
<html class="no-js" lang="it">
    <head>
      <?php include("includes/analytics.php"); ?>

		<?php
			$currenturl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			$title = "Dual Block<sup>®</sup> | Total View | Grate di Design | Persiane di Design";
			$description = "Dual Block<sup>®</sup>, grate a scomparsa, e TOTALVIEW, vetrate a scomparsa sono i nostri marchi, che realizziamo e distribuiamo per l’Italia,  prodotti brevettati e certificati.";
			$bannerimage = "images/bg/1.jpg";
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
            <div class="page-header" style="background-image:url(images/bg/1.jpg)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="page-heading text-center">
                                <h2 class="page-title">
                                    Chi siamo
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
                <div class="about-area pt-100 pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <h1>LA STORIA</h1>
                                    <p>“Dove tutto ebbe inizio… “</p>
                                </div>
                                <div class="about-info">
                                    <p>Siamo  presenti sul mercato dal 1993.
Inizialmente ci dedichiamo a lavori di pura sicurezza  per le attività commerciali, installando oltre 3600 serrature di sicurezza Total Block. Nel tempo, grazie alla collaborazione con architetti e personale altamente qualificato, iniziamo a sviluppare progetti sempre più complessi, il design si fa iconico, le linee eleganti e raffinate, i sistemi di sicurezza sempre piu all’avanguardia realizzando  progetti dalle elevate performance in perfetto stile Made in Italy.
</p>
                                    <div class="row mt-30">
                                        <div class="col-12 col-md-6 mb-30">
                                            <img class="img-fluid" src="images/chi-siamo/chi-siamo1.jpg" alt="about_img">
                                        </div>
                                        <div class="col-12 col-md-6 mb-30">
                                            <img class="img-fluid" src="images/chi-siamo/chi-siamo2.jpg" alt="about_img">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

						<div class="row">
                            <div class="col-12">
                                <div class="section-title text-center">
                                    <p>“Performance, Sicurezza e Design…”</p>
                                </div>
                                <div class="about-info">
                                    <p>Negli anni l’azienda segna una costante crescita e raggiunge alti  livelli di professionalità con la creazione di prodotti sempre più esclusivi, affidandosi al suo team consolidato e specializzato, per garantire affidabilità ai suoi clienti piu esigenti.</p>

<p>Da qui la decisione di creare i nostri marchi,  che realizziamo e distribuiamo per l’Italia: <strong>Dual Block<sup>®</sup>, grate a scomparsa</strong>,  e <strong>Total View<sup>®</sup>, vetrate a scomparsa</strong>;  prodotti brevettati e certificati.</p>

 <p>I tratti distintivi di Outer sono proprio l’attenzione  ai dettagli ed  il profondo know-how dei prodotti e del Team, assicurando così la piena soddisfazione di ogni singolo cliente.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- about area end -->
            </section>
            <!-- page content end -->

			<?php include("includes/footer.php"); ?>

    </body>
</html>
