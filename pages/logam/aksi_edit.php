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
$id_logam = $_GET['id_logam'];


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

 // echo $nHarga."<br>";
 // echo $nBerat."<br>";
 // echo $nTitik_Lebur."<br>";
 // echo $nJumlah."<br>";
 // echo $Jumlah."<br>";


	//mengambil id logam terkahir yang baru saja dimasukan
              	
              	// insert data to table nilai.
				$sKepadatan ="UPDATE tabel_nilai
                        SET nilai = '$Kepadatan'
                        WHERE id_kriteria='1' AND id_logam = '$id_logam'; ";
				$connection->query($sKepadatan);

				$sHarga ="UPDATE tabel_nilai
                        SET nilai = '$Harga'
                        WHERE id_kriteria='2' AND id_logam = '$id_logam'; ";
				$connection->query($sHarga);

				$sBerat ="UPDATE tabel_nilai
						SET nilai = '$Berat'
						WHERE id_kriteria='3' AND id_logam = '$id_logam'; ";
				$connection->query($sBerat);

				$sTitik_Lebur ="UPDATE tabel_nilai
						SET nilai = '$Titik_Lebur'
						WHERE id_kriteria='4' AND id_logam = '$id_logam'; ";
				$connection->query($sTitik_Lebur);

				$sJumlah ="UPDATE tabel_nilai
                        SET nilai = '$Jumlah'
                        WHERE id_kriteria='5' AND id_logam = '$id_logam'; ";
                $connection->query($sJumlah);

				$sqllogam = "UPDATE tabel_logam SET nama= '$nama', Keterangan='$Keterangan',Kepadatan='$Kepadatan',Harga='$Harga',Berat='$Berat',
				Titik_Lebur='$Titik_Lebur',Jumlah='$Jumlah' WHERE id_logam = '$id_logam' ";
				$connection->query($sqllogam);
                
				echo "<script>alert('Input berhasil');window.location = '../../dashboard.php?module=list_logam';</script>";


// eksekusi sql

// if ($connection->query($sql) === TRUE) {
//     echo "<script>alert('Input berhasil');window.location = '../../index.php?module=list_kriteria';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $connection->error;
// }

?>