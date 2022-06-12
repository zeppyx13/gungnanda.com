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
                    <p class="text"> UPDATE PROJECT </p>
                </header>
            </div>
            <hr class="hr1">
            <div class="col-md-12 isi">
                <div class="input-group mb-3">
                    <input id="img" required autocomplete="off" type="file" class="form-control" placeholder="Server" aria-label="Server">
                </div>
                <label for="des">Project Name :</label>
                <div id="des" class="input-group">
                    <input class="form-control" required autocomplete="off" placeholder="Name" aria-label="Name"></input>
                </div>
                <label for="basic-url" class="form-label">Your vanity URL :</label>
                <div class="input-group mb-3">
                    <input placeholder="URL website" type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <hr class="hr2">
                <button type="submit" class="btn submit btn-secondary btn-lg">UPDATE</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>