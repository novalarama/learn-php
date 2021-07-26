<?php
/**
 * fungsi adalah blok kode yang akan dijalankan
 * blok kode -> sekumpulan kode yang diapit tanda {}
 */
function prokes(){
    echo "memakai masker ";
    echo "mencuci tangan ";
    echo "menjaga jarak";
}
echo prokes();


function makan($nama){
    echo "cuci tangan ";
    echo "baca doa ";
    echo "kunyah $nama";
}
echo makan ("pentol");
?>