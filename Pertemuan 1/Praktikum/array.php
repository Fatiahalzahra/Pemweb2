<?php

// Array index
$animals = ['Macan','Kucing','Beruang','Ayam'];

array_push($animals, "kambing");

//Mengakses array indeks
var_dump ($animals);

//Array Assosiatif
$animal = [
    'nama' => $animals[2],
    'jenis'=> 'karnivora',
    'usia'=> '4 bulan '
];

// mengakses array assosiatif
echo $animal['nama'];

?>