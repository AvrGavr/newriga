<?
foreach ($article as $header => $art) {
	$a = isset($article_id);
	?>
	<div class="big-news-item">
		<div class="big-news-item-header"><?echo $header?></div>
		<?if (isset($itsnews)) {?><div class="big-news-item-path"><a href="">Новости</a></div><?}?>
		<?if (isset($article_date)) {?><div class="big-news-item-date"><?echo $article_date[$header]?></div><?}?>
		<div class="big-news-item-text">
			<?
			if (count($article) != 1) {
			echo substr($art, 0, 150);
			$i = 200;
			
			if ($i<strlen($art)-1) {
				while ($art[$i] != " " && $i<strlen($art)) {
					echo $art[$i];
					$i++;
				}
				echo "...";?>
			<?}}
			else echo $art;?>
				
			<div style="text-align:right;">
			<?if ($a) {?><a href="../news/more/<?echo $article_id[$header];?>">Читать далее &#9658</a><?}?></div>
			</div>
		
	</div>		
<?}?>

	