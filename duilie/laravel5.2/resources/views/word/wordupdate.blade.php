<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="wordupdateadd" method="post">
	<center>
	<table border="1">
		<tr style="display: none">
			<td>
				<input type="text" name="id" value="<?=$list->id?>">
			</td>
		</tr>
		<tr>
			{!! csrf_field() !!}
			<td>留言内容：</td>
			<td>
				<input type="text" name="name" value="<?=$list->name?>">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="添加">
			</td>
		</tr>
	</table>
	</center>
	</form>
</body>
</html>