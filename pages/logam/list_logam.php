        <h3><i class="fa fa-angle-right"></i> List Logam</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table" style="padding: 15px;">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Nama Logam</th>
                    <th>Keterangan</th>

          <?php
          $sqlNamakriteria = "SELECT * FROM tabel_kriteria ORDER BY id_kriteria ASC";
          $resultNamaKriteria = mysqli_query($connection, $sqlNamakriteria);
              while ($hasilNamaKriteria = mysqli_fetch_assoc($resultNamaKriteria)) {
          ?>
                    <th><?=$hasilNamaKriteria['kriteria']?></th>
          <?php
          }
          ?>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT * FROM tabel_logam";
          $result = mysqli_query($connection, $sql);
              while ($row = mysqli_fetch_assoc($result)) {
          ?>
                  <tr class="gradeX">
                    <td><?=$row['nama']?></td>
                    <td><?=$row['Keterangan']?></td>
                    <td><?=$row['Kepadatan']?></td>
                    <td><?=$row['Harga']?></td>
                    <td><?=$row['Berat']?></td>
                    <td><?=$row['Titik_Lebur']?></td>
                    <td><?=$row['Jumlah']?></td>
                    <td class="hidden-phone">
                        <a href="dashboard.php?module=update_logam&id_logam=<?=$row['id_logam']?>"><button type="button" class="btn btn-warning"><i class="fa fa-cog"></i> Update</button></a>
                        <a href="dashboard.php?module=hapus_logam&id_logam=<?=$row['id_logam']?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button></a>
                    </td>
                  </tr>
          <?php
              }
          ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->