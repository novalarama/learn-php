<?php

class Penggunaan{
    public $jumlah_penggunaan, $biayaAdmin, $tagihan;
    function __construct($jumlah_penggunaan)
    {
        $this->biayaAdmin = 10000;
        $this->jumlah_penggunaan = $jumlah_penggunaan;
        if ($jumlah_penggunaan <= 10) {
            $this->tagihan = 2000;
        } elseif($jumlah_penggunaan > 10 && $jumlah_penggunaan <= 20) {
             $this->tagihan = 3000;
        } elseif($jumlah_penggunaan > 20 && $jumlah_penggunaan <= 30){
            $this->tagihan = 4000;
        } elseif ($jumlah_penggunaan > 30){
            $this->tagihan = 5000;
        }
    }
}

class Pelanggan{
    public $id, $nama, $penggunaan;
    public function __construct($id, $nama, Penggunaan $penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->penggunaan = $penggunaan;
    }
    public function countBiaya()
    {
        $jumlah_penggunaan = $this->penggunaan->jumlah_penggunaan;
        $biayaAdmin = $this->penggunaan->biayaAdmin;
        $tagihan = $this->penggunaan->tagihan;

        $jumlah = $jumlah_penggunaan * $tagihan + $biayaAdmin;
        return $jumlah;
    }
}
//create object
$penggunaan_Ali = new Penggunaan (8);
$penggunaan_Budi = new Penggunaan (16);
$penggunaan_Dani = new Penggunaan (24);
$penggunaan_Edi= new Penggunaan (50);
$penggunaan_Umar = new Penggunaan (33);

$Ali = new Pelanggan ("1","Ali",$penggunaan_Ali);
echo nl2br("\n Tagihan ".$Ali->nama." dengan nomor id ".$Ali->id." sebesar ".$Ali->countBiaya());

$Budi = new Pelanggan ("2","Budi",$penggunaan_Budi);
echo nl2br("\n Tagihan ".$Budi->nama." dengan nomor id ".$Budi->id." sebesar ".$Budi->countBiaya());

$Dani = new Pelanggan ("3","Dani",$penggunaan_Dani);
echo nl2br("\n Tagihan ".$Dani->nama." dengan nomor id ".$Dani->id." sebesar ".$Dani->countBiaya());

$Edi = new Pelanggan ("4","Edi",$penggunaan_Edi);
echo nl2br("\n Tagihan ".$Edi->nama." dengan nomor id ".$Edi->id." sebesar ".$Edi->countBiaya());

$Umar = new Pelanggan ("5","Umar",$penggunaan_Umar);
echo nl2br("\n Tagihan ".$Umar->nama." dengan nomor id ".$Umar->id." sebesar ".$Umar->countBiaya());


?>