<div class="content-header">
	<span>ТОП Новостей</span>
</div>

<div class="small-news">
<?
foreach ($news as $header => $art) 
{?>
	<div class="small-news-item">
		<div class="item-date"><?echo $news_date[$header]?></div>
		<div class="item-header"><?echo $header?></div>
		<div class="item-text">
			<?echo substr($art, 0, 51);
			$i = 51;
			
			if ($i<strlen($art)-1) {
				while ($art[$i] != " " && $i<strlen($art)) {
					echo $art[$i];
					$i++;
				}
				echo "...";?>
			<?}?>
			<div style="text-align:right;"><a href="../news/more/<?echo $news_id[$header];?>">Читать далее &#9658</a></div>
		</div>
	</div>
<?}
?>
</d