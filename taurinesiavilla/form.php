<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
    <section class="form">
        <center>
    <table border="1" cellspacing="3" cellpadding="25">
        <tr colspan="2" style="background-color: red;">
            <td align="center" colspan="5"> <u> <b> FORM DATA SISWA </u></b></td>
        </tr>
        <tr>
            <td> Nama </td>
            <td> <?php echo $_POST['nama'] ?> </td>
        </tr>
        <tr>
            <td> NO Telpom </td>
            <td> <?php echo $_POST['nis'] ?> </td>
        </tr>
        <tr>
            <td> Tanggal Lahir </td>
            <td> <?php echo $_POST['tgllahir'] ?> </td>
        </tr>
        <tr>
            <td> Jenis Kelamin </td>
            <td> <?php echo $_POST['jk'] ?> </td>
        </tr>
        <tr>
            <td> Villa </td>
            <td> <?php echo $_POST['kelas'] ?> </td>
        </tr>
    </table>
</center>
    </section>

    <section class="footer">
        <h1> SMA NEGERI 1 </h1>
        <p> Jl. DI Panjaitan Gang Ketemu 3 Rt.01 No. 10. Kota Baru, Indonesia 
            <br>
            No. Telepon : 0548-99999 | E-mail : sman1@gmail.com
        </p>
    </section>

    <section class="bio">
        <div class="saya">
        <img src="image/saya.jpg">
        <div class="teks">
        <h3> Tentang Saya </h3>
        <p>Nama : Viona Asya Arinda 
            <br>
            NIM : 2109106108
            <br>
            Tempat Tanggal Lahir : Samarinda, 14 Mei 2004
            <br>
            Instagram : @vionasyarinda
            <br>
            E-mail : vionaasya04@gmail.com
        </p>
    </div>
</div>
    </section>
</section>
</body>
</html>