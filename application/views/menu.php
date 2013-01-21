<div class="menu">
  <ul class="menu-items">
	<?php
	for ($i=0; $i<count($menu); $i++) {
		if (isset($now_page)) $np = $now_page;
		else $np=false;
		if ($np == $i) {
		?><b><?}
		echo "<li>".$menu[$i]."</li>";
		if ($np == $i) {
		?></b><?}
		echo " ";
	}
	?>
  </ul>
</div>
