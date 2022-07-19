<?php

$sql = "DELETE FROM tabel_hasil WHERE tanggal='$_GET[tanggal]'";
if ($connection->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'dashboard.php?module=list_logam';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>