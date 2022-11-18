<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username" > username : </label>
        <input type="text" name="username" required ><br><br>
        <label for="password" > password : </label>
        <input type="password" name="password" required ><br><br>
        <label for="cpass" > Confirm Password : </label>
        <input type="password" name="cpass" required ><br><br>
        <button type="submit" name="register" Register > </button>
</body>
</html>


<?php 
    require '../Pertemuan 5/koneksi.php';

    if(isset($_POST['register'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpass = $_POST['cpass'];
    }

    if($password === $cpass){
        $password = password_hash($password, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT" username from user WHERE username = $username);
        if(mysqli_fetch_assoc($result)){
            echo "
             
            <script> 
                alert ('username telah digunakan!');
                document..location.href = 'register.php';
            </script>"

        } else {
            $result = mysqli_query($conn, ÏNSERT INTO user VALUES ('', '$username', $password ));
        }
    }else {
        echo "
            <script>
                alert ('Password tidak sama!');
            </script>"
        }
    }
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
        
    </body>
    </html>