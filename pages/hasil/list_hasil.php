        <h3><i class="fa fa-angle-right"></i> List Hasil</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table" style="padding: 15px;">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="myDataTables">
                <thead>
                  <tr>
                    <th>Tanggal Perhitungan</th>
                    <th>Jumlah Logam</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
          <?php
          $sql = "SELECT tanggal,count(nama) as Jlogam FROM tabel_hasil GROUP BY tanggal";
          $result = mysqli_query($connection, $sql);
          $tanda = 1;
              while ($row = mysqli_fetch_assoc($result)) {
                  
          ?>
                  <tr class="gradeX">
                    <td><?=$row['tanggal']?></td>
                    <td><?=$row['Jlogam']?></td>        
                    <td>
                      <a href="dashboard.php?module=list_detail_logam&&tanggal=<?=$row['tanggal']?>"><button type="button" class="btn btn-primary">Lihat</button></a> 
                      <a href="dashboard.php?module=hapus_hasil&&tanggal=<?=$row['tanggal']?>"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                  </tr>
          <?php
                $tanda++;
              }
          ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->