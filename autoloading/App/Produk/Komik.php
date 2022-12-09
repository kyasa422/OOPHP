<?php 
// Child Class Komik
require_once 'Produk.php';
require_once 'InfoProduk.php';

class Komik extends Produk implements InfoProduk
{
    public $jmlhalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlhalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlhalaman);
        $this->jmlhalaman = $jmlhalaman;
    }

    public function getInfo()
    {
        $str = " {$this->judul} | {$this->Getlabel()} (Rp. {$this->harga}) ";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik  " . $this->getInfo() . " {$this->jmlhalaman} <br> <hr>";
        // $str = "Komik <br> {$this->judul}  {$this->Getlabel()} Harga : Rp. {$this->harga} <br>   {$this->halaman} <br> <hr>";
        return $str;
    }
}
