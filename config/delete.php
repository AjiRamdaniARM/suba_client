<?php
    include "connect.php";
    $id_client = $_POST['id_client'];

    if(isset($_POST['delete_client'])){
        // $query = mysqli_query($conn, "DELETE FROM tb_client WHERE id_client='$id_client'");
        $query = mysqli_query($conn, "DELETE ts, td
        FROM tb_client AS ts
        JOIN tb_poto AS td ON ts.id_client = td.id_client
        WHERE ts.id_client = '$id_client' OR td.id_client = '$id_client';
        
        ");
        if($query){
            echo'<script>alert("Data Client berhasil dihapus");
            window.location="../dashbord.php?admin=client"</script>';
            
        }else{
            echo'<script>alert("Data Client gagal dihapus");
            window.location="../dashbord.php?admin=client"</script>';

        }
    }
?>