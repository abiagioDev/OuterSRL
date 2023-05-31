<!doctype html>
<html class="no-js" lang="it">
    <head>
        <?php include("includes/analytics.php"); ?>
        <?php include("includes/event.php"); ?>
		    <?php
			    $currenturl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			    $title = "Dati inviati con successo. Grazie";
			    $description = "Dati inviati con successo. Grazie";
			    $bannerimage = "images/slider/slide1.jpg";
		    ?>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo"$title"; ?></title>
        <meta name="description" content="<?php echo"$description"; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="refresh" content="5;url=http://www.outersrl.it/">

        <!-- OPEN GRAPH BEGIN -->
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



            <!-- page content start -->
            <section id="page-content" class="page-wrapper">

                        <!-- about area start -->
                        <div class="about-area pt-100 pb-70">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="section-title text-center">
                                            <h1>E-mail inviata con successo</h1>
                                            <p>Sarai redirezionato alla home page in 5 secondi.</p>
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
