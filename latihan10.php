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
    <div align="center">
        <div class="card w-25 bg-light">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputUsername3">Username</label>
                <input type="username" class="form-control" id="exampleInputUsername3" aria-describedby="usernameHelp" name="usernm">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="showpass" name="passwr">
            </div>
            <input type="checkbox" onclick="showPass()">
            <label for="showpass">Show Password</label><br/>
            <button type="submit" class="btn btn-success" name="masuk">Submit</button></a>  
            </form>
        </div>
        </div>
    </div>
    <!-- proses -->
    <?php
        if(isset($_POST['masuk'])){
            $nama= $_POST['usernm'];
            $pass= $_POST['passwr'];
            cekLogin($nama, $pass);
        }
        function cekLogin($nama, $pass){
            if($nama=="admin" && $pass=="passadmin"){
                header("location:latihan11.php");
            }else {
                echo "<script> alert('username dan password anda salah. Coba Lagi!!!')</script>";
            }
        }
    ?>
    <script>
        function showPass() {
        var x = document.getElementById("showpass").type;
  
        if (x === "password") {
            document.getElementById("showpass").type = "text";
        } else {
            document.getElementById("showpass").type = "password";
        }
        }
    </script>
</body>
</html>