<?php
// mengambil data connection
include '../../lib/koneksi.php';
// mengambil data dari form sebelumnya
$nama = $_POST['nama'];
$Keterangan = $_POST['Keterangan'];
$Kepadatan = $_POST['Kepadatan'];
$Harga = $_POST['Harga'];
$Berat = $_POST['Berat'];
$Titik_Lebur = $_POST['Titik_Lebur'];
$Jumlah = $_POST['Jumlah'];



if (!empty($Kepadatan)) {
	echo $Kepadatan;
}else{
	echo "No";
}
if (!empty($Harga)) {
	echo $Harga;
}else{
	echo "No";
}
if (!empty($Berat)) {
	echo $Berat;
}else{
	echo "No";
}
if (!empty($Titik_Lebur)) {
	echo $Titik_Lebur;
}else{
	echo "No";
}
if (!empty($Jumlah)) {
	echo $Jumlah;
}else{
	echo "No";
}


// sql
$sql = "INSERT INTO tabel_logam (nama, Keterangan, Kepadatan, Harga, Berat,Titik_Lebur, Jumlah)
VALUES ('$nama', '$Keterangan', '$Kepadatan','$Harga','$Berat','$Titik_Lebur','$Jumlah')";

if ($connection->query($sql) === TRUE) {
	//mengambil id logam terkahir yang baru saja dimasukan
	$sqlIdakhir = "SELECT id_logam FROM tabel_logam ORDER BY id_logam DESC limit 1";
          $resultIdakhir = mysqli_query($connection, $sqlIdakhir);
              $hasil = mysqli_fetch_assoc($resultIdakhir);
              	$id_logam = $hasil['id_logam'];
              	
              	//insert data to table nilai.
              	$sKepadatan = "INSERT INTO tabel_nilai (id_kriteria, id_logam, nilai)
						VALUES ('1', '$id_logam', '$Kepadatan')";
				$connection->query($sKepadatan);

				$sHarga = "INSERT INTO tabel_nilai (id_kriteria, id_logam, nilai)
						VALUES ('2', '$id_logam', '$Harga')";
				$connection->query($sHarga);

				$sBerat = "INSERT INTO tabel_nilai (id_kriteria, id_logam, nilai)
						VALUES ('3', '$id_logam', '$Berat')";
				$connection->query($sBerat);

				$sTitik_Lebur = "INSERT INTO tabel_nilai (id_kriteria, id_logam, nilai)
						VALUES ('4', '$id_logam', '$Titik_Lebur')";
				$connection->query($sTitik_Lebur);

				$sJumlah = "INSERT INTO tabel_nilai (id_kriteria, id_logam, nilai)
						VALUES ('5', '$id_logam', '$Jumlah')";
				$connection->query($sJumlah);

				echo "<script>alert('Input berhasil');window.location = '../../dashboard.php?module=list_logam';</script>";
}

// eksekusi sql

// if ($connection->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../dashboard.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $connection->error;
// }

?>