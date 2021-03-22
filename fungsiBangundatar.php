
<?php

function kelilingSegitiga($a, $b, $c){
    $keling= $a + $b + $c;
    return $keling;
    
}
// echo 'keliling dari segitiga ini adalah '.kelilingSegitiga(2, 3, 4);
// echo "<br/>";

function luasSegitiga($alas, $tinggi){
    $luas= $alas * $tinggi * 0.5;
    return $luas;
}
// echo 'Luas Lingkaran ini adalah '.luasSegitiga(10, 10);
// echo "<br/>";

function kelilingLingkaran($jari){
    $keling= 3.14 * $jari * 2;
    return $keling;
}
// echo 'keliling lingkaran ini adalah '.kelilingLingkaran(10);
// echo "<br/>";

function luasLingkaran($jari){
    $luas= 3.14 * $jari * $jari;
    return $luas;
}
// echo 'luas lingkaran ini adalah '.luasLingkaran(10, 10);
// echo "<br/>";

function kelilingJajargenjang($p, $l){
    $keling= 2 * ( $p + $l);
    return $keling;
}
// echo 'keliling jajargenjang ini adalah '.kelilingJajargenjang(5, 5);
// echo "<br/>";

function luasJajargenjang($p, $l){
    $luas= $p * $l;
    return $luas;
}
// echo 'luas jajargenjang ini adalah '.luasJajargenjang($_POST, 20);
// echo "<br/>";
?>