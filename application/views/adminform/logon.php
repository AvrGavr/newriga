<form action="<?echo $logonurl?>" method="post" style="margin: 0 auto;">
	�����: <br><input name="login" type="text"><br>
	������: <br><input type="password" name="password"> <br>
	<input type="submit" value="�����">
	<div style="color: #f33"><?if (isset($error)) echo $error;?></div>
</form>