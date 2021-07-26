<?php
/**
 * looping (perulangan)-> mengulang baris kode perintah
 * type of looping -> for, while, do..while
 * Konsep looping:
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisi bernilai true, looping akan berlanjut
 * saat kondisi bernilai false, looping akan berhenti
 */

 //case : menampilkan bilangan kelipatan 7
 /**for ($i=-70; $i <= 100; $i+=7) { 
    echo "$i \n";
 }*/
 $person = [
    ["name"=>"Gopal","address"=>"Madrid","age"=>"43" ],
    ["name"=>"Kaizo","address"=>"Bumi","age"=>"41" ],
    ["name"=>"Kokoci","address"=>"Ciciko","age"=>"22" ],
];
//echo $person[0]['name']." ".$person[0]['address']." ".$person[0]['age']." | ";

for ($i=0; $i < count($person); $i++) { 
  echo $person[$i]['name']." ".$person[$i]['address']." ".$person[$i]['age']." | ";
  
}
?>