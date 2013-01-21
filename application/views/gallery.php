<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "xhtml11.dtd">

<head>
<script type="text/javascript" src="../highslide/highslide-full.js"></script>
<link rel="stylesheet" type="text/css" href="../highslide/highslide.css" />
<script type="text/javascript">
	hs.graphicsDir = '../highslide/graphics/';
	hs.align = 'center';
	hs.transitions = ['expand', 'crossfade'];
	hs.outlineType = 'rounded-white';
	hs.fadeInOut = true;
	hs.dimmingOpacity = 0.75;

	// define the restraining box
	hs.useBox = true;
	hs.width = 640;
	hs.height = 480;

	// Add the controlbar
	hs.addSlideshow({
		//slideshowGroup: 'group1',
		interval: 5000,
		repeat: false,
		useControls: true,
		fixedControls: 'fit',
		overlayOptions: {
			opacity: 1,
			position: 'bottom center',
			hideOnMouseOut: true
		}
	});
</script>

</head>

<div style="margin: 30px">
	<?for($i = 0; $i < count($photo); $i++) {?>
	<div class="highslide-gallery" style="float: left">

	<a href="../images/<?echo $photo[$i]->link?>" class="highslide" onclick="return hs.expand(this)">
		<img src="../images/<?echo $photo[$i]->link?>" width = 150
			title="Нажмите чтобы приблизить" />
	</a>

	<div class="highslide-caption">
		<?echo $photo[$i]->name?>
	</div>
	</div>
	<?}?>
</div>
