<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

    <link rel="stylesheet" href="<?= $this->assetUrl('css/bootstrap.min.css') ?>">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initialize&key=AIzaSyAzIhfO2Fr7beUdTpXogwie0L1YDMbP3hE" async defer></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="<?= $this->assetUrl('js/bootstrap.min.js') ?>"></script>
    <script src="<?= $this->assetUrl('js/script.js') ?>"></script>
    <style>
        #map {
            width: 600px;
            height: 200px;
        }
    </style>

</head>
<body>
    <section>
        <?= $this->section('debug_content') ?>
    </section>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

		<section>
			<?= $this->section('main_content') ?>

		</section>
        <section>
            <?= $this->section('map') ?>


        </section>
		<footer>
		</footer>
	</div>
</body>
</html>