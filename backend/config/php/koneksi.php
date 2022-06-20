<?php
$koneksi = mysqli_connect("localhost", "u1109052_admin", "xTz8pX6Tiw5GEaY", "u1109052_gungnanda.com");

if (!$koneksi) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
