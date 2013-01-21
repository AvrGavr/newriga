<?
for ($i = 0; $i < count($cats); $i++) {
	?>
	<div class="big-news-item">
		<div class="big-news-item-header"><?echo $cats[$i]['head']?>(<?echo $cats[$i]['count']?>)</div>
		
		<?if (isset($article_date)) {?><div class="big-news-item-date"><?$article_date[$header]?></div><?}?>
		<div class="big-news-item-text">
			<?for ($j = 0; $j < count($cats[$i]['arr_heads']); $j++) {
				?><b><a href="<?echo $moreurl?>/<?echo $cats[$i]['arr_id'][$j]?>"><?echo $cats[$i]['arr_heads'][$j];?></a></b> <?
			}?>	
			<div style="text-align:right;">
			<a href="<?echo $catsurl?>/<?echo $cats[$i]['id']?>"> Посмотреть всё</a></div>
			</div>
		
	</div>		
<?}?>

	