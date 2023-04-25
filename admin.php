<?php
include("include/common.php");

// Load data từ database
$data = db_select("select * from  danhmuc");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOB SHOP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="content__header">
                <div class="logo__header">
                    <img src="./img/Group.png" alt="">
                </div>
                <div class="menu__header">
                    <nav>
                        <ul class="nav__left">
                            <li><a href="index.php">Trang chủ</a></li>
                            <li><a href="gioithieu.php">Giới thiệu</a></li>
                            <li><a href="sanpham.php">Sản phẩm</a></li>
                            <li><a href="lienhe.php">Liên hệ</a></li>
                        </ul>
                        <ul class="nav__right">
                            <li><a href="logout.php">Đăng xuất</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="card__head">
                    <div class="card" id="popup_card">
                        <img src="./img/Group 16.png" alt="">
                        <span>2</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- slides -->
    <section class="slide__body">
        <div class="container">
            <div class="container_slide">
                <div class="slides">
                    <div class="_p$item">
                        <img src="./img/baner01.png" alt="">
                    </div>
                    <div class="_p$item">
                        <img src="./img/baner02.png" alt="">
                    </div>
                    <div class="_p$item">
                        <img src="./img/baner04.png" alt="">
                    </div>
                </div>
                <div class="next"><i class="fas fa-arrow-right"></i></div>
                <div class="prev"><i class="fas fa-arrow-left"></i></div>
            </div>
        </div>
    </section>
    <!-- end slides -->
    <!-- Body product one -->
    <section class="body_product">
        <div class="container">
            <div class="title"><h3>Sản phẩm</h3></div>
            <div class="show_product">
                <!-- <div class="card">
                    <div class="items">
                        <div class="image">
                            <img src="./img/Img (4).png" alt="">
                        </div>
                        <div class="text">
                            <h3>Áo đẹp </h3>
                            <p>200.000 đ</p>
                        </div>
                        <div class="color">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       <div class="button">
                        <a href="#">Mua</a>
                        <a href="#">Xem chi tiết</a>
                       </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <!-- end Body product one -->

     <!-- Body product discount -->
     <!-- <section class="body_product discount">
        <div class="container">
            <div class="title"><h3>Sản phẩm khuyến mãi</h3></div>
            <div class="show_product">
                <div class="card">
                    <div class="items">
                        <div class="image">
                            <img src="img/Img (4).png" alt="">
                        </div>
                        <div class="text">
                            <h3>Áo đẹp </h3>
                            <span><s>200.000đ</s></span>
                            <span>175.000đ</span>
                        </div>
                        <span class="discount">25%</span>
                        <div class="color">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                       <div class="button">
                        <a href="#">Mua</a>
                        <a href="#">Xem chi tiết</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end Body product discount -->
    <div class="section">
    <div class="add">
        <a href="./admin/create.php">Thêm Sản Phẫm</a>
    </div>

<!-- php -->
<?php
	foreach ($data as $item) {
		$id = $item["id"];
		$name = $item["ten"];
		$img = upload($item["img"], true);
		$gia = $item["gia"];
		$mota = $item["danhmuc"];
		echo <<<EOL
    <div class="reponsive">
        <div class="gallery">
            <a href="#" target="_blank">
                <img src=" $img " alt="imge" height="300px" width="300px">
            </a>
            <div class="content-img"> $name</div>
            <div class="content-img"> $gia <sup>đ</sup></div>
            <div class="content-img"> $mota</div>
            <div class="Ud_Dl">
                <div class="delete"><a href="./admin/delete.php?id=$id">Xóa</a></div>
                <div class="update"><a href="./admin/edit.php?id=$id">Sửa</a></div>
            </div>
        </div>
    </div>

EOL;
	}
	?>
	<!-- end php -->
	<footer>
    <div class="container">
			<div class="row">
				<div class="col-4">
					<h3 class="name_website">Bee Your</h3>
					<div>
						<img src="img/Group.png" alt="">
					</div>
					<p>
					<i>Chiến thắng chính mình là thành công hàng đầu để chiến thắng tất cả.</i>
					</p>
				</div>
				<div class="col-4">
					<h3 class="title">
						<i>CHÍNH SÁCH BẢO HÀNH</i>
					</h3>
					<ul>
						<i>
						<li><a href="">Qui chế hoạt động website</a></li>
						<li><a href="">Chính sách bảo mật</a></li>
						<li><a href="">Chính sách bảo hành</a></li>
						<li><a href="">Chính sách giao hàng</a></li>
						<li><a href="">Qui định thanh toán</a></li>
						<li><a href="">Chính sách đổi trả</a></li>
						</i>
					</ul>
				</div>
				<div class="col-4">
					<h3 class="title">
						<i>THÔNG TIN LIÊN HỆ</i>
						</h3>
					<ul>
						<i>
						<li><a href="Ngkduy@gmail.com">Liên hệ: Ngkduy@gmail.com</a></li>
						<li><a 							href="https://www.facebook.com/zuyusit03">Fb:https://www.facebook.com/zuyusit03</a></li>
						</i>
					</ul>
				</div>
			</div>
		</div>
		<p class="copyriht">Website design By Bee @Nocopyright</p>
	</footer>
	<div class="overlay"></div>
	<div class="popup_shopping">
		<div class="body_shopping">
			<table>
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sản phẩm</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Áo kaki V.P.1</td>
						<td>200.000</td>
						<td>10</td>
						<td>
							<a href="">Delete</a>
							<a href="">Add</a>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Áo kaki V.P.1</td>
						<td>100.000</td>
						<td>5</td>
						<td>
							<a href="">Delete</a>
							<a href="">Add</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Áo kaki V.P.1</td>
						<td>300.000</td>
						<td>10</td>
						<td>
							<a href="">Delete</a>
							<a href="">Add</a>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="close">
				<button type="button" class="button">Close</button>
			</div>
		</div>
	</div>
	<script src="js/slide.js"></script>
	<script src="https://kit.fontawesome.com/03bca92048.js" crossorigin="anonymous"></script>
	<script>
		let popup_card = document.getElementById('popup_card');
		let popup = document.querySelector('.popup_shopping');
		let overlay = document.querySelector('.overlay');
		let button = document.querySelector('button.button');
		popup_card.addEventListener("click", () => {
			popup.classList.add('active');
			overlay.classList.add('active');
		});
		overlay.addEventListener("click", () => {
			popup.classList.remove('active');
			overlay.classList.remove('active');
		});
		button.addEventListener("click", () => {
			popup.classList.remove('active');
			overlay.classList.remove('active');
		});
	</script>
</body>

</html>