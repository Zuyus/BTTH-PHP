
<?php
include("../include/common.php");
// check_login();
if (is_method_post()) {
	// upload và nhận lại filename
	$name = $_POST["ten"] ?? "";
	$gia = $_POST["gia"] ?? "";
	$danhmuc = $_POST["danhmuc"] ?? "";

	$img = upload_and_return_filename("img","danhmuc/img");

	$sql = "insert into danhmuc(ten, img, gia, `danhmuc`)
			values( ?, ?, ?,?)";
	$data = array($name, $img, $gia, $danhmuc);
	db_execute($sql, $data);

	js_alert("Thêm thông tin thành công!");
	js_redirect_to("admin.php");
}

$_title = "Thêm Thông Tin";
include("../_header.php");
?>

<div>
<!-- action="/btap/admin/index.php" -->
    <form enctype="multipart/form-data"  method="post" >
        <label for="ten">Thêm Sản Phẩm: </label>
        <input type="text" name="ten" id="ten" requied> <br>
        <label for="gia">Thêm Giá: </label>
        <input type="text" name="gia" id="gia" requied> <br>
        <label for="danhmuc">Mô Tả: </label>
        <input type="text" name="danhmuc" id="danhmuc" requied> <br>
        <label for="img">Thêm Ảnh: </label>
        <input type="file" name="img" id="img"  accept=".png, .jpg, .jpeg" requied> <br>
        <input type="submit" value="Thêm Sản Phẫm">
    </form>
</div>




<?php include("../_footer.php"); ?>


