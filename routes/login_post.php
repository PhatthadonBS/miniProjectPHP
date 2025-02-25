<?php
$email = $_POST['email'];
$password = $_POST['password'];
$result = login( $email, $password);
if($result){
    $unix_timestamp = time();
    $_SESSION['timestamp'] = $unix_timestamp;
    $_SESSION['student_id'] = $result['student_id'];
    renderView('main_get', ['data' => $result]);
}else{
    $_SESSION['error'] = 'อีเมล หรือ รหัสนิสิต หรือ รหัสผ่านผิด';
    renderView('login_get');
    unset($_SESSION['timestamp']);
}


