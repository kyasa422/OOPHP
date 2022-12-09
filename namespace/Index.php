<?php

 require_once 'App/init.php';
    

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;


// $ProdukKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 10);
// $ProdukGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,  50);

// $cetakproduk = new CetakInfoProduck();
// $cetakproduk->tambahProduk($ProdukKomik);
// $cetakproduk->tambahProduk($ProdukGame);
// echo $cetakproduk->cetak();

// echo "<hr>";

// new Coba();
new ServiceUser();
echo "<hr>";
new ProdukUser();