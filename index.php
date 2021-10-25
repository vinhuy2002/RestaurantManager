<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restaurant Manager</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="User/public/img/spatula2.svg">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet"/>

</head>
<body>

	<?php
		require('Views/navbar.php');
		require('Views/carousel.php');

		$mod = isset($_GET['mod']) ? $_GET['mod'] : "trangchu";
		switch ($mod) {
			case "trangchu":
			require_once("Views/body.php");
			break;
			case "gioithieu":
			require_once("Views/gioithieu.php");
			break;
		}

		require('Views/footer.php');
	?>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>

</body>
</html>