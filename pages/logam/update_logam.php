<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Data</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Nilai</a>
    </li>
  </ul>

<?php
$id_logam = $_GET['id_logam'];
$sql = "SELECT * FROM tabel_logam WHERE id_logam = $id_logam";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form class="form-horizontal style-form" method="POST" action="pages/logam/aksi_edit.php?id_logam=<?=$id_logam?>">
  <!-- Tab panes -->
  <div class="tab-content" style="background-color: white;padding: 20px;">
    <div id="home" class="tab-pane active">
      <h3>Data Diri</h3>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Nama </label>
          <div class="col-sm-10">
            <input type="text" class="form-control round-form" name="nama" value="<?=$row['nama']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Keterangan </label>
          <div class="col-sm-10">
              <textarea class="form-control" rows="5" id="comment" name="Keterangan"><?=$row['Keterangan']?></textarea>
          </div>
        </div>      
    </div>
    <div id="menu1" class=" tab-pane fade">
      <h3>Nilai Logam</h3>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Kepadatan </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="Kepadatan" value="<?=$row['Kepadatan']?>">
          </div>
        </div>
      <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Harga/Kg </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="Harga" value="<?=$row['Harga']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Berat/Kg </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="Berat" value="<?=$row['Berat']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Titik Lebur °C </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="Titik_Lebur" value="<?=$row['Titik_Lebur']?>">
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 col-sm-2 control-label">Jumlah </label>
          <div class="col-sm-10">
            <input type="number" class="form-control round-form" name="Jumlah" value="<?=$row['Jumlah']?>">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" style="text-align: center;">
            <button type="submit" class="btn btn-theme03">Masukan</button>
            <button type="reset" class="btn btn-theme04">Reset</button>
          </div>
        </div>
      
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>

  </form>