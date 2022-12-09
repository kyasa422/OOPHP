<?php

// jika menggunakan static keyword maka kita tidak perlu membuat object baru untuk mengakses methodnya 
    class ContohStatic
    {
        public static $angka = 1;

        public static function halo()
        {

            // menggunakan self:: untuk mengakses property static
            
            return "Halo " . self::$angka++ . " kali.";
        }
    }

    echo ContohStatic::$angka;
    echo "<br>";
    echo ContohStatic::halo();
    echo "<br>";
    echo "<hr>";


    // ======================================= 
    class Contoh
    {
        public static $angka = 1;

        public function halo()
        {

            // menggunakan self:: untuk mengakses property static
            
            return "Halo " . self::$angka++ . " kali. <br>";
        }
    }

    $obj = new Contoh;

    echo "menggunakan static keyword <br>";
    echo $obj->halo();
    
    echo $obj->halo();

    echo $obj->halo();

    echo "<hr>";
    $obj2 = new Contoh;
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();

    echo "<hr>";
    class ContohTidakStatic
    {
        public  $angka = 1;

        public function halo()
        {

            // menggunakan self:: untuk mengakses property static
            
            return "Halo " . $this->angka++ . " kali.<br>";
        }
    }
    echo "tidak menggunakan static keyword <br>";
    $obj = new ContohTidakStatic;
      echo $obj->halo();
      echo $obj->halo();
      echo $obj->halo();
        echo "<hr>";
    $obj2 = new ContohTidakStatic;
        echo $obj2->halo();
        echo $obj2->halo();
        echo $obj2->halo();


?>
