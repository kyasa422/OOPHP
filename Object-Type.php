<?php

use Produk as GlobalProduk;

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $halaman,
        $jammain,
        $tipe;


    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $jammain, $tipe)
    {
        $this->judul = "Judul : " . $judul . "<br>";
        $this->penulis = "Penulis : " . $penulis . "<br>";
        $this->penerbit = "Penerbit : " . $penerbit . "<br>";
        $this->harga = "Harga : " . $harga;
        $this->halaman = "Halaman : " . $halaman;
        $this->jammain = "Jam Main : " . $jammain;
        $this->tipe = "Tipe : " . $tipe . "<br>";
    }

    public function Getlabel()
    {
        return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
    }

    public function GetlabelLengkap()
    {
        $str = "{$this->tipe}  {$this->Getlabel()} | {$this->halaman} | {$this->jammain}";
        if ($this->tipe == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->jammain} Jam.";
        }
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

$ProdukKomik = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 10, 0, "Komik");
echo " Komik : " . $ProdukKomik->Getlabel();



$ProdukGame = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo "<br>";
echo "<hr>";
$infoProduk1 = new CetakInfoProduck();
// echo $infoProduk1->cetak($ProdukGame);

echo $ProdukKomik->GetlabelLengkap();

echo "<br>";
echo "<hr>";

echo $infoProduk1->cetak($ProdukKomik);
echo "<hr>";
var_dump($infoProduk1->cetak($ProdukKomik));
