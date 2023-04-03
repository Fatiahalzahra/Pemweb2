<?php 
require_once '../dbkoneksi.php';
$_id = $_GET['id'];
$sql = "SELECT * FROM pembelian WHERE id =?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card =$st->fetch();
?>
            
<form method="POST" action="proses_pembelian.php">
  <div class="form-group row mt-2">
    <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="kode" name="tanggal" type="text" class="form-control" value="<?= $card['tanggal']?>">
        
      </div>
    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="nama" name="nomor" type="text" class="form-control" value="<?= $card['nomor']?>">
        
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="tmp_lahir" name="produk_id"  class="form-control" value="<?= $card['produk_id']?>">
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
      <input id="nama" name="produk" type="text" class="form-control" value="<?= $card['harga']?>">
      </div>
    </div>
  </div>

  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Vendor</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="tmp_lahir" name="vendor_id"  class="form-control" value="<?= $card['vendor_id']?>">
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
</form><?php 
