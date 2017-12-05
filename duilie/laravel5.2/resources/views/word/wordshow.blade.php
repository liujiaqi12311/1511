<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<center>
	<h2>留言内容展示</h2>
	<table border="1">
		<tr>
			<td>ID</td>
			<td>留言内容</td>
			<td>时间</td>
			<td>操作</td>
		</tr>
		<?php foreach($list as $val):?>
			<tr>
				<td>{{$val->id}}</td>
				<td>{{$val->name}}</td>
				<td>{{$val->time}}</td>
				<td><a href="worddelete?id={{$val->id}}">删除</a>||<a href="wordupdate?id={{$val->id}}">修改</a></td>
			</tr>
		<?php endforeach;?>
	</table>
</center>
</body>
</html>