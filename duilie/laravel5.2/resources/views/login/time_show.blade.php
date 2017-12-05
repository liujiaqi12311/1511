<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>用户名</td>
			<td>时间</td>
			<td>日程内容</td>
		</tr>
		<?php foreach($list as $val):?>
			<tr>
				<td>{{$val->id}}</td>
				<td>{{$val->name}}</td>
				<td>{{$val->time}}</td>
				<td>{{$val->content}}</td>
			</tr>
		<?php endforeach;?>
	</table>
</center>
</body>
</html>