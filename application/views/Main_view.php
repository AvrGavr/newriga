
<html>
<head>
    <title>����� ����</title>
    <meta http-equiv="content-type" content="text/html; charset=Windows-1251"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <link href="http://localhost/css/style.css" type="text/css" rel="stylesheet">
<!--[if IE 6]>
    <link href="O_Portal_files/axurerp_pagespecificstyles_ie6.css" type="text/css" rel="stylesheet">
<![endif]-->
</head>
<body>
<div class="Header">
	<img src="img/logo.gif" alt="����� ����">
	<div class="slogan">
		<span>�����������</span><br>
		<span style="margin-left:20px;">�����</span><br>
		<span style="margin-left:40px;">�����</span><br>
	</div>
	<div class="search">
		<input class="text" type=text value="����� �� �����...">
		<input class="button" type="submit" value="�����"><br>
		<div class="enter">
			<a href=#>����</a>
			<a href=#>�����������</a>
		</div>
	</div>
</div>
<?include "menu.php"?>

<table class="content">
	<tr>
		<td class="content-left">
			<div class="content-header">
				<span>������ ��������</span>
			</div>
			<div class="vert-menu">
				<a href="#">���������</a><br>
				<a href="#">���������</a><br>
				<a href="#">������� �������λ</a><br>
				<a href="#">����� ������</a><br>
				<a href="#">ZORINO SPORT VILLAGE</a><br>
				<a href="#">���������� ����</a><br>
				<a href="#">����� HONKA</a><br>
				<a href="#">LAKE-SIDE</a><br>
			</div>
			<?include "topnews.php";?>
			<div class="adv">
				<img src="img/adv1.png" alt="������� �����">
			</div>		
		</td>
		<td class="content-center">
			
			<?if (isset($article_section)) include "article_section.php";
			else include $page_name.".php";?>
			
		</td>
		<td class="content-right">
			<div class="content-header">
				<span>����� �������</span>
			</div>
			<div class="object-search">
				<div class="object-search-items">
					<span>���:</span>
					<span>����������:</span>
					<span>���������� �� ����:</span>
					<span>��������:</span>
				</div>
				<div class="object-search-values">				
					<select class="object-search-value">
						<option selected value="...�� �����">...�� �����</option>
					</select>
					<select class="object-search-value">
						<option selected value="...�� �����">...�� �����</option>
					</select>
					<div style="height:10px;"></div>
					<select class="object-search-value">
						<option selected value="...�� �����">...�� �����</option>
					</select>
					<select class="object-search-value">
						<option selected value="...�� �����">...�� �����</option>
					</select>
				</div>
				<div class="object-search-button">
				<input type="submit" class="" value="�����">
				</div>
			</div>
			<div class="adv">
				<img src="img/adv2.png" alt="������� ����!">
			</div>	
			<div class="adv">
				<img src="img/adv3.png" alt="��������">
			</div>
					
		</td>
	</tr>
</table>
<div class="footer">
	<span>��� ����� �������� "����� ���� LIVE" 2012</span>
</div>
</body>
</html>