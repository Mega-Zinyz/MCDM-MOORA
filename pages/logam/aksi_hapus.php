<?php
$sql = "DELETE FROM tabel_logam WHERE id_logam='$_GET[id_logam]'";
if ($connection->query($sql) === TRUE) {
    echo "<script>alert('HAPUS berhasil');window.location = 'dashboard.php?module=list_logam';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
?>