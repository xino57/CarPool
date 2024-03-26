<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />

	<!-- Liens -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/style.css" />
	<link rel="stylesheet" href="/css/variable_bootstrap.css" />
	<link rel="stylesheet" href="/css/offers_requests.css" />
	<title>CarPool</title>
</head>

<body>
	<div class="container">
		<!-- Header -->
		<?php
		require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/header.php";
		?>

		<!-- Content -->
		<div class="row page-description-block">
			<h2 class="text-white text-center d-flex align-items-center justify-content-center">Liste des offres de
				covoiturage</h2>
		</div>
		<div class="row offers-requests-elems justify-content-md-center">

			<div class="col-xl-2 col-md-6">
				<div class="offers-requests-common-elem d-flex align-items-center justify-content-center rounded">
					<img src="/icon/geo-alt.svg" alt="IconSearch" class="iconGeo" class="iconGeo" />
					<div class="char-space"></div>
					<span>Destination</span>
				</div>
			</div>

			<div class="col-xl-2 col-md-6">
				<div class="offers-requests-common-elem d-flex align-items-center justify-content-center rounded">
					<img src="/icon/calendar-check.svg" alt="IconCalendar" class="iconCalendar" />
					<div class="char-space"></div>
					<span>Date de trajet</span>
				</div>
			</div>

			<div class="col-xl-2 col-md-6">
				<div class="offers-requests-common-elem d-flex align-items-center justify-content-center rounded">
					<img src="/icon/person.svg" alt="PersonCircle" class="personcircle" />
					<div class="char-space"></div>
					<span>Nombre de places</span>
				</div>
			</div>

			<div class="col-xl-2 col-md-6">
				<div class="offers-requests-common-elem d-flex align-items-center justify-content-center rounded">
					<img src="/icon/point.svg" alt="IconPoint" class="point" />
					<div class="char-space"></div>
					<span>Départ</span>
				</div>
			</div>

			<div class="col-xl-2 col-md-6">
				<div class="offers-requests-action-elem d-flex align-items-center justify-content-center rounded">
					<span>Covoiturer!</span>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<?php
		require_once $_SERVER['DOCUMENT_ROOT'] . "/pages/components/footer.php";
		?>
	</div>

</body>

</html>