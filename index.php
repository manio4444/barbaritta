<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8" />
<title>Suknie ślubne Mińsk Mazowiecki - Barbaritta</title>
<meta name="keywords" content="suknie ślubne mińsk mazowiecki, suknie ślubne, mińsk mazowiecki, targi ślubne mińsk mazowiecki, targi ślubne">
<meta name="Description" content="Najlepszy salon suknii ślubnych w Mińsku Mazowiecki. Fachowa obsługa, Suknie szyte na miarę, Markowe suknie ślubne, Szeroki wybór dodatków, Atrakcyjne ceny - Zapraszamy do naszego salonu!">
<link rel="stylesheet" href="reset.css" />
<link rel="stylesheet" href="css/lightbox.css" />
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>
<link rel="stylesheet" href="style.css" />


</head>

<body>

<?php
if ($_GET['id']) echo '	<div id="calosc">';
else echo '	<div id="calosc_glowna">';


?>


		<div id="menu">
			<a href="?">GŁÓWNA</a>
			<a href="?id=kolekcje">KOLEKCJE</a>
			<a href="?id=wazne_informacje">WAŻNE INFORMACJE</a>
			<a href="?id=outlet">OUTLET</a>
			<a href="?id=polecamy">POLECAMY</a>
			<a href="?id=galeria">GALERIA</a>
			<a href="?id=kontakt">KONTAKT</a>

		</div>

		<div id="podstrony">

<?php
if ($_GET['id']) {
	include("html/" . $_GET['id'] . ".html");
} else {
	include("html/strona_glowna.html");
	//include("html/barbaritta_2moduly_pion_v3.html");
}

?>

		</div> <!--podstrony-->

	</div>



</body>

</html>
