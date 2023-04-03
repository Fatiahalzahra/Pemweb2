<?php 
require_once '../dbkoneksi.php';
?>
            
<form method="POST" action="proses.php">
<div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Tanggal</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-arrow-circle-up"></i>
          </div>
        </div> 
        <input id="tanggal" name="tanggal" value=""
        type="date" class="form-control">
      </div>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="nomor" class="col-4 col-form-label">Nomor</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        < <input id="nomor" name="nomor" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Produk</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM produk";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="produk_id" name="produk_id" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 
  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <div class="input-group">
        <input id="tmp_lahir" name="jumlah" value=""type="number" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <div class="input-group">
      <input id="nama" name="harga" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Vendor</label> 
    <div class="col-8">
        <?php 
            $sqljenis = "SELECT * FROM vendor";
            $rsjenis = $dbh->query($sqljenis);
        ?>
      <select id="vendor_id" name="vendor_id" class="custom-select">
          <?php 
            foreach($rsjenis as $rowjenis){
         ?>
            <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama']?></option>
         <?php
            }
        ?>
        <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

      </select>
    </div>
  </div> 

  <div class="form-group row mt-2">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-primary" value="Simpan"/>
    </div>
  </div>
</form>