<?php
$conn=new PDO('mysql:host=localhost; dbname=db_scholarship', 'root', '') or die(mysql_error());
if(isset($_POST['addStudent'])!=""){
  $name=$_FILES['card']['name'];
  $size=$_FILES['card']['size'];
  $type=$_FILES['card']['type'];
  $temp=$_FILES['card']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  tbl_card where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
  while($c == 0){
      $i++;
      $reversedParts = explode('.', strrev($name), 2);
      $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
      $chk2 = $conn->query("SELECT * FROM  tbl_card where name = '$tname' ")->rowCount();
      if($chk2 == 0){
        $c = 1;
        $name = $tname;
      }
    }
}
 $move =  move_uploaded_file($temp,"img/card/".$fname);
 if($move){
  $query=$conn->query("insert into tbl_card(name,fname)values('$name','$fname')");
  if($query){
  header("location:alert.php");
  }
  else{
  die(mysql_error());
  }
 }
}
?>