<?php

include("../conn.php");
$id=$_GET['id'];


$sql="DELETE FROM urunler WHERE id='$id'";
$query=$db->query($sql);


$count= $query->rowCount();
if($count >0){

header("Location:../index.php?dstatus=ok");

}
else{


    header("Location:../index.php?dstatus=no");
}
exit;



