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


function a($data){
	$con=koneksi();
	$calon1=htmlspecialchars($data["calon1"]+1);
	$query = "INSERT into voting VALUES ('$calon1','','')";
	mysqli_query($con,$query);
	return mysqli_affected_rows($con); 
}

function b($data){
	$con=koneksi();
	$calon2=htmlspecialchars($data["calon2"]+1);
	$query = "INSERT into voting VALUES ('','$calon2','')";
	mysqli_query($con,$query);
	return mysqli_affected_rows($con); 
}



function c($data){
	$con=koneksi();
	$calon3=htmlspecialchars($data["calon3"]+1);
	$query = "INSERT into voting VALUES ('','','$calon3')";
	mysqli_query($con,$query);
	return mysqli_affected_rows($con); 

	$id=htmlspecialchars($data["id"]);
	$query2 = "INSERT into temp VALUES ('$id','','')";
	mysqli_query($con,$query2);
	return mysqli_affected_rows($con);
}

function id($data){
	$con=koneksi();
	$id=htmlspecialchars($data["id"]);
	$query2 = "INSERT into temp VALUES ('$id','','')";
	mysqli_query($con,$query2);
	return mysqli_affected_rows($con); 
}

function i($data){
	$con=koneksi();
	$id=htmlspecialchars($data["id"]);
	$query2 = "INSERT into temp VALUES ('$id','','')";
	mysqli_query($con,$query2);
	return mysqli_affected_rows($con); 
}

function d($data){
	$con=koneksi();
	$id=htmlspecialchars($data["id"]);
	$query2 = "INSERT into temp VALUES ('$id','','')";
	mysqli_query($con,$query2);
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

