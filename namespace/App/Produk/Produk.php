<?php
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
