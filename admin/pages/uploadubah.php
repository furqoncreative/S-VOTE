<?php

include 'fungsi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE gambar SET nama = '$_POST[nama]' WHERE id = '1' ";
    $con->exec($sql);
}
 
header("location:tabel_calon.php");

?> 