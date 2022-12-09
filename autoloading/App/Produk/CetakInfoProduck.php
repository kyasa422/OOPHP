<?php
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