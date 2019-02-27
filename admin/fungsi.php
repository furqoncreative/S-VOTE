<?php 
//fungsi untuk koneksi database
function koneksi(){

	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,"osis");

	return $con ;
}

//fungsi untuk menampilkan data
function query($string) {
$con=koneksi();
$hasil=mysqli_query($con,$string);
$bariss= array();
while ($baris=mysqli_fetch_assoc($hasil)) {
	$bariss[]=$baris;
}
return $bariss;
}
?>
