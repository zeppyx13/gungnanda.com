<?php
$koneksi = mysqli_connect("localhost", "root", "", "gungnanda.com");

if (!$koneksi) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
