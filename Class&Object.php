<?php 

class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    
    public function label() {
        return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
     
    }

    public function label1() {
        return "$this->judul,$this->penulis,$this->penerbit,$this->harga";
     
    }
  
}

$produk1  = new Produk();
$produk1 ->judul = "Naruto"; 
$produk1 ->penulis = "Masashi Kishimoto";
$produk1 ->penerbit = "Shonen Jump";
$produk1 ->harga = 30000;

echo "<br>";
echo "Komik : $produk1->penulis, $produk1->penerbit";
 
echo "<hr>";

echo  " komik : ".$produk1->label();

echo "<hr>";

$produk2  = new Produk();
$produk2 ->judul = "Game of Thrones <br>";
$produk2 ->penulis = "Ahmad <br>";
$produk2 ->penerbit = "Sony Computer <br>";
$produk2 ->harga = 250000;
echo  "Game : ".$produk2->label1();



?>