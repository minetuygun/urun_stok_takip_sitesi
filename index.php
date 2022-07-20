<?php

include("conn.php");
$sql="SELECT * FROM urunler";
$query=$db->query($sql);
$data=$query->fetchAll(PDO::FETCH_ASSOC);

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

 


<div class="container">
<h4>Ürün Ekle</h4>
<hr>
<form action="islem/insert.php" method="POST">
<table class="table">
<tr>
<td>Ürün Adı:</td>
<td><input type="text"name="urun_adi" class="form-control" required></td>

</tr>
<tr>

<td>Ürün Numarası:</td> 
<td><input type="text" name="urun_numara"  class="form-control" required></td>

</tr>
<tr>
<td>Ürün Sayısı:</td> 
<td ><input type="text" name="urun_stok"  class="form-control" required></td>



</tr>
<tr>

<td colspan="3"><input type="submit" name="urun_ekle" class="btn btn-success"></td>

</tr>
</table>
</form>


<?php
if(isset($_GET['status'])){
if($_GET['status']=="ok"){
?>
<div class="alert alert-success">
    <b>Ürün Ekleme Başarılı</b>
</div>
<?php

}
if($_GET['status']=="no"){
    ?>
    <div class="alert alert-danger">
        <b>Ürün Eklenirken Hata Oluştu</b>
    </div>
    <?php

}
header("Refresh:2 url:index.php");
}
if(isset($_GET['dstatus'])){
  if($_GET['dstatus']=="ok"){
  ?>
  <div class="alert alert-success">
      <b>Ürün Silme İşlemi Başarılı</b>
  </div>
  <?php
  
  }
  if($_GET['dstatus']=="no"){
      ?>
      <div class="alert alert-danger">
          <b>Ürün Silinirken Hata Oluştu</b>
      </div>
      <?php
  
  }
  header("Refresh:2 url:index.php");
  }
  if(isset($_GET['gstatus'])){
    if($_GET['gstatus']=="ok"){
    ?>
    <div class="alert alert-success">
        <b>Ürün Güncelleme İşlemi Başarılı</b>
    </div>
    <?php
    
    }
    if($_GET['gstatus']=="no"){
        ?>
        <div class="alert alert-danger">
            <b>Ürün Güncellenirken Hata Oluştu</b>
        </div>
        <?php
    
    }
    header("Refresh:2 url:index.php");
    }
?>





<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ÜRÜN ADI</th>
      <th scope="col">ÜRÜN NUMARA</th>
      <th scope="col">ÜRÜN STOK</th>
     <th scope="col">İŞLEMLER</th>


    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $datas): ?>

<tr>
<td><?php echo $datas['id'];?></td>
<td><?php echo $datas['urun_ad'];?></td>
<td><?php echo $datas['urun_numara'];?></td>
<td><?php echo $datas['urun_stok'];?></td>

<td><a class="btn btn-success" href="guncellesayfa.php?id=<?php  echo $datas['id'];?>">Güncelle</a>
<a class="btn btn-danger" href="islem/sil.php?id=<?php  echo $datas['id']?>">Sil</a>

</td>


</tr>



<?php  endforeach;  ?>


  
  </tbody>
</table>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
</body>
</html>

