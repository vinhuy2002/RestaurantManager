<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant Manager</title>

	<link rel="shortcut icon" type="image/x-icon" href="public/img/spatula2.svg">

	<link href="public/css/./sb-admin-2.min.css" rel="stylesheet" type="text/css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

	<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>

	<script src="public/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
</head>
<body id="page-top">
	<div id="wrapper">

		<?php require_once('menu.php') ?>

		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php require_once('header.php') ?>

				<div class="container-fluid">

					<?php
					$mod = isset($_GET['mod']) ? $_GET['mod'] : "trangchu";
					switch ($mod) {
						case "trangchu":
						require_once("MVC/Views/TrangChu/trangchu.php");
						break;
						case "monan":
						require_once("MVC/Views/MonAn/monan.php");
						break;
						case "datmon":
						require_once("MVC/Views/DatMon/datmon.php");
						break;
						case "nguyenlieu":
						require_once("MVC/Views/NguyenLieu/nguyenlieu.php");
						break;
						case "ban":
						require_once("MVC/Views/Ban/ban.php");
						break;
						case "lichlamviec":
						require_once("MVC/Views/LichLamViec/lichlamviec.php");
						break;
						case "nhanvien":
						require_once("MVC/Views/NhanVien/nhanvien.php");
						break;
						case "doanhthu":
						require_once("MVC/Views/DoanhThu/doanhthu.php");
						break;
					}
					?>
				</div>
			</div>

			<?php require_once('footer.php') ?>
		</div>
	</div>


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
	<script src="public/js/sb-admin-2.min.js"></script>
</body>
</html>