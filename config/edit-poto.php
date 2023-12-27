<?php
include 'connect.php';
$id_client = $_POST['id_client'];
$id_poto = $_POST['id_poto'];
$poto1 = $_POST['poto1'];
$poto2 = $_POST['poto2'];
$poto3 = $_POST['poto3'];
$poto4 = $_POST['poto4'];
$poto5 = $_POST['poto5'];
$poto6 = $_POST['poto6'];

            $query = mysqli_query($conn, "UPDATE  `tb_poto` SET id_client='$id_client',id_poto1='$poto1',id_poto2='$poto2',id_poto3='$poto3',id_poto4='$poto4',id_poto5='$poto5',id_poto6='$poto6' WHERE id_poto='$id_poto' ");
              if($query) {
                    echo '<script>alert("Data Client berhasil dimasukkan");
                    window.location="../dashbord.php?admin=poto-render"</script>';
                } else {
                    echo '<script>alert("Data client gagal dimasukkan");
                    window.location="../dashbord.php?admin=poto-render"</script>';
                } 
      

?>