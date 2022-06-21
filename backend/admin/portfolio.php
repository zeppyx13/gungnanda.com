<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../");
    exit;
}
require '../config/php/backend.php';
include "../config/php/koneksi.php";

$work = query("SELECT * FROM portfolio")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../ico/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../ico/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../ico/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../ico/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../ico/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../ico/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../ico/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="../ico/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="../ico/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="../ico/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="../ico/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="../ico/mstile-310x310.png" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="config/js/jquery-3.6.0.min.js"></script>
    <script src="config/js/searchpg1.js"></script>
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <form class="d-flex" action="" method="post">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off" id="keyword">
        </form>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="../../" class="nav__logo">
                    <i class='bi bi-house-door nav__logo-icon'></i>
                    <span class="nav__logo-name">Home</span>
                </a>
                <div class="nav__list">
                    <a href="./" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon'></i>
                        <span class="nav__name">Messages</span>
                    </a>
                    <a href="" class="nav__link">
                        <i class='bx bx-briefcase-alt-2'></i>
                        <span class="nav__name">Recent work</span>
                    </a>
                </div>
            </div>

            <a href="../config/php/logout.php" class="nav__link">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    <div id="container">
        <div class="container">
            <div class="row justify-content-center">
                <div style="margin-top: 50px;" class="col-md-12">
                    <a href="php/input.php"> <button style="text-align:right; border-radius:10px;" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bx bx-plus'></i> add</button></a>
                    <hr>
                </div>
                <div class="col-xl-12">
                    <table style="margin-top: 10px; margin-bottom:50px;" class="table">
                        <thead class="table-dark">
                            <tr>
                                <td>Id</td>
                                <td>Nama</td>
                                <td>Image</td>
                                <td>Description</td>
                                <td>Link</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($work as $data) : ?>
                                <tr>
                                    <td><?= $data["id"]; ?></td>
                                    <td><?= $data["nama"]; ?></td>
                                    <td><img src="assets/img/<?= $data["gambar"]; ?>" style="max-width: 150px; max-height: 150px;"></td>
                                    <td><?= $data["deskripsi"]; ?></td>
                                    <td><?= $data["link"]; ?></td>
                                    <td><a href="php/delete.php?id=<?= $data["id"]; ?>" onclick="return confirm('Confirm to Delete?');"><button class="btn btn-danger">Delete</button></a> <a href="php/update.php?id=<?= $data["id"]; ?>"><button class="btn btn-warning">Update</button></a></td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
</body>

</html>