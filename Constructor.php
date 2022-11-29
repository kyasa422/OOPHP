<?php

use Produk as GlobalProduk;

    class Produk {
        public $judul,
               $penulis,
               $penerbit,
               $harga;

        public function __construct($judul, $penulis, $penerbit, $harga ) {
            $this->judul = "Judul : ".$judul."<br>";
            $this->penulis ="Penulis : ". $penulis."<br>";
            $this->penerbit ="Penerbit : ". $penerbit. "<br>";
            $this->harga ="Harga : ". $harga;

        }
        
        public function Getlabel() {
            return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
         
        }
    
      
    }

    $ProdukGame = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    echo " Komik : ".$ProdukGame->label();
