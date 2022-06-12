<?php
require '../../../config/php/backend.php';
require '../../../config/php/koneksi.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM tanggapan WHERE Nama LIKE '%$keyword%' OR Email LIKE '%$keyword%' OR Pesan LIKE '%$keyword%' OR id LIKE '%$keyword%'";
$cari = query($query);
$datahalaman = 10;
$jumlahdata = mysqli_query($konek, "SELECT * FROM tanggapan");
$jumlahdata = count(query("SELECT * FROM tanggapan"));
$jumlahhalaman = ceil($jumlahdata / $datahalaman);
$aktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awaldata = ($datahalaman * $aktif) - $datahalaman;
$data = mysqli_query($konek, "SELECT * FROM  tanggapan LIMIT $awaldata,$datahalaman  ");
?>
<div class="data-tables datatable-dark">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col pesan">
                <div class="row">
                    <div class="col-md-10">
                        <table border="1" class="table table-striped table-hover">
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Email</td>
                                <td>Pesan</td>
                            </tr>
                            <?php $i = 1; ?>
                            <?php foreach ($cari as $row) : ?>
                                <tr>
                                    <td><?= $row["id"]; ?></td>
                                    <td><?= $row["Nama"]; ?></td>
                                    <td><?= $row["Email"]; ?></td>
                                    <td><?= $row["Pesan"]; ?></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">

                                    <?php if ($aktif > 1) : ?>
                                        <li class="page-item"><a class="page-link" href="?halaman=<?= $aktif - 1; ?>">Previous</a></li>
                                    <?php else : ?>
                                        <li class="page-item disabled"><a class="page-link" href="?halaman=<?= $aktif - 1; ?>">Previous</a></li>
                                    <?php endif; ?>

                                    <?php for ($i = 1; $i <= $jumlahhalaman; $i++) : ?>
                                        <?php if ($i == $aktif) : ?>
                                            <li class="page-item active"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                                        <?php else : ?>
                                            <li class="page-item"><a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a></li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php if ($aktif >= 0) : ?>
                                        <li class="page-item "><a class="page-link" href="?halaman=<?= $aktif + 1; ?>">Next</a></li>
                                    <?php else : ?>
                                        <li class="page-item disabled"><a class="page-link" href="?halaman=<?= $aktif + 1; ?>">Next</a></li>
                                    <?php endif; ?>

                                </ul>
                            </nav>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr size="5">
        <a target="_blank" href="export_data.php"><button type="button" class="btn btn-primary"><i class="bi bi-file-earmark-spreadsheet"></i> Export</button></a>
    </div>
</div>