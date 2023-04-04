<?php
class Hero{
    //Attribut / Propeties pada class
    public $name;
    public $health;
    public $damage;
    public $level = 1;

    //constructor(method atau fungsion) akan di jalankan secara otomatis
    public function __construct($name,$health,$damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }
    //method untuk menampilkan informasi hero
    public function getInfo(){
        echo "Nama hero: " . $this->name;
        echo "<br> Level: "  . $this->level;
        echo "<br> HP: "  . $this->health;
        echo "<br> Damage: "  . $this->damage;
    }
    //method untuk naik satu level
    public function levelUp(){
        $this->level += 1;
    }
}

// setiap mau membuat kelas di wajibkan memakai huruf kapital di awal
//membuat Objek dari kelas hero
$hero1 = new Hero('Aluchard', 3200, 200);
$hero2 = new Hero('Franco', 5000, 50);

//memanggil method
$hero1->getInfo();

echo "<br> <hr>";

$hero1->levelUp();
$hero1->getInfo();