<?php
$sql = "DELETE FROM tabel_kriteria WHERE id_kriteria='$_GET[id_kriteria]'";
if ($connection->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'dashboard.php?module=list_kriteria';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>