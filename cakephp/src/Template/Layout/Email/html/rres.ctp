<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.blue {
			color: #5A89B4;
		}
	</style>
</head>
<body>
	<h1 class="blue"><em>Au fil de l'eau</em></h1>

	<h2>Bonjour,</h2>

	<br/>
	<p>Votre réservation a bien été prise en compte.</p>
	<p>Nous vous enverrons une confirmation dans les meilleurs délais.</p>

	<br/>
	<p><b>Détail réservation : </b></p>
	<p><b>Date : </b> <?= date('d / m / Y', strtotime($res['dateRRes'])) ?> </p>
	<p><b>Heure : </b> <?= date('H:i', strtotime($res['heureRRes'])) ?> </p>
	<p><b>Nombre de personnes : </b> <?= $res['nbPersRRes'] ?> </p>

	<br/>
	<p>Merci d'avoir réservé au restaurant <b class="blue"><em>Au fil de l'eau</em></b></p>
	<p>A bientôt,</p>

	<!-- <?= $this->Html->image('logo.png', ['height' => '104px', 'alt' => 'Logo', 'fullBase' => true]) ?> -->
	<img src="http://restaurant-aufildeleau.devtotem.com/img/logo.png" height="104px" alt="Logo">

	<br/>
    <p><b>Téléphone : </b> +33 6 40 68 42 81 </p>
    <p><b>Adresse : </b> Hôtel Gemme, 1 Rue du Bac, 31700 Blagnac </p>
    <p><b>Email : </b> client@restaurant-aufildeleau.fr </p>
	</body>
<footer>
</footer>
</html>