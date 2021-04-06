<!doctype html>
<html lang="de">

<head>
	<?php include "../inc/meta.inc"; ?>

	<base href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
	<title>FOSSGIS 2021 - Standort</title>

	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/base.css">
	<link rel="stylesheet" href="./css/expo.css">
	<link rel="stylesheet" href="./css/print.css" media="print">
</head>

<body id="standort">

	<?php include "../inc/header.inc"; ?>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
					    <h2>Ausstellerstand auf der FOSSGIS</h2>
					    <p>Die bewährte Firmen- und Projektausstellung, die einen direkten Kontakt zwischen Dienstleistern, Projekten und Teilnehmer:innen bietet, wird in diesem Jahr in einem besonderen Format stattfinden. Dazu werden wir in der Netzwerkwelt einen Expobereich einrichten.</p>
						<p>Im Expobereich können sich Firmen und Open Source Projekte präsentieren.</p>
						<p>Jeder Ausstellungsstand wird mit dem eignen Logo gekennzeichnet, bekommt einen eignen Videokonferenzraum sowie eine Infoseite, die per Mouseover angezeigt wird. In der Netzwerkwelt, die den OST Campus Rapperswil nachbilden wird, können sich die Teilnehmenden in einer virtuellen Karte/Landschaft bewegen und einander begegnen.  Zum Einstieg gibt man sich einen Namen und wählt einen Avatar aus. Nach der Landung im Eingangsbereich können Sie sich mit Hilfe der Tastatur bewegen. Sie können die Netzwerkwelt erkunden, sehen auch, ob weitere Teilnehmende unterwegs sind.
						</p>
						<p>Bei Begegnung von zwei Avataren öffnet sich ein Videochat, welcher sich mit einem kurzen Geräusch ankündigt. Räume können betreten werden, dort sind Informationen zu finden oder eine Videokonferenz findet statt. Das heißt Sie, als Aussteller, können die Teilnehmenden sehen und auch aktiv auf diese zugehen.</p>
						<p>Der Ausstellerstand ist im Sponsoringpaket der FOSSGIS-Konferenz enthalten und bis zum 10.04.2021 kostenfrei buchbar. </p>
					</div>
				</div>
			</div>

			<h4 class="highlight">Liste der ausstellenden Firmen und Projekte</h4>
			<div class="row">
				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/001_camptocamp_logo.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>Camptocamp</h5>
							<p class="small"><a href="https://www.camptocamp.com/de/geospatial_solutions">Camptocamp</a> gehört zu den führenden Dienstleistern im Bereich Open-Source-GIS und ist in vielen unterschiedlichen Open-Source-Communitys stark engagiert. Unsere Dienstleistungen stützen sich ... </p>
						</div>
						<a href="expo/camptocamp.php" 
							class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
							Details anschauen
						</a>
					</div>
				</div>
			
				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/002_WhereGroup-zentriert.jpg" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>WhereGroup GmbH</h5>
							<p class="small">Die WhereGroup gehört zu den führenden Anbietern von Geoinformationssystemen mit Open-Source-Software in Deutschland. Wir bieten alle Dienstleistungen rund um die räumliche Datenverarbeitung, Geoinformationssysteme ...</p>
							<a href="expo/wheregroup.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>
						</div>
					</div>
				</div>

			<!--	<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/201_terrestris.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>terrestris GmbH & Co. KG</h5>
							<p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
							<a href="expo/terrestris.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/401_mundialis.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>mundialis GmbH & Co. KG</h5>
							<p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
							<a href="expo/mundialis.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/407_sourcepole_block2.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>Sourcepole</h5>
							<p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
							<a href="expo/sourcepole.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/404_GBD.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>Geoinformatikbüro Dassau GmbH</h5>
							<p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
							<a href="expo/GBD.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/202_geOps.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>geops GmbH</h5>
							<p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
							<a href="expo/geOps.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>			
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-lg-6 mt-3 mb-3">
					<div class="expo-box">
						<div class="icon d-flex align-items-center justify-content-center">
							<img src="https://fossgis-konferenz.de/2021/img/s/408_YEY-Maps_Logo.png" title="" alt="">
						</div>
						<div class="feature-content">
							<h5>GeoCockpit UG</h5>
							<p class="small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores </p>
							<a href="expo/GeoCockpit.php" 
								class="btn btn-sm btn-primary active" role="button" aria-pressed="true">
								Details anschauen
							</a>				
						</div>
					</div>
				</div>-->

				
			</div>
		</div>
	</section>

	<?php include('../inc/footer.inc'); ?>
</body>
</html>