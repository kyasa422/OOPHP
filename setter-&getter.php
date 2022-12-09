<?php 


use Produk as GlobalProduk;

class Produk
{
   private
                $penulis,
                $penerbit,
                $harga,
                $judul,
                $diskon = 0;
                
                public function __construct($judul, $penulis, $penerbit, $harga)
                {
                    $this->judul = "Judul : " . $judul . "<br>";
                    $this->penulis = "Penulis : " . $penulis . "<br>";
                    $this->penerbit = "Penerbit : " . $penerbit . "<br>";
                    $this->harga =  $harga;
                
            
                }

    function setpenulis($penulis)
        {
            $this->penulis = $penulis;
        }
    function getpenulis()
        {
            return $this->penulis;
        }            

    function setpenerbit($penerbit)
        {
            $this->penerbit = $penerbit;
        }
    function getpenerbit()
        {
            return $this->penerbit;
        }
    function setharga($harga)
        {
            $this->harga = $harga;
        }
    function getharga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    
    function setjudul($judul)
        {
            $this->judul = $judul;
        }

    function getjudul()
        {
            return $this->judul;
        }


    public function setdiskon($diskon)
    {
       return $this->diskon = $diskon;
    }


   
 

    public function Getlabel()
    {
        return "$this->penulis $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
        $str = " <br> {$this->judul}  {$this->Getlabel()}   (RP. {$this->harga}) ";

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
    public $jmlhalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlhalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $jmlhalaman);
        $this->jmlhalaman = $jmlhalaman;
    }

  

    public function getInfoProduk()
    {
        $str = "Komik  " . parent::getInfoProduk() . " {$this->jmlhalaman} <br> <hr>";
        // $str = "Komik <br> {$this->judul}  {$this->Getlabel()} Harga : Rp. {$this->harga} <br>   {$this->halaman} <br> <hr>";
        return $str;
    }
}

//  Child Class Game
class Game extends Produk
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

    public function getInfoProduk()
    {
        $str = "Game  " . parent::getInfoProduk() . " {$this->waktumain} <br> <hr>";
        // $str = "Game <br> {$this->judul} {$this->Getlabel()} Harga : RP. {$this->harga} <br> {$this->jammain} Jam. <br> <hr>";
        return $str;
    }
}

$ProdukKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 10);
$ProdukGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,  50);

echo "<br>";
echo "<hr>";

echo $ProdukKomik->getInfoProduk();

echo $ProdukGame->getInfoProduk();

$ProdukKomik->setpenulis("Agus Setiawan");
$ProdukKomik->setdiskon(10);
 echo $ProdukKomik->setjudul("Horimiya");
echo" harga ". $ProdukKomik->getharga();
echo" <br> ";
echo" judul ". $ProdukKomik->getjudul();
echo" <br> ";
echo" penulis ". $ProdukKomik->getpenulis();

