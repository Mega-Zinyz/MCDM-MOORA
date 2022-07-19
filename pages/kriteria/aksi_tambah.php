<?php
// mengambil data koneksi
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$kriteria = $_POST['kriteria'];
$type = $_POST['type'];
$bobot = $_POST['bobot'];
// sql
$sql = "INSERT INTO tabel_kriteria (kriteria, type, bobot)
VALUES ('$kriteria', '$type', '$bobot')";
// eksekusi sql
if ($connection->query($sql) === TRUE) {
    echo "<script>alert('Input berhasil');window.location = '../../dashboard.php?module=list_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>