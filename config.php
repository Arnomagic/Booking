<?php

$host = 'localhost'; // หรือโฮสท์ของเซิร์ฟเวอร์ MySQL
$username = 'root'; // ชื่อผู้ใช้ MySQL
$password = ''; // รหัสผ่าน MySQL
$database = 'mydatabas'; // ชื่อฐานข้อมูล MySQL

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $connection->connect_error);
}