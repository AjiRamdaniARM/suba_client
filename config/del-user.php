<?php
    include "connect.php";
    $id = $_POST['id'];

    if(isset($_POST['delete_client'])){
        $query = mysqli_query($conn, "DELETE FROM tb_admin WHERE id='$id'");
        if($query){
            echo'<script>alert("Data Client berhasil dihapus");
            window.location="../dashbord.php?admin=akun"</script>';
            
        }else{
            echo'<script>alert("Data Client gagal dihapus");
            window.location="../dashbord.php?admin=akun"</script>';

        }
    }
?>