<?php

// jalankan dulu session
session_start();

// hapus akses pada session
session_destroy();

// inisiasi ulang session dengan array kosong
$_SESSION = array();

// redirect user kembali ke halaman login2.php
header("Location: masuk.php");

?>
