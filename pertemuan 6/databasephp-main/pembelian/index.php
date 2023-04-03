<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pembelian";
   $cards = $dbh->query($sql);
?>

      <a class="btn btn-success" href="create.php" role="button">Create Pembelian</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>nomor</th>
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Vendor</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($cards as $card){
                ?>
                    <tr>
                        <td><?=$nomor++?></td>
                        <td><?=$card['tanggal']?></td>
                        <td><?=$card['nomor']?></td>
                        <td><?=$card['produk_id']?></td>
                        <td><?=$card['jumlah']?></td>
                        <td><?=$card['harga']?></td>
                        <td><?=$card['vendor_id']?></td>
                    
 <td>
<a class="btn btn-primary" href="read.php?id=<?=$card['id']?>">Read</a>
<a class="btn btn-primary" href="edit.php?id=<?=$card['id']?>">Edit</a>
<a class="btn btn-primary" href="delete.php?iddel=<?=$card['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$card['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>