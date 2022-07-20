<?php
include("../conn.php");



if(isset($_POST['urun_ekle'])){



$urun_adi=$_POST['urun_adi'];
$urun_numara=$_POST['urun_numara'];
$urun_stok=$_POST['urun_stok'];

$sql="INSERT INTO urunler(urun_ad,urun_numara,urun_stok) VALUES ('$urun_adi', '$urun_numara','$urun_stok')";
$query= $db->prepare($sql);
$query->execute();

$count=$query->rowCount();

if($count >0){
header("Location:../index.php?status=ok");


}
else{
    header("Location:../index.php?status=no");




}
exit;
}

?>