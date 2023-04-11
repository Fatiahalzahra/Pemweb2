<?php
class Motor 
{
  public $merk;
  public $bensin;
  public $topSpeed;
  public $cc;

  public function __construct($merk, $bensin, $topSpeed, $cc)
  {
    $this->merk = $merk;
    $this->bensin = $bensin;
    $this->topSpeed = $topSpeed;
    $this->cc = $cc;
  }
  public function jalan($jarak) //kilometer
  {
    $jalan = $jarak / 50;
    $waktu = $jarak / $this->topSpeed;
    $this->bensin -= $jalan;
    
    echo "Motor <p>$this->merk $this->cc CC</b> telah berjalan sepanjang <b>$jarak km</b>
     dengan kecepatan<b>$this->topSpeed km/h</b>, sampai ke tempat tujuan dengan waktu <b>$waktu jam</b>
     dan bensin yang tersisa yaitu <b>$this->bensin Liter</b> <hr><br>";

  }
}

$motor = new Motor('Beat', 4, 400, 350);
$motor->Jalan(20);

$motor2 = new Motor('Nmax', 15, 700, 850);
$motor2->Jalan(20);

$motor3 = new Motor('Scoppy', 3, 700, 2500);
$motor3->Jalan(60);

$motor4 = new Motor('Supra ', 3, 50, 20000);
$motor4->jalan(70);

?>