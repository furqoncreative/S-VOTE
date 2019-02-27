<?php
class Crud{
public function __construct(){
$this->db = new PDO('mysql:host=localhost;dbname=osis','root','');
}
function tambahdata($nama, $visi, $misi){
$sql = "INSERT INTO calon (nama, visi, misi)
VALUES('$nama','$visi', '$misi')";
$query = $this->db->query($sql);
if(!$query){
return "Failed";
}
else{
return "Success";
}}

function editdata($id){
$sql = "SELECT * FROM calon WHERE id='$id'";
$query = $this->db->query($sql);
return $query;
}
 function updatedata($id, $nama, $visi, $misi){
$sql = "UPDATE calon SET nama='$nama',
visi='$visi', misi='$misi' WHERE id='$id'";
$query = $this->db->query($sql);
if(!$query){
return "Failed";
}
else{
return "Success";
}}

function show(){
$sql = "SELECT * FROM calon";
$query = $this->db->query($sql);
return $query;
}}
?>