<div id="galeria">

	<?php
	for($i=1; file_exists("images/galeria/$i.jpg")==true ; $i++) {
		echo "				<a href='images/galeria/$i.jpg' rel='lightbox[roadtrip]'><img src='images/galeria/obrazek.php?src=$i.jpg' /></a>\n";
	}
	?>
</div>
