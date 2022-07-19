<?php
$mysqli = new mysqli("localhost", "root", "", "db_mcdm_moora");
if($mysqli->connect_error) {
  exit('Could not connect');
}


?>

<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Nama Logam</th>
                    <th>Keterangan</th>
                    <th>Nilai</th>
                    <!-- <th>Status</th> -->
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT tabel_logam.nama,tabel_logam.jenis_kelamin,tabel_logam.alamat,tabel_hasil.nilai FROM tabel_hasil join tabel_logam ON tabel_hasil.id_logam = tabel_logam.id_logam WHERE tabel_hasil.tanggal = ? ORDER BY tabel_hasil.nilai DESC";
        //   $result = mysqli_query($koneksi, $sql);

        //   $sql = "SELECT customerid, companyname, contactname, address, city, postalcode, country
        //   FROM customers WHERE customerid = ?";
          
          $stmt = $mysqli->prepare($sql);
          $stmt->bind_param("s", $_GET['q']);
          $stmt->execute();
          $stmt->store_result();
          $stmt->bind_result($nama, $Keterangan, $nilai);
          $stmt->fetch();
          $stmt->close();

        //   $tanda = 1;
        //       while ($row = mysqli_fetch_assoc($result)) {
                  
          ?>
                  <tr class="gradeX">
                    <td><?=$nama?></td>
                    <td><?=$Keterangan?></td>
                    <td><?=$nilai?></td>
                    
                  </tr>
          <?php
            //     $tanda++;
            //   }
          ?>
                </tbody>
              </table>