
<html>
<head>
    <title>Новая Рига</title>
    <meta http-equiv="content-type" content="text/html; charset=Windows-1251"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <link href="http://localhost/css/style.css" type="text/css" rel="stylesheet">
<!--[if IE 6]>
    <link href="O_Portal_files/axurerp_pagespecificstyles_ie6.css" type="text/css" rel="stylesheet">
<![endif]-->
</head>
<body>
<div class="Header">
	<img src="img/logo.gif" alt="Новая Рига">
	<div class="slogan">
		<span>Направление</span><br>
		<span style="margin-left:20px;">Нашей</span><br>
		<span style="margin-left:40px;">Жизни</span><br>
	</div>
	<div class="search">
		<input class="text" type=text value="Поиск по сайту...">
		<input class="button" type="submit" value="Поиск"><br>
		<div class="enter">
			<a href=#>Вход</a>
			<a href=#>Регистрация</a>
		</div>
	</div>
</div>
<?include "menu.php"?>

<table class="content">
	<tr>
		<td class="content-left">
			<div class="content-header">
				<span>Список поселков</span>
			</div>
			<div class="vert-menu">
				<a href="#">НИКИТСКОЕ</a><br>
				<a href="#">ШЕЛЕСТОВО</a><br>
				<a href="#">ЭКОПАРК «УШАКОВО»</a><br>
				<a href="#">ТИХАЯ ЗАВОДЬ</a><br>
				<a href="#">ZORINO SPORT VILLAGE</a><br>
				<a href="#">УШАКОВСКИЕ ДАЧИ</a><br>
				<a href="#">БЕРЕГ HONKA</a><br>
				<a href="#">LAKE-SIDE</a><br>
			</div>
			<?include "topnews.php";?>
			<div class="adv">
				<img src="img/adv1.png" alt="Клубная карта">
			</div>		
		</td>
		<td class="content-center">
			
			<?if (isset($article_section)) include "article_section.php";
			else include $page_name.".php";?>
			
		</td>
		<td class="content-right">
			<div class="content-header">
				<span>Поиск объекта</span>
			</div>
			<div class="object-search">
				<div class="object-search-items">
					<span>Тип:</span>
					<span>Готовность:</span>
					<span>Расстояние до МКАД:</span>
					<span>Название:</span>
				</div>
				<div class="object-search-values">				
					<select class="object-search-value">
						<option selected value="...не важно">...не важно</option>
					</select>
					<select class="object-search-value">
						<option selected value="...не важно">...не важно</option>
					</select>
					<div style="height:10px;"></div>
					<select class="object-search-value">
						<option selected value="...не важно">...не важно</option>
					</select>
					<select class="object-search-value">
						<option selected value="...не важно">...не важно</option>
					</select>
				</div>
				<div class="object-search-button">
				<input type="submit" class="" value="Поиск">
				</div>
			</div>
			<div class="adv">
				<img src="img/adv2.png" alt="Поселок сдан!">
			</div>	
			<div class="adv">
				<img src="img/adv3.png" alt="Сбербанк">
			</div>
					
		</td>
	</tr>
</table>
<div class="footer">
	<span>Все права защищены "Новая Рига LIVE" 2012</span>
</div>
</body>
</html>