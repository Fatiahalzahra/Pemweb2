<!DOCTYPE html>
<html>
<head>
<title>AL Pet Shop</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("/Projek_uts Web 2/Tugas_UTS/logo.png");
  min-height: 180%;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top w3-hide-small">
  <div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
    <a href="#" class="w3-bar-item w3-button">HOME</a>
    <a href="#menu" class="w3-bar-item w3-button">DAFTAR PRODUK</a>
    <a href="#about" class="w3-bar-item w3-button">TENTANG</a>
    <a href="#myMap" class="w3-bar-item w3-button">HALAMAN ADMIN</a>
  </div>
</div>
  
<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-padding">
    <span class="w3-tag w3-xlarge"> Buka Dari Jm 9 pagi - 8 malam</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white w3-hide-small" style="font-size:100px">AL<br>PETSHOP</span>
    <span class="w3-text-white w3-hide-large w3-hide-medium" style="font-size:60px"><b>AL<br>PETSHOP</b></span>
    <p><a href="#menu" class="w3-button w3-xxlarge w3-black"> Silahkan Pesan Di Sini</a></p>
  </div>
</header>

<!-- Menu Container -->
<div class="w3-container w3-black w3-padding-64 w3-xxlarge" id="menu">
  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Daftar Produk</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Makanan Kucing</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Obat Dan Kesehatan</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Perlengkapan</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Royal Canin</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.65.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
      <br>1. Royal Canin Indoor 7+ : Untuk kucing lanjut usia.</br>
      <br>2. Royal Canin Indoor 27 : Khusus kucing yang beraktivitas dalam ruangan.</br>
    </p>
    <p class="hidden">
    <br>3. Royal Canin Exigent 33 : Mengandung formula khusus untuk kucing yang aktif.</br>
    <br>4. Royal Canin Digestive Care : Membantu mengatasi masalah pencernaan.</br>
      
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
  </body>
</html>
</p>
<a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
 <hr>
   
      <h1><b>Whiskas</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.50.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Terbuat dari bahan-bahan pilihan berkualitas tinggi. Yang mengandung omega 3 & 6,zinc, dan asam lemak.pada WHISKas dapat membuat bulu semakin mengkilap dan kulit sehat.
    </p>
    <p class="hidden">
    Terdapat beberapa pilihan antara lain adalah, ikan laut, tus, makanan laut, ikan saba panggang, steak salmon, dan ayam.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
  </body>
</p>
<a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>
      
      <h1><b>Ori Cat</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.20.000</span></h1>
      <p class="w3-text-grey"><p>
      Komposisi produk ORI CAT cukup lengkap, yaitu terdiri dari daging kambing, daging sapi, ikan laut, vitamin, dan bahan tambahan lain.
    </p>
    <p class="hidden">
    Selain memiliki tekstur renyah dengan rasa yang pasti disukai oleh kucing. Ori Cat juga bermanfaat untuk Meningkatkan daya tahan tubuh,Menjaga kesehatan saluran pencernaan,Membantu pertumbuhan otot,Melindungi tubuh dari radikal bebas 
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
  </body>
</p>
<a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>

      <h1><b>Me-O</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.22.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Me-O Wet Food dibuat dengan formula rendah sodium yang dapat mencegah kucingmu terhindar dari berbagai risiko penyakit seperti penyakit ginjal, darah tinggi, dan jantung. 
    </p>
    <p class="hidden">
    Kombinasi antara fosfor, vitamin D, dan kalsium di dalam produk ini akan memelihra kepadatan tulang dan gigi kucing. Sedangkan vitamin C yang membantu meningkatkan kekebalan tubuh kucing.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
  </body>
</p>
<a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>

      <h1><b>Happy Cat</b> <span class="w3-right w3-dark-grey w3-round">Rp.25.900</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Happy Cat VET Diet pun dapat dikonsumsi kucing dengan gangguan gastrointestinal akut hingga kronis sekalipun. Produk ini memiliki formula yang efektif mengurangi stres pada sistem pencernaan kucing.
    </p>
    <p class="hidden">
    Selain itu produk ini juga mudah dicerna. Serat makanan yang terkandung di dalamnya dapat menstabilkan konsistensi tinja kucing berkat kandungan air yang terjaga.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>

      <h1><b>Friskies Ocean Platter</b> <span class="w3-tag w3-red w3-round">BEST SELLER</span><span class="w3-right w3-tag w3-dark-grey w3-round">Rp.33.500</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Friskies Ocean Platter memiliki kandungan protein yang tinggi.Kalau kucingmu tampak kurus dan malas makan, merk ini adalah makanan basah yang sangat cocok.
    <p class="hidden">
    Friskies Ocean Platter dibuat dengan tekstur lembut dengan rasa lezat, serta kandungan protein yang tinggi juga membantu memperkuat pertumbuhan otot agar kucing tetap aktif dan kuat.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Antibiotik</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 8.900 - 250.000</span></h1>
      <p class="w3-text-grey"> <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Ampisilin, Penisilin, Amoksisilin,Cefotaxime, Cefadroxil,Gentamisin, Steptomisin, Tobramycin, Neomisin,Kloramfenicol, Tiamfenicol.

    <p class="hidden">
    Eritromisin, Spiramisin,Sulfamethoxazole, Trimethoprim, Sulfalazine,Ciprofloxacin, Lefofloxacin,Doksisiklin, Oksitetrasiklin.

    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>
   
      <h1><b>Obat Vaksin</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 120.000 - 250.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    AVIAN INFLUENZA ANTHRAX,NEW CASTLE DISEASE.
    <p class="hidden">
    MAREKS DISEASE,RABIES,SALMONELLA,INFECTIOUS BRONCHITIS.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>
      
      <h1><b>Obat Cacing</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.15.750 - 21.340 </span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Fenbendazole,Pirantel pamoat,Praziquantel,Catyzole Drop.
    <p class="hidden">
    Ivermectin,Albendazole,Drontal Cat, Pet Derm,ALBENWORM Cat Syrup,Wormix,
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>

      <h1><b>Vitamin</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.200.000 - 550.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Virbac Nutri Plus Gel,Dermatrix Kucing,NuPro,Minyak Ikan Fish O Plus.
    <p class="hidden">
    The Missing Link,Kitzyme,Vita Gel,Stimulo,
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Kandang </b><span class="w3-right w3-tag w3-dark-grey w3-round">Rp.210.000 - 530.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Navy,Matcha,Peach,Purple,Cream,Pink Fanta,Rosy Brown.
    <p class="hidden">
    Soft Violet,Mauve,Charclo,Coral,Beige,Orange,Fuchia,Army.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
</a>
      <hr>
   
      <h1><b>Pasir</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.20.000 - 65.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Catsan Ultra Odor Control Formula, Keskow Organik,Ketz Woodz.
    <p class="hidden">
    Yihu Aristo Natural Cat Litter,Downy Cat Sand,Eco Clean Tofu Cat Litter,Maxi Catsand,Pet Kingdom Ultra Odor Seal Unscented,Cature Tofu Clumping Litter, Happy Pety Wood Pellet.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>
      
      <h1><b>Susu untuk Kucing dan anjing</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp. 55.000 - 275.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Growssy,Royal Canin, KMR,Top Growth,Beaphar.
    <p class="hidden">
    Ameri Pro,Zeal,Premium Milk Replacer,Milk Replacer for Kitten,Milk Cats,Dr. K Pet Milk.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>
      <hr>
      
      <h1><b>Shampo</b> <span class="w3-right w3-tag w3-dark-grey w3-round">Rp.15.000 - 50.000</span></h1>
      <p class="w3-text-grey"><head>
  <style>
      .hidden {
        display: none;
      }
      .show-more {
        color: blue;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <p>
    Safira Premium Pet Shampoo,Anti Flea & Tick Shampoo,Smooth Touch Cat Shampo.
    <p class="hidden">
    Shampo Kucing Oil Free Degreaser,Medicated Cat Shampoo,Shampoo Kucing Disinsectization,Cat Dry Shampoo,Cat Shampoo Especially Mild Care,Kuddly Kitty Tearless Kitten Shampoo.
    </p>
    <p class="show-more" onclick="showMore()">Selengkapnya</p>
    <script>
      function showMore() {
        var hidden = document.querySelectorAll('.hidden');
        for (var i = 0; i < hidden.length; i++) {
          hidden[i].style.display = 'block';
        }
        document.querySelector('.show-more').style.display = 'none';
      }
    </script>
    </p>
    <a href="form_pesanan.php" class="btn btn-primary">Beli Disini</a>

    </div><br>

  </div>
</div>

<!-- About Container -->
<div class="w3-container w3-padding-64 w3-red w3-grayscale w3-xlarge" id="about">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Tentang Toko</h1>
    <p>Al Petshop didirikan pada tahun 2012, Al Petshop menyajikan produk produk berkualitas tinggi dan telah teruji klinis. AL Petshop Terkenal Sebagai Petshop Terbaik yang ada di Jakarta,
       hal ini Terbukti Karena Telah mendapatkan Beberapa penghargaan dan juga Dokter yang Bekerja di Al Petshop merupakan tenaga ahli professional yang telah memiliki sertifikat nasional maupun internasional.</p>
    <p><strong>The Owner</strong> Al Zyra</p>
    <p>Petshop kami juga menyediakan layanan pemeriksaan hewan.</p>
    <img src="logo.png" style="width:50%" class="w3-margin-top w3-margin-bottom" alt="Petshop">
    <h1><b>Opening Hours</b></h1>
    
    <div class="w3-row">
      <div class="w3-col s6">
        <p>Tutup Minggu</p>
        <p>Senin 09:00 - 20:00</p>
        <p>Selasa 09:00 - 20:00</p>
        <p>Rabu 09:00 - 20:00</p>
      </div>
      <div class="w3-col s6">
        <p>Kamis 09:00 - 20:00</p>
        <p>Jumat 08:00 - 11:00</p>
        <p>Sabtu 08:00 - 20:00</p>
      </div>
    </div>
    
  </div>
</div>

<!-- Image of location/map -->
<img src="logo.png" class="w3-image w3-greyscale" style="width:100%;" id="myMap">

<!-- Contact -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">HALAMAN ADMIN</h1>
    <p>Temukan kami di Gerai kami yang ada di Jakarta dan Jawa Barat Atau bisa hubungi kami ke nomer 0855-6654-7889</p>
    <p><span class="w3-tag">INFO!</span> Kami Melayani Pemeriksaan Hewan Dan Rawat inap dan kami juga melayani pembelian via COD</p>
    <p class="w3-xxlarge"><strong>Berikut</strong>  adalah keterangan stok yang tersedia:</p>
    <?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_produk.php" role="button">Create Produk</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th><th>Kode</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['kode']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['jenis_produk']?></td>
                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  

  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Create By Fatiah Al Zahra TI07</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
