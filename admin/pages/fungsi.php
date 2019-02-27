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

function inputpemilih($data){
	$con=koneksi();
	$nama=htmlspecialchars($data["nama"]);
	$kelas=htmlspecialchars($data["kelas"]);
	$query="INSERT into pemilih VALUES('','$nama','$kelas')";
	mysqli_query($con,$query);
	return mysqli_affected_rows($con); 
}


function simpan($data){
	$con=koneksi();
	$nama=htmlspecialchars($data["nama"]);
	$visi=htmlspecialchars($data["visi"]);
	$misi=htmlspecialchars($data["misi"]);
	$query="INSERT into calon VALUES(' ',$nama',' ','$visi','$misi')";
	mysqli_query($con,$query);
	return mysqli_affected_rows($con); 
}



function gambar($data){
	$con=koneksi();
	$gambar=htmlspecialchars($data["gambar"]);
	$kueri="INSERT into gambar VALUES('$gambar')";
	mysqli_query($con,$query);
	return mysqli_affected_rows($con); 
}




try
{
	$con = new PDO('mysql:host=localhost;dbname=osis', 'root', '', array(PDO::ATTR_PERSISTENT => true));
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
?>
