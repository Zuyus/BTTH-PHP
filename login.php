<?php

include("include/common.php");

// session_start();

if (is_logged()) {
	js_redirect_to("/");
}

if (is_method_post()) {
	$username = $_POST["username"] ?? "";
	$password = $_POST["password"] ?? "";

	//2. select data
	$sql = "SELECT * FROM  `users` WHERE `username` = ?";
	$user = db_select($sql, [$username]);

	//3.Nếu kết quá select là rỗng ==> Nhập sai username
	if (empty($user)) {
		js_alert("Tài khoản không tồn tại");
		js_redirect_to("login.php");
		die;
	}

	$user = $user[0];

	if (password_verify($password, $user["password"]) == true) {
		js_alert("Đăng nhập thành công!!! $username");
		$_SESSION["username"] = $username;
		$_SESSION["id"] = $user["id"];
		js_redirect_to("/");
	}
	else {
		js_alert("Sai mật khẩu");
		js_redirect_to("login.php");
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ĐĂNG KÝ TÀI KHOẢN</title>
	<link rel="stylesheet" href="./css/taikhoan.css">
</head>
<!--login-->

<body>
	<div class="account">
		<!-- class account bao gồm toàn bộ khung  -->
		<h2> ĐĂNG NHẬP</h1>
			<div class="form">
				<!-- class form bao gồm input && label  -->
				<form method="post">
					<div class="infor">
						<!-- bao gồm ten đăng nhập &&..  -->
						<label for="username"> Tên đăng nhập:</label>
						<br>
						<label for="password">Mật khẩu:</label>
						<br>
						<input type="submit" value="Đăng Nhập">
					</div>
					<div class="inser">
						<!-- inser bao gồm các thè input  -->
						<input type="text" id="username" name="username"><br>
						<input type="password" id="password" name="password"> <br>
					</div>
				</form>
			</div>
			<div class="forg">
				<a href="#" class="forg-left">Quên mật khẩu</a>
				<a href="sigup.php" class="forg-right">Đăng kí</a>
				<div class="clearfix"></div>
			</div>
	</div>
</body>
</html>
