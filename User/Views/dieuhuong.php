<?php
$act = isset($_GET['act']) ? $_GET['act'] : "trangchu";
switch ($act) {
    case "trangchu":
        require_once("TrangChu.php");
        break;
    case "monan":
        require_once("MonAn.php");
        break;
    case "datmon":
        require_once("DatMon.php");
        break;
     case "ban":
        require_once("Ban.php");
        break;
     case "lichlamviec":
        require_once("LichLamViec.php");
        break;
    case "nhanvien":
        require_once("NhanVien.php");
        break;
    case "doanhthu":
        require_once("DoanhThu.php");
        break;
}
?>