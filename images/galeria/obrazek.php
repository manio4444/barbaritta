<?
include("class.Thumbnail.php");
$tn_image = new Thumbnail($_GET['src'], 0, 188, 0);
$tn_image->show();
?>

