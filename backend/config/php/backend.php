<?php
$konek = mysqli_connect('localhost', 'u1109052_admin', 'xTz8pX6Tiw5GEaY', 'u1109052_gungnanda.com');

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
    $deskripsi = $data['des'];
    $img = img();
    if (!$img) {
        return false;
    }
    $type = $data['type'];

    $query = "INSERT INTO portfolio VALUES ('','$deskripsi','$nama','$img','$url','$type')";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}

function update($data)
{
    global $konek;
    $id = $data["id"];
    $nama = $data["nama"];
    $sumber = $data["url"];
    $deskripsi = $data["des"];
    $type = $data["type"];
    $gambarlama = ($data["gambarlama"]);
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }
    $query = "UPDATE portfolio SET
    gambar='$gambar',
    nama='$nama',
    link='$sumber',
    deskripsi='$deskripsi',
    type='$type'
    WHERE id=$id";
    mysqli_query($konek, $query);
    return mysqli_affected_rows($konek);
}
function upload()
{
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];
    if ($error === 4) {
        echo "
        <script>
        alert('insert image')
        </script>
        ";
        return false;
    }
    $filegambar = ['jpg', 'jpeg', 'png', 'jfif', 'raw', 'webp', 'ico'];
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
        echo "
        <script>
        alert('file size not supported ')
        </script>
        ";
        return false;
    }
    $namafilebaru = uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $ekstensigambar;
    move_uploaded_file($tmpName, '../assets/img/' . $namafilebaru);
    return $namafilebaru;
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
    $filegambar = ['jpg', 'jpeg', 'png', 'jfif', 'raw', 'webp', 'ico'];
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
