<?php
require_once "fungsiBangundatar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body align="center">
    <h3>Segitiga</h3>
    <form name="formkelSegitiga" action="" method="POST">
        <input type="number" name="a" required min=0 placeholder="masukan sisi a">
        <input type="number" name="b" required min=0 placeholder="masukan sisi b">
        <input type="number" name="c" required min=0 placeholder="masukan sisi c">
        <br/><br/>
        <input type="submit" name="kelilingSegitiga" value="Hitung Keliling">
        <button type="reset" onclick="segitiga1()">reset</button>
        <br/><br/>
        <div id="segitiga1">
            <?php
                if(isset($_POST['kelilingSegitiga'])){
                    echo "Keliling Segitiga dengan Sisi a ".$_POST['a']. "Sisi b ".$_POST['b']."dan Sisi c ".$_POST['c']."adalah ".kelilingSegitiga($_POST['a'], $_POST['b'], $_POST['c']);
                }
            ?>
        </div>
    </form>
    <br/>
    <form name="formluasSegitiga" action="" method="POST">
        <input type="number" name="alas" required min=0 placeholder="masukan nilai alas">
        <input type="number" name="tinggi" required min=0 placeholder="masukan nilai tinggi">
        <br/><br/>
        <input type="submit" name="luasSegitiga" value="Hitung Luas">
        <button type="reset" onclick="segitiga2()">reset</button>
        <br/><br/>
        <div id="segitiga2">
            <?php
                if(isset($_POST['luasSegitiga'])){
                    echo "Luas Segitiga dengan alas ".$_POST['alas']." dan Tinggi ".$_POST['tinggi']." adalah  ".luasSegitiga($_POST['alas'], $_POST['tinggi']);
                }
            ?>
        </div>
    </form>
    <br/>
    <h3>Lingkaran</h3>
    <form name="formLingkaran" action="" method="POST">
        <input type="number" name="jari" required min=0 placeholder="Masukan r"> 
        <br/><br/>
        <input type="submit" name="kelilingLingkaran" value="Hitung Kelling">
        <input type="submit" name="luasLingkaran" value="Hitung Luas">
        <button type="reset" onclick="lingkaran()">reset</button>
        <br/><br/>
        <div id="lingkaran">
            <?php
                if(isset($_POST['kelilingLingkaran'])){
                    echo "Keliling Lingkaran dengan jari-jari ".$_POST['jari']." adalah ".kelilingLingkaran($_POST['jari']);
            
                }
                if(isset($_POST['luasLingkaran'])){
                    echo "Luas Lingkaran dengan jari-jari ".$_POST['jari']." adalah ".luasLingkaran($_POST['jari']);
                }
            ?>
        </div>
    </form>
    <br/>
    <h3>jajargenjang</h3>
    <form name="formJajarGenjang" action="" method="POST">
        <input type="number" name="p" required min=0 placeholder="masukan panjang">
        <input type="number" name="l" required min=0 placeholder="masukan lebar">
        <br/><br/>
        <input type="submit" name="kelilingJajargenjang" value="Hitung Keliling">
        <input type="submit" name="luasJajargenjang" value="Hitung Luas">
        <button type="reset" onclick="jajar()">reset</button>
        <br/><br/>
        <div id="jajar">
            <?php
                if(isset($_POST['kelilingJajargenjang'])){
                    echo "Keliling Jajar Genjang dengan Panjang ".$_POST['p']. " Lebar  ".$_POST['l']." adalah ".kelilingJajargenjang($_POST['p'], $_POST['l']);
                }
                if(isset($_POST['luasJajargenjang'])){
                    echo "Luas Jajar Genjang dengan alas ".$_POST['p']." dan Tinggi ".$_POST['l']." adalah ".luasJajargenjang($_POST['p'], $_POST['l']);
                }
            ?>
        </div>
    </form>
    <script>
        function segitiga1(){
            document.getElementById('segitiga1').innerHTML='';
        }
        function segitiga2(){
            document.getElementById('segitiga2').innerHTML='';
        }
        function lingkaran(){
            document.getElementById('lingkaran').innerHTML='';
        }
        function jajar(){
            document.getElementById('jajar').innerHTML='';
        }
    </script>
</body>
</html>