<form action = "<?echo $actionurl?>" method="post">
	����� ������:<input name="newpass" type="password"><br>
	��������� ����� ������:<input name="resieve" type="password"><br>
	<input type="submit" value="��������"><br>
	<div style="color: #f33"><?if (isset($error)) echo $error;?></div>
</form>
