<?php

 require_once 'App/init.php';
    


$ProdukKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 10);
$ProdukGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,  50);

$cetakproduk = new CetakInfoProduck();
$cetakproduk->tambahProduk($ProdukKomik);
$cetakproduk->tambahProduk($ProdukGame);
echo $cetakproduk->cetak();

echo "<hr>";

new Coba();
