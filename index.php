<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Suknie ślubne Mińsk Mazowiecki - Barbaritta</title>
		<meta name="keywords" content="suknie ślubne mińsk mazowiecki, suknie ślubne, mińsk mazowiecki, targi ślubne mińsk mazowiecki, targi ślubne">
		<meta name="Description" content="Najlepszy salon suknii ślubnych w Mińsku Mazowiecki. Fachowa obsługa, Suknie szyte na miarę, Markowe suknie ślubne, Szeroki wybór dodatków, Atrakcyjne ceny - Zapraszamy do naszego salonu!">
		<link rel="stylesheet" href="reset.css" />
		<link rel="stylesheet" href="css/lightbox.css" />
		<link rel="stylesheet" href="style.css" />
	</head>

	<body>

		<?php
		if ($_GET['id']) {
			$include_path = "html/" . $_GET['id'] . ".php";
			if (file_exists($include_path)) {
				define('SUBPAGE_TRUE', true);
			} else {
				define('SUBPAGE_404', true);
				header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
			}
		}


		if (SUBPAGE_TRUE===true) echo '<main id="page_container" class="subpage">';
		else echo '<div id="page_container">';
		?>


		<nav id="menu">
			<a class="menu_el" href="?">GŁÓWNA</a>
			<a class="menu_el" href="?id=kolekcje">KOLEKCJE</a>
			<a class="menu_el" href="?id=wazne_informacje">WAŻNE INFORMACJE</a>
			<a class="menu_el" href="?id=outlet">OUTLET</a>
			<a class="menu_el" href="?id=polecamy">POLECAMY</a>
			<a class="menu_el" href="?id=galeria">GALERIA</a>
			<a class="menu_el" href="?id=kontakt">KONTAKT</a>
		</nav>

		<section id="page_content">

			<?php
			if (SUBPAGE_TRUE===true) {
				include($include_path);
			} elseif (SUBPAGE_404===true) {
				include("html/404.php");
			} else {
				include("html/strona_glowna.php");
			}

			?>

		</section> <!--podstrony-->

	</main>



	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/lightbox.js"></script>
	</body>

</html>
