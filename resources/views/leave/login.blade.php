<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{ url('leave/leave') }}" method="post">
		@csrf
		<input type="text" name="name" value="" placeholder="请输入名称">
		<input type="password" name="pwd" value="" placeholder="请输入密码">
		<button>登录</button>
	</form>
</body>
</html>