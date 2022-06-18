<?php
include "../../config/php/koneksi.php";
$id = $_GET['id'];
$hps = mysqli_query($koneksi, "DELETE FROM portfolio WHERE id = '$id'");
if ($hps > 0) {
    echo "<script>
    alert('Delete successful');
    document.location.href='../portfolio.php';
    </script>";
} else {
    echo "<script>
    alert('Delete failed');
    document.location.href='../portfolio.php';
    </script>";
}
