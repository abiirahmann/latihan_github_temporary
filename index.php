<?php
    require_once 'myClass.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // pembuatan objek
        $pesawatA= new PesawatTerbang('abu-abu');
        echo "Warna awal pesawat A adalah: ".$pesawatA->getWarna();
        echo "<br/>";
    // memberikan nilai
        $pesawatA->setWarna('merah');
    // mendapatkan nilai
        echo "Warna pesawat A adalah: ". $pesawatA->getWarna();
        echo "<hr/>";
    // class mobil
        $mobilA= new mobil('merah');
        echo "Warna mobil A adalah: ".$mobilA->getWarna();
        echo "<br/>";
        echo "Kecepatan mobil A adalah: ".$mobilA->getKecepatan();
        $mobilA->tambahKecepatan(20);
        echo "<br/>";
        echo "Kecepatan mobil A adalah: ".$mobilA->getKecepatan();
        $mobilA->tambahKecepatan(30);
        echo "<br/>";
        echo "kecepatan mobil A adalah: ".$mobilA->getKecepatan();
        echo "<hr/>";
    // class mobilBalap, pemanggilan class child
        $mobilB= new mobilBalap('biru');
        echo "Warna mobil B adalah: ".$mobilB->getWarna();
        echo "<br/>";
        echo "Kecepatan mobil B adalah: ".$mobilB->getKecepatan();
        echo "<br/>";
        $mobilB->tambahKecepatan(50);
        echo "Kecepatan mobil B adalah: ".$mobilB->getKecepatan();
        echo "<br/>";
        $mobilB->tambahKecepatan(100);
        echo "Kecepatan mobil B adalah: ".$mobilB->getKecepatan();
        echo "<hr/>";
    
    // Lingkaran
        $lingkaran= new lingkaran(10);
        echo "Keliling dari lingkaran tersebut adalah: ".$lingkaran->getKeliling();
        echo "<br/>";
        echo "Luas dari lingkaran tersebut adalah: ".$lingkaran->getLuas();
        echo "<br/>";
    ?>
    
</body>
</html>