<?php
$host = "db-mabar-komwan.mysql.database.azure.com";
$username = "admin1234";
$password = "ahong_1234";
$database = "logistik_db";

$conn = mysqli_init();
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, $host, $username, $password, $database, 3306, NULL, MYSQLI_CLIENT_SSL);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>
