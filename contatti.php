<!doctype html>
<html class="no-js" lang="it">
    <head>
      <?php include("includes/analytics.php"); ?>
		<?php
			$currenturl = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
			$title = "Contatti | Outer Srl";
			$description = "Contatti: Outer Srl +39.06.5018899 +39.06.50513467 - commerciale@outersrl.it - Via di Vallerano 155 00128 Roma - aperto Lun-Ven h 9.00-19.00 Sab h 9.30-13-00";
			$bannerimage = "images/banner/contatti.jpg";
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
            <div class="page-header" style="background-image:url(images/banner/contatti.jpg)">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="page-heading text-center">
                                <h1 class="page-title">
                                    Contatti
                                </h1>
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
                <!-- contact area start -->
                <div class="contact-area pt-100 pb-40">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-6 mb-60">
                                <!-- contact form start -->
                                <div class="contact-form h-100">
                                    <h2 class="contact-heading">Per informazioni</h2>
                                    <form id="contact-form" action="ajax-mail.php" method="post">
                                        <div class="row">
                                            <div class="col-12 col-md-6 mb-30">
                                                <input type="text" name="name" placeholder="Nome e Cognome" required>
                                            </div>
                                            <div class="col-12 col-md-6 mb-30">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="col-12 col-md-12 mb-30">
                                                <input type="text" name="subject" placeholder="Telefono" required>
                                            </div>
                                            <div class="col-12 col-md-12 mb-30">
                                                <textarea name="message" cols="40" rows="4" placeholder="Messaggio" required></textarea>
                                            </div>
                                            <div class="col-12 col-md-12 mb-30">
                                                <input type="checkbox" name="privacy" value="privacy" required>PRIVACY POLICY AND COOKIE<br>
                                                <label for="privacy">Dichiaro di aver preso visione dell'Informativa ai sensi del Decreto Legislativo 196/2003 e del Regolamento (UE) 2016/679 del Parlamento Europeo e del Consiglio del 27 Aprile 2016 (GDPR). (*)<br>
                                                  <a href="privacy-policy.php">Leggi l'informativa*</a></label><br>
                                                  <input type="checkbox" name="privacy" value="privacy">ATTIVITÀ PROMOZIONALI<br>
                                                  <label for="privacy">Autorizzo altresì OUTER SRL ed i suoi partner
                                                    al trattamento dei miei dati personali per attività promozionali, pubblicitarie
                                                    e di marketing dei propri prodotti e servizi</label><br>
                                                </label>
                                            </div>
                                            <div class="col-12 col-md-12">
                                                <button type="submit">Invia un messaggio</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="form-message"></p>
                                </div>
                                <!-- contact form end -->
                            </div>
                            <div class="col-12 col-lg-6 mb-60">
                                <!-- contact info start -->
                                <div class="contact-info h-100">
                                    <h2 class="contact-heading">Outer Srl</h2>
                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="info-group mb-30">
                                                <h4 class="title">TELEFONO:</h4>
                                                <ul class="info">
                                                 <li>
												   <a href="tel:+39065018899" title="Telefono: +39 06 5018899" alt="Telefono: +39 06 5018899">+39 06 5018899</a>
												 </li>
												 <!--<li>
												   <a href="tel:+390650513467" title="Telefono: +39 06 50513467" alt="Telefono: +39 06 50513467">+39 06 50513467</a>
												 </li>-->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="info-group mb-30">
                                                <h4 class="title">EMAIL:</h4>
                                                <ul class="info">
                                                    <li>
                                                        commerciale@outersrl.it
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="info-group mb-30">
                                                <h4 class="title">APERTO TUTTI I GIORNI:</h4>
                                                <ul class="info">
                                                    <li>
                                                        Lun-Ven h 9.00-19.00
                                                    </li>
                                                    <li>
                                                        Sab h 9.30-13-00
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        
                                        <div class="col-12 col-sm-6">
                                          <div class="info-group">
                                                <h4 class="title">INDIRIZZO:</h4>
                                                <ul class="info">
                                                    <li>
                                                        Via di Vallerano 155
                                                        <br>
                                                        00128 Roma
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <!--
                                        <div class="col-12 col-sm-12">
                                            <div class="info-group">
                                                <h4 class="title">INDIRIZZO:</h4>
                                                <ul class="info">
                                                    <li>
                                                        Via di Vallerano 155
                                                        <br>
                                                        00128 Roma
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        -->

                                    </div>


                                </div>
                                <!-- contact info end -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- contact area end -->
                <!-- contact map start -->
                <!-- <div id="contact-map" class="contact-map-wrapper"></div> -->
                <!-- contact map end -->
            </section>
            <!-- page content end -->

            <?php include("includes/footer.php"); ?>
    </body>
</html>