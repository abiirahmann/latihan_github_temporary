<?php
//memasukan nilai kedalam array
$mobil = array("Volvo","BMW","Toyota");

//aray dapat diurutkan secara Ascending
sort($mobil);
//mendapatkan jumlah nilai dari array $mobil
$length=count($mobil);

//dengan looping menampilkan tiap nilai dari array
for($x=0; $x<$length; $x++){
    echo $mobil[$x];
    echo "<br/>";
}
?>