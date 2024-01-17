<?php
include 'connection.php';
if(isset($_GET['npm'])){
    $delete = mysqli_query($con, "DELETE FROM tbl_datasiswa WHERE npm = '".$_GET['npm']."'  ");
    
echo "<script>
    alert('data siswa berhasil di hapus');
    document.location.href = 'admin_dataSiswa.php';



</script>";
}


?>