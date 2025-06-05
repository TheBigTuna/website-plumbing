<?php 
session_start(); 
include("resources/connection.php");
include("php/page-info.php");
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
			  <title><?= $_SESSION['current_page']; ?></title>
			  <?php $_SERVER['REQUEST_URI']; ?>
              <meta charset="UTF-8">
              <meta name="viewport" content="width=device-width, initial-scale=1">
              <meta name='description' content="<?= $_SESSION['Description']; ?>">            
              <!-- <meta name="author" content="<?= $_SESSION['ArticleAuthor']; ?>"> -->
              <!-- <link rel="icon" href="/images/halfLogo.png"> -->
              <link href="/style/bootstrap.css" rel="stylesheet">
              <link href="/style/font-awesome.min.css" rel="stylesheet">
              <link href="/style/main.css" rel="stylesheet">
              <script src="/script/jquery-3.4.1.js"></script>
              <script src="/script/bootstrap.js"></script>
			  	<!-- Google tag (gtag.js) -->
				<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-3RPTZMXYWQ"></script>
				<script>
				window.dataLayer = window.dataLayer || [];
				function gtag(){dataLayer.push(arguments);}
				gtag('js', new Date());

				gtag('config', 'G-3RPTZMXYWQ');
				</script> -->
        </head>


        
	<div class="navigation-wrap bg-light start-header start-style">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="navbar navbar-expand-md navbar-light">
						<!-- <a class="navbar-brand" href="/"><img src="/logo.svg"></a>	 -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<!-- Monbile Link -->
						<a href="tel:+15864745795" class="nav-number-link  d-block d-lg-none"><span style="font-size: 1.6rem;"><img style="width: 2.1rem;" src="/svg/phone-fill.svg"></i>(555)555-5555</span></a>
						<!-- Desktop Link -->
						<a href="/" class="nav-number-link d-none d-lg-block"><span style="font-size: 1.6rem;"><img style="width: 2.1rem;" src="/svg/phone-fill.svg"></i>(555)555-5555</span></a>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/">Home</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 d-block d-lg-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/emergency-services.php">Emergency Services</a>
										<a class="dropdown-item" href="/pages/services/emergency-services.php">Repairs</a>										<a class="dropdown-item" href="/pages/services/emergency-services.php">Repairs</a>
										<a class="dropdown-item" href="/pages/services/water-heater-installation.php">Water Heater Installation</a>
										<a class="dropdown-item" href="/pages/services/water-heater-repair.php">Water Heater Repair & Replacement</a>
										<a class="dropdown-item" href="/pages/services/drain-cleaning.php">Drain Cleaning</a>
									</div>
								</li>
								<li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4 d-none d-lg-block">
									<a class="nav-link dropdown-toggle">Services</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/services/emergency-services.php">Emergency Services</a>
										<a class="dropdown-item" href="/pages/services/plumbing-repairs.php">Repairs</a>
										<a class="dropdown-item" href="/pages/services/water-heater-installation.php">Water Heater Installation</a>
										<a class="dropdown-item" href="/pages/services/water-heater-repair.php">Water Heater Repair & Replacement</a>
										<a class="dropdown-item" href="/pages/services/drain-cleaning.php">Drain Cleaning</a>

									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 d-block d-lg-none">
									<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Service Area</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/service-area/service-area-detroit.php">Detroit</a>
									</div>
								</li>
								<li class="nav-item dropdown pl-4 pl-md-0 ml-0 ml-md-4 d-none d-lg-block">
									<a class="nav-link dropdown-toggle">Service Area</a>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="/pages/service-area/service-area-detroit.php">Detroit</a>
									</div>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/faq.php">FAQ</a>
								</li>
								<li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
									<a class="nav-link" href="/pages/contact-us.php">Contact Us</a>
								</li>
							</ul>
						</div>
					</nav>		
				</div>
			</div>
		</div>
	</div>
