<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 align="center" class="text-warning">Form Input</h2>
          <form action="" method="POST" align="center">
                <div class="form-input">
                    <label for="inputhitung">Jumlah Input</label><br/>
                    <input type="number"  name="input" class="form-input" id="hitungjumlahbeli" required>
                </div><br/>
                <button type="submit" class="btn btn-primary" name="inputin">Submit</button>
          </form>
    <?php
$c = null;
// False because $b is NULL
if (isset($_POST['inputin'])) {
  $c=$_POST['input'];

$c=$_POST['input'];

        for( $a=1;$a<=$c;$a++){
            for($b=1;$b<=$a;$b++){
                echo"x";
            }
        echo"<br>";
        }
}       
    ?>
</body>
</html>


<!-- for($a=1; $a<=6; $a++)
        {
            for($i=1; $i<=$a; $i++)
            {
                if($a==3){
                    if($i !=2)
                    {
                        echo $a;
                    }else
                    {
                        echo 'x';
                    }
                }else
                {
                    echo $a;
                }
            }
            echo "<br/>";
        } -->