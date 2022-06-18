<?php
$konek = mysqli_connect('localhost', 'root', '', 'gungnanda.com');

function query($query)
{
    global $konek;
    $result = mysqli_query($konek, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data)
{
    global $konek;
    $nama = $data['nama'];
    $url = $data['url'];
    $img = img();
    if (!$img) {
        return false;
    }
    $type = $data['type'];

    $query = "INSERT INTO portfolio VALUES ('','$nama','$img','$url','$type')";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}

function img()
{
    $namafile = $_FILES['img']['name'];
    $ukuranfile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpname = $_FILES['img']['tmp_name'];
    if ($error === 4) {
        echo "<script>alert('No image selected');</script>";
        return false;
    }
    $filegambar = ['jpg', 'jpeg', 'png', 'jfif', 'raw', 'webp'];
    $ekstensigambar = explode('.', $namafile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if (!in_array($ekstensigambar, $filegambar)) {
        echo "
        <script>
        alert('file not supported')
        </script>
        ";
        return false;
    }
    if ($ukuranfile > 11000000) {
        echo "<script>alert('Image size to large');</script>";
        return false;
    }
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpname, '../assets/img/' . $namafilebaru);
    return $namafilebaru;
}
