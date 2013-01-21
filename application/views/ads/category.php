<?

foreach ($article as $header => $art) {?>
	<div class="big-news-item">
		<div class="big-news-item-header"><?echo $header?></div>
		
		<?if (isset($article_date)) {?><div class="big-news-item-date"><?echo $article_date[$header]?></div><?}?>
		<div class="big-news-item-text">
			<?echo $art;?>	
			<div style="text-align:right;">
			</div>
			</div>
		
	</div>		
<?}?>

	