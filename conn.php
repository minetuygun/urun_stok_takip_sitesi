<?php
try{

$db=new PDO("mysql:host=localhost;dbname=performans_db;charset=utf8",'root','');


}
catch (PDOException $e){
print $e->getMessage();

}




?>