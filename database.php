<?php
define ('DB_HOST' , 'localhost');
define ('DB_USER' , 'root');
define ('DB_PASS' , '');
define ('DB_NAME' , 'pplg_1_notes');
$dbconnect=mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
or die("Failed to connect to MySQL:" . mysqli_error 
($dbconnect));

function kuery ($kueri) 
{
   global $dbconnect;
   $result=mysqli_query($dbconnect,$kueri);
   $rows=[];
   while($row = mysqli_fetch_assoc($result))
   {
    $rows[] = $row;
   }
   return $rows;
}

function Editdata($tablename,$id)
{
   global $dbconnect;
   $hasil=mysqli_query($dbconnect,"SELECT * FROM $tablename WHERE id='$id'");
   return $hasil;
}

function update ($table,$data,$id) {
   global $dbconnect;
   $sql="UPDATE $table SET note = '$data' where id = '$id'";
   $hasil = mysqli_query($dbconnect,$sql);
   return $hasil;
}
function delete ($table,$id) {
   global $dbconnect;
   $sql=mysqli_query($dbconnect,"DELETE from $table where id = '$id'");
   return $sql;
}

?>