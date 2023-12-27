<?php
include 'connect.php';
$id_client = $_POST['id_client'];
$nama_client = $_POST['nama_client'];
$alamat_client = $_POST['alamat_client'];
$kategori = $_POST['kategori'];
$luas_tanah = $_POST['luas_tanah'];
$link_file = $_POST['link_file'];
$id_poto = $_POST['id_poto'];
$id_video = $_POST ['id_video'];

            $query = mysqli_query($conn, "UPDATE tb_client SET id_client='$id_client', nama_client='$nama_client',alamat_client='$alamat_client',kategori='$kategori',luas_tanah='$luas_tanah',link_file='$link_file',id_poto='$id_poto',video='$id_video' WHERE id_client='$id_client'");
              if($query) {
                    echo '<script>alert("Edit data Client berhasil dimasukkan");
                    window.location="../dashbord.php?admin=client"</script>';
                } else {
                    echo '<script>alert("Edit data client gagal dimasukkan");
                    window.location="../dashbord.php?admin=client"</script>';
                } 
      

?>