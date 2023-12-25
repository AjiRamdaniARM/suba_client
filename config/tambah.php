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

            $query = mysqli_query($conn, "INSERT INTO `tb_client`(`id_client`, `nama_client`, `alamat_client`, `kategori`, `luas_tanah`, `link_file`, `id_poto`, `video`) VALUES ('$id_client','$nama_client','$alamat_client','$kategori','$luas_tanah','$link_file','$id_poto','$id_video')");
              if($query) {
                    echo '<script>alert("Data Client berhasil dimasukkan");
                    window.location="../dashbord.php?admin=client"</script>';
                } else {
                    echo '<script>alert("Data client gagal dimasukkan");
                    window.location="../dashbord.php?admin=client"</script>';
                } 
      

?>