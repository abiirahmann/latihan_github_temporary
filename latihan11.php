<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Document</title>
   
</head>
<body>

<?php
  if (isset($_POST['hitung'])) {
    $buku = $_POST['buku'];

    function totalHarga($buku){
        $bayar= 9000 * $buku;
        return $bayar;
    }  
    function jumlahDiskon($buku){
        if($buku>36){
            $hargadiskon= $buku*9000*0.05;
        }else{
            $hargadiskon= 0;
        }
        return $hargadiskon;
    }
    function totalPembayaran($totalHarga, $diskon){
        $totalPembayaran= $totalHarga - $diskon;
        return $totalPembayaran;
    }

    $totalHarga = totalHarga($buku);
    $jumlahDiskon = jumlahDiskon($buku);
    $totalPembayaran = totalPembayaran($totalHarga, $jumlahDiskon);
}
?>                  
<!-- Form -->
    <div align="center">
        <div class="card w-25 bg-light">
        <div class="card-header">
            Kasir Indomaret
        </div>
        <div class="card-body" align="center">
            <form method="POST" action="">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Jumlah Barang</label>
                    <input type="number" class="form-control" name="buku">
                    <!-- proses -->
                </div>
            </div>
            <button type="submit" class="btn btn-success" name="hitung">Hitung</button>
            </form>
        </div>
        <div class="keterangan" align="justify">
            <p>Harga Pembelian Buku <?php if(isset($buku)){ echo $buku; }?></p>
            <p>Harga Bayar Buku <?php if(isset($totalHarga)){ echo $totalHarga; }?></p>
            <p>Harga Diskon Buku <?php if(isset($jumlahDiskon)){ echo $jumlahDiskon; }?></p>
            <p>Harga Total Pembelian buku Buku <?php if(isset($totalPembayaran)){ echo $totalPembayaran; }?></p>
        </div>
    </div>


</body>
</html>