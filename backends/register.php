<?php

try {
    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {
	$arr = array ('code'=>"0",'msg'=>"Máy chủ đang gặp một số vẫn đề! Hãy thử lại sau một thời gian ngắn!");

	echo json_encode($arr);
	exit();
}

if (!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['password'])) {
	$arr = array ('code'=>"0",'msg'=>"Dữ liệu không hợp lệ, hãy nhập lại nhé!");

	echo json_encode($arr);
	exit();
}

$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$regex_name = '/^[(A-Z)?(a-z)?(0-9)?\s*]+$/';

$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($regex_name, $_POST['name']) || !preg_match($regex_email, $_POST['email']) || !preg_match($regex_password, $_POST['password'])) {
	$arr = array ('code'=>"0",'msg'=>"Không hợp lệ!");

	echo json_encode($arr);
	exit();

} else {

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$email = $_POST['email'];
	$name = $_POST['name'];
	$password = $_POST['password'];

	$timest = date("d:m:Y h:i:s");

	$sql = "SELECT * FROM users WHERE email=?";

	$query  = $pdoconn->prepare($sql);
	$query->execute([$email]);
	$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);

	if (count($arr_login) != 0) {
		$arr = array ('code'=>"0",'msg'=>"Email này đã được sử dụng! Hãy thử đăng ký bằng email khác!");

		echo json_encode($arr);
		exit();

	} else {

		$sql = "INSERT INTO users(name,email,password,timestamp) VALUES(?,?,?,?)";
	    $query  = $pdoconn->prepare($sql);
	    if ($query->execute([$name, $email, $password, $timest])) {

	    	$arr = array ('code'=>"1",'msg'=>"Đăng ký thành công! Vui lòng chuyển đến tùy chọn Đăng nhập để đăng nhập vào tài khoản!");

			echo json_encode($arr);
	    	
	    } else {
	    	$arr = array ('code'=>"0",'msg'=>"Máy chủ đang gặp một số vẫn đề! Hãy thử lại sau một thời gian ngắn!");

			echo json_encode($arr);
	    }
	}
}