<?php
    $baju = array(
        array("nama" => "tono" , "ukuran" => 40),
        array("nama" => "supri" , "ukuran" => 50),
        array("nama" => "bambang" , "ukuran" => 60)
    ); 

    function tipe_ukuran($ukuran){
        if ($ukuran >= 50){
            return "size XL";
        }
        else {
            return "tidak ada";
        }
    }

    foreach ($baju as $data){
        echo "Nama : ". $data["nama"]. "</br>";
        echo "Ukuran : ". $data["ukuran"]. "</br>";
        echo "ukuran baju anda :" . tipe_ukuran($data["ukuran"]) . "</br>";
    }
?>