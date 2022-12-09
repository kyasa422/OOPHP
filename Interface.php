<?php 


use Produk as GlobalProduk;


interface InfoProduk
{
    public function getInfoProduk();
}
// parent class 
 abstract class Produk
{
   protected
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

    abstract public function getInfo();

   
  
}

class CetakInfoProduck
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $Produk)
    {
        $this->daftarProduk[] = $Produk;
    }


    public function cetak()
    {
        $str = "Daftar Produk : <br> <hr>";
        
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }
}




// Child Class Komik
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

$ProdukKomik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 10);
$ProdukGame = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000,  50);

$cetakproduk = new CetakInfoProduck();
$cetakproduk->tambahProduk($ProdukKomik);
$cetakproduk->tambahProduk($ProdukGame);
echo $cetakproduk->cetak();


