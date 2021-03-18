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
    <select name="">
    <?php
         for ($i=1990; $i<=2021; $i++){?>
             <option values="<?=$i;?>"<?php if ($i==1996){echo "selected";}?>><?=$i?></option>   
     <?php } ?>

    ?>
</select>
?>
</body>
</html>


<!-- 
<?php
$a=0;

for ($a=0;
$a<=10;
$a++){
  echo 'Nilai dari a :',"$a","<br/>";
}

?>

