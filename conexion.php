<?php
$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'laravel-jesus-cova-huerta.mysql.database.azure.com', 'jesuscovaroot@laravel-jesus-cova-huerta', 'admin2022!', 'base_datos', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}