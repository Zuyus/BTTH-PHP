<?php
include("include/common.php");

if (is_method_post()) {
	$username = $_POST["username"] ?? "";
	$password = $_POST["password"] ?? "";
	$cf_password = $_POST["cf_password"] ?? "";
	if ($password != $cf_password) {
		js_alert("cf password khong khop");
		js_redirect_to("sigup.php");
		die;
	}

	$sql_int = "INSERT INTO users VALUE(default, ?, ?)";
	if (isUsernameExists($username)) {
		js_alert("Tài khoản đã tồn tại!!!");
		js_redirect_to("/");
		die;
	}
	// Độ dài của hash (Độ phức tạp tg của thuật toán)
	$options = [
		"cost" => 12
	];

	$password_hash = password_hash($password, PASSWORD_DEFAULT, $options);
	$params = [$username, $password_hash];

	db_execute($sql_int, $params);
	js_alert("Tạo thành công");
	js_redirect_to("/");
}
function isUsernameExists(string $username): bool
{
	$sql_sel = "SELECT * FROM `users` WHERE `username`=?";
	$data = db_select($sql_sel, [$username]);
	return !empty($data);
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

<body>
	<div class="account">
		<!-- class account bao gồm toàn bộ khung  -->
		<h2> ĐĂNG KÝ TÀI KHOẢN</h1>
			<div class="form">
				<!-- class form bao gồm input && label  -->
				<form method="post">
					<div class="infor">
						<!-- bao gồm ten đăng nhập &&..  -->
						<label for="username"> Tên đăng nhập:</label>
						<br>
						<label for="password">Mật khẩu:</label>
						<br>
						<label for="password">Nhập lại mật khẩu:</label>
						<br>
						<input type="submit" value="Đăng ký">
					</div>
					<div class="inser">
						<!-- inser bao gồm các thè input  -->
						<input type="text" id="username" name="username"><br>
						<input type="password" id="password" name="password"> <br>
						<input type="cf_password" id="cf_password" name="cf_password"><br>
					</div>

				</form>
			</div>
	</div>
</body>

</html>