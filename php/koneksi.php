<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'pds');
if (isset($_POST['tombol'])) {
    $Nama = $_POST['Nama'];
    $Email = $_POST['Email'];
    $Pesan = $_POST['Pesan'];
    $query = mysqli_query($koneksi, "INSERT INTO user(Nama,Email,Pesan) Values('$Nama','$Email','$Pesan')");
}
