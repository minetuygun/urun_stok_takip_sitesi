<?php


include("../conn.php");
if(isset($_POST['urun_guncelle'])){
$id=$_GET['id'];
$urun_ad= $_POST['urun_ad'];
$urun_numara=$_POST['urun_numara'];
$urun_stok=$_POST['urun_stok'];

$sql="UPDATE urunler SET
urun_ad=?,
urun_numara=?,
urun_stok=?


WHERE id= '$id'";


$query=$db->prepare($sql);
$query->execute(array(

$urun_ad,
$urun_numara,
$urun_stok
));
$count=$query->rowCount();


if($count >0){
header("Location:../index.php?gstatus=ok");



}
else{
header("Location:../index.php?gstatus=no");

}

exit;

}
 

