<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Taurinesia Villa </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
<script src="script.js" defer> </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<section class="footer">
    <img src="image/logo.png" alt="" width="300px"></a>
    <br>
        <center>
        <h3> L O G I N </h3> <br>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <td> Nama </td>
                    <td> <input type="text" name="nama" placeholder="Masukkan Nama"></td>
                </tr>
                <tr>
                    <td> NO Telpon </td>
                    <td> <input type="text" name="user" placeholder="Masukkan username"></td>
                </tr>
                <tr>
                    <td> Tanggal Lahir </td>
                    <td> <input type="date" name="tgllahir"></td>
                </tr>
                <tr>
                    <td> Jenis Kelamin </td>
                    <td> <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                         <input type="radio" name="jk" value="Perempuan"> Perempuan </td>
                </tr>
                <tr>
                    <td> Daerah </td>
                    <td> <select name="Daerah" id="">
                         <option value="">Pilih Daerah</option>
                         <option value="Bali">Bali</option>
                         <option value="Samarinda">Samarinda</option>
                         <option value="Berau">Berau</option>
                         <option value="Balikpapan">Balikpapan</option>
                         <option value="Banjarmasin">Banjarmasin</option>
                         <option value="jakarta">Jakarta</option>
                        
                    </select>
                </td>
                </tr>
            </table>
        </form>
        </center>
    
        <div class="login">
        
            <ul>
                <li><a href="index.php">User</a></li>
                <li><a href="admin.php">Admin</a></li>
                
            </ul>

        </div>
          
        <br>
    <p> Jl. Juanda 1, Pantai Batu Alam Permai Rt.21 Kota Samarinda, Indonesia 
        <br>
        No. Telepon : 0852-5091-1597 | E-mail : taurinesiavilla@gmail.com
    </p>

</body>
</html>

