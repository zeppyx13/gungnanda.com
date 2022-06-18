<?php
require '../../config/php/backend.php';
if (isset($_POST['submit'])) {
    if (add($_POST) > 0) {
        echo "<script>
    alert('insert success');
    document.location.href='../portfolio.php';
    </script>
    ";
    } else {
        echo mysqli_error($konek);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/input.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>input</title>
</head>

<body>
    <div class="container">
        <div class="row warpper">
            <div class="col-md-12 head">
                <header>
                    <p class="text"> INPUT PROJECT </p>
                </header>
            </div>
            <hr class="hr1">
            <div class="col-md-12 isi">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="des">Project Name :</label>
                    <div id="des" class="input-group">
                        <input name="nama" class="form-control" required autocomplete="off" placeholder="Name" aria-label="Name"></input>
                    </div>
                    <div class="url">
                        <label for="basic-url" class="form-label">Your Website URL :</label>
                        <div class="input-group mb-3">
                            <input name="url" required autocomplete="off" placeholder="URL website" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>
                    </div>
                    <label for="img" class="form-label">New Image :</label>
                    <div class="gmbr input-group mb-3">
                        <input id="img" name="img" required autocomplete="off" type="file" class="form-control" placeholder="Server" aria-label="Server">
                    </div>
                    <div class="form-check">
                        <input checked onclick="showlink()" class="form-check-input" type="radio" name="type" id="flexRadioDefault1" value="Website">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Website
                        </label>
                    </div>
                    <div class="form-check">
                        <input onclick="hidelink()" class="form-check-input" type="radio" name="type" id="flexRadioDefault2" value="non-website">
                        <label class="form-check-label" for="flexRadioDefault2">
                            non-website
                        </label>
                    </div>
                    <hr class="hr2">
                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" name="submit" class="btn submit btn-secondary btn-lg">ADD</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script>
            const link = document.querySelector('.url');
            const input = document.querySelector('#basic-url');

            function hidelink() {
                link.classList.add('d-none');
                input.removeAttribute('required');
            }

            function showlink() {
                link.classList.remove('d-none');
                input.setAttribute('required', '');
            }
        </script>
</body>

</html>