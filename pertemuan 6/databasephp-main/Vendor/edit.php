<?php 
require_once '../dbkoneksi.php';
$_id = $_GET['id'];
$sql = "SELECT * FROM vendor WHERE id =?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card =$st->fetch();
?>
            
<form method="POST" action="proses.php">
  <div class="form-group row mt-2">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $card['nomor']?>">
        
      </div>
    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama" name="nama" type="text" class="form-control" value="<?= $card['nama']?>">
        
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Kota</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="tmp_lahir" name="kota"  class="form-control" value="<?= $card['kota']?>">
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <div class="input-group">
      <input id="kontak" name="kontak" type="text" class="form-control" value="<?= $card['kontak']?>">
      </div>
    </div>
  </div>

  <input type="hidden" value="<?= $card['id']?>" name="id">
  <div class="form-group row mt-2">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>