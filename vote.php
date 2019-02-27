<?php
$answer = $_POST['calon1'];
$submit = $_POST['submit'];
if(isset($submit))  {
if($answer == "")
{
$query_ans = mysql_query("select * from voting where calon1='$calon1'");
$data_ans = mysql_fetch_array($query_ans);
$votes = $data_ans['calon1'];
$update = "update voting set calon1='$calon1'+1 "; /* update vote dengan +1 */         $query = mysql_query($update);
if($query == TRUE)
{
echo "polling berhasil ditambah";
}
else
{
echo "data error, alesannya : ".(mysql_error());
}
}
}
 ?>
