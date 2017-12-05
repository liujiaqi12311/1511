<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<form action="add_login" method="post">
	<table border="1">
		<tr>
			{!! csrf_field() !!}
			<td>用户名：</td>
			<td>
				<input type="text" name="username">
			</td>
		</tr>
		<tr>
			<td>密码</td>
			<td>
				<input type="password" name="password">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="登录">
			</td>
		</tr>
	</table>
	</form>
</center>
</body>
</html>