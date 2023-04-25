<?php
include("../include/common.php");

$id = $_GET["id"] ?? -1;

if (is_method_get()) {
    $sql = "select * from danhmuc where id=?";
    $data = db_select($sql, [$id]);

    $data2 = db_select("select *from danhmuc");
    if (empty($data)) {
        redirect_to("admin.php");
    }
    $data = $data[0];
}
else if (is_method_post()) {
    //Cập nhật dữ liệu
    $name = $_POST["ten"] ?? "";
    $gia = $_POST["gia"] ?? "";
    $mota = $_POST["danhmuc"] ?? "";

    $img = upload_and_return_filename("img", "danhmuc/img");

    if (!empty($img)) {
        $sql = "UPDATE danhmuc SET ten=?, gia=?, danhmuc=?, img=? where id=?";
        $params = [$name, $gia, $mota, $img, $id];
        db_execute($sql, $params);
        js_redirect_to("/"); //Chuyển hướng về trang chủ
        die;
    }

    $sql1 ="UPDATE danhmuc SET ten=?, gia=?, danhmuc=?, img=? where id=?";


    $params1 = [$name, $gia, $mota,$img, $id];
    db_execute($sql1, $params1);


    js_redirect_to("admin.php"); //Chuyển hướng về trang chủ
}


$_title = "Edit information product";
include("../_header.php");
?>


<!DOCTYPE html>
<html>
<head>
    <title>Cập Nhập</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post">
        <label for="ten">Cập Nhật Sản Phẩm: </label>
        <input type="text" name="ten" id="ten"> <br>
        <label for="gia">Cập Nhật Giá: </label>
        <input type="text" name="gia" id="gia"> <br>
        <label for="danhmuc">Mô Tả: </label>
        <input type="text" name="danhmuc" id="danhmuc"> <br>
        <label for="img">Cập Nhật Ảnh: </label>
        <input type="file" name="img" id="img" accept=".png, .jpg, .jpeg"> <br>
        <input type="submit" value="Cập Nhập">
    </form>
</body>
</html>