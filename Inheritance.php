<?php

use Produk as GlobalProduk;

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jammain;



    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $jammain)
    {
        $this->judul = "Judul : " . $judul . "<br>";
        $this->penulis = "Penulis : " . $penulis . "<br>";
        $this->penerbit = "Penerbit : " . $penerbit . "<br>";
        $this->harga =  $harga;
        $this->halaman = "Halaman : " . $halaman;
        $this->jammain = "Jam Main : " . $jammain;
    }

    public function Getlabel()
    {
        return "$this->penulis $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = " {$this->judul} |{$this->Getlabel()} | (RP. {$this->harga}) ";

        return $str;
    }
}

class CetakInfoProduck
{

    public function cetak(Produk $Produk)
    {
        $str = "{$Produk->Getlabel()}";

        return $str;
    }
}




// Child Class Komik
class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik <br> {$this->judul}  {$this->Getlabel()} Harga : Rp. {$this->harga} <br>   {$this->halaman} <br> <hr>";
        return $str;
    }
}
//  Child Class Game
class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game <br> {$this->judul} {$this->Getlabel()} Harga : RP. {$this->harga} <br> {$this->jammain} Jam. <br> <hr>";
        return $str;
    }
}

$ProdukKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 10, 0);
$ProdukGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);

echo "<br>";
echo "<hr>";

echo $ProdukKomik->getInfoProduk();

echo $ProdukGame->getInfoProduk();
