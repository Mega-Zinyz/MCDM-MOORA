<?php

$sql = "DELETE FROM tabel_hasil WHERE nama='$_GET[nama]'";
if ($connection->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'dashboard.php?module=list_detail_logam&&tanggal=$_GET[tanggal]';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>