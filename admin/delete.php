<?php
include("../include/common.php");

$id = $_GET["id"] ?? -1;
$sql_sel = ("select * from danhmuc where id=?");
$sql_del = "delete from danhmuc where id=?";
$data = db_select($sql_sel, ["$id"]);

if (empty($data)) {
    js_alert("SP Chưa Có Mã Số!");
    js_redirect_to("/admin.php");
    die;
}

//delete:
$data = $data[0];
// remove_file($data["img"]);

//delete in database.
db_execute($sql_del, ["$id"]);
js_alert("Đã xóa thành công!");
js_redirect_to("/admin.php");

