<?php
$siswa = ["Noval","Akbar","Ramadhany","Anirbas","Aydiala"];
/**
 * Array adalah kumpulan nilai yang memiliki tipe data sama
 * variabel -> individu
 * Array -> sekumpulan /populasi
 */

echo $siswa[2];

//array numeric -> array yang indexnya berupa numerik
//array assosiative -> array yang indexnya berupa String
// => merupakan penghubung untuk index dengan value nya
$person = [
    ["name"=>"Gopal","address"=>"Madrid","age"=>"43" ],
    ["name"=>"Kaizo","address"=>"Bumi","age"=>"41" ],
    ["name"=>"Kokoci","address"=>"Ciciko","age"=>"22" ],
];
echo $person[2]["name"];
?>