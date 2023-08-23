<?php

$DB_NAME=getenv('MYSQL_DATABASE');

/** MySQL database username */
$DB_USER=getenv('MYSQL_USER');

/** MySQL database password */
$DB_PASSWORD=getenv('MYSQL_PASSWORD');

/** MySQL hostname */
$DB_HOST=getenv('DB_HOST');

// Kết nối
$mysqli = new mysqli('database', $DB_USER, $DB_PASSWORD, $DB_NAME);

// Kiểm tra kết nối
if ($mysqli->connect_errno) {
    echo "Lỗi kết nối đến MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Kết nối thành công!";
}

// Đóng kết nối
$mysqli->close();

?>
