<?php 
//  Child Class Game
class Game extends Produk implements InfoProduk
{
    public $waktumain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktumain)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktumain);
        $this->waktumain = $waktumain;
    }
    // Cara mendapatkan harga dari visibility protected
    public function getharga() {
        return $this->harga;
    }
    public function getInfo()
    {
        $str = " {$this->judul} | {$this->Getlabel()} (Rp. {$this->harga}) ";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game  " . $this->getInfo   () . " {$this->waktumain} <br> <hr>";
        // $str = "Game <br> {$this->judul} {$this->Getlabel()} Harga : RP. {$this->harga} <br> {$this->jammain} Jam. <br> <hr>";
        return $str;
    }
}