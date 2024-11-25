<?php
function koneksi()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "pasien";
    return mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
}

function getTabelDokter()
{
    $link = koneksi();
    $query = "SELECT * FROM `dokter`";
    $result = mysqli_query($link, $query);
    $hasil = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $hasil;
}
?>