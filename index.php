<!DOCTYPE html>
<html>
<head>
    <title>kamu nanye?</title>
</head>
<body>
    <center>
    <h2>Latihan Login XII Rpl 2</h2>
    <br>
    <!-- cek pesan notifikasi -->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == " belum logout"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    </br>
</br>
<form method="POST" action= "cek_login.php">
    <table>
        <tr>
           <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="masukan username" ></td>
</tr>
<tr>
    <td>Password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="masukan password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" value="LOGIN"></td>
</tr>
    </table>
    <td><a href="daftar.php"><input type="submit" value="daftar"></td>
</center>
</body>
</html>