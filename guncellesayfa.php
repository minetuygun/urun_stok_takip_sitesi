<?php

include("conn.php");

$id=$_GET['id'];
$sql="SELECT * FROM urunler WHERE id='$id'";
$query=$db->query($sql);
$data=$query->fetch(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
table,tr,td,th,thead{

text-align: center;
vertical-align: center;
}


</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>


<div class="container mt-3">
<center><h4>Ürün Güncelle</h4></center>
<hr>
<form action="islem/guncelle.php?id=<?php echo $_GET['id'] ;?>" method="POST">
<table class="table">
<tr>
<td>Ürün Adı:</td>
<td><input type="text"name="urun_adi" class="form-control" required value="<?php echo $data['urun_ad'];?>"></td>

</tr>
<tr>

<td>Ürün Numarası:</td> 
<td><input type="text" name="urun_numara"  class="form-control" required value="<?php echo $data['urun_numara'];?>" ></td>

</tr>
<tr>
<td>Ürün Sayısı:</td> 
<td ><input type="text" name="urun_stok"  class="form-control" required value="<?php echo $data['urun_stok'] ;?>"></td>



</tr>
<tr>

<td colspan="3"><input type="submit" name="urun_guncelle" class="btn btn-success" value="Güncelle"></td>

</tr>
</table>
</form>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
</body>
</html>

