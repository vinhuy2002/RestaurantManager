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

if (!isset($_POST['email']) || !isset($_POST['password'])) {
	$arr = array ('code'=>"0",'msg'=>"Có vẻ bạn đã nhập sai, hãy nhập lại nhé!");

	echo json_encode($arr);
	exit();
}

$regex_email = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

$regex_password = '/^[(A-Z)?(a-z)?(0-9)?!?@?#?-?_?%?]+$/';

if (!preg_match($regex_email, $_POST['email']) || !preg_match($regex_password, $_POST['password'])) {
	$arr = array ('code'=>"0",'msg'=>"Không hợp lệ!");
	echo json_encode($arr);
	exit();

} else {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM users WHERE email=?";

	$query  = $pdoconn->prepare($sql);
	$query->execute([$email]);
	$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);

	if (count($arr_login) != 0) {
		foreach ($arr_login as $key) {
			$tmp_pass = $key['password'];
			$tmp_name = $key['name'];
			$tmp_id = $key['id'];
		}

		if ($tmp_pass == $password) {
			session_start();

			$_SESSION['user'] = explode(" ", $tmp_name)[0];
			$_SESSION['user_id'] = $tmp_id;
				
			$arr = array ('code'=>"1",'msg'=>"Bạn đã đăng nhập!");

			echo json_encode($arr);
		} else {
			$arr = array ('code'=>"0",'msg'=>"Mật khẩu không hợp lệ!");

			echo json_encode($arr);
			exit();
		}

	} else {
		$arr = array ('code'=>"0",'msg'=>"Không tìm thấy địa chỉ email này!");
		echo json_encode($arr);

		exit();
	}
}