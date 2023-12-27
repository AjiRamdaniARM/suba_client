<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];


            $query = mysqli_query($conn, "INSERT INTO `tb_admin`( `username`, `password`) VALUES ('$username','$password') ");
              if($query) {
                    echo '<script>alert("Data Client berhasil dimasukkan");
                    window.location="../dashbord.php?admin=akun"</script>';
                } else {
                    echo '<script>alert("Data akun gagal dimasukkan");
                    window.location="../dashbord.php?admin=akun"</script>';
                } 
      

?>