<?php
include_once('./config.php');
$objCon = connectDB();

$data = $_POST;
$user_name = $data['name'];
$user_username = $data['username'];
$user_email = $data['email'];
$user_faculty = $data['faculty'];
$user_status = $data['status'];
$user_password = md5($data['password']);
$user_confirmpassword = $data['confirmpassword'];

$strSQL = "INSERT INTO 
tb_user(
    `user_name`,
    `user_username`,
    `user_email`,
    `user_faculty`,
    `user_status`,
    `user_password`,
    `user_leve`
) VALUES (
    '$user_name', 
    '$user_username', 
    '$user_email',
    '$user_faculty', 
    '$user_status', 
    '$user_password',  
    'w'
)";

$objQuery = mysqli_query($objCon, $strSQL) or die(mysqli_error($objCon));
if ($objQuery) {
    echo '<script>alert("ลงทะเบียนเรียบร้อยแล้ว");window.location="login.php";</script>';
} else {
    echo '<script>alert("พบข้อผิดพลาด");window.location="register.php";</script>';
}