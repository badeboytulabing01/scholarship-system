  <?php
$conn=new PDO('mysql:host=localhost; dbname=db_scholarship', 'root', '') or die(mysql_error());
if(isset($_POST['add_requirements'])!=""){
  $scholar_id = $_POST["scholar_id"]; 
  $name=$_FILES['submit_card']['name'];
  $size=$_FILES['submit_card']['size'];
  $type=$_FILES['submit_card']['type'];
  $temp=$_FILES['submit_card']['tmp_name'];

  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM tbl_submit_card where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
  while($c == 0){
      $i++;
      $reversedParts = explode('.', strrev($name), 2);
      $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
      $chk2 = $conn->query("SELECT * FROM tbl_submit_card where name = '$tname' ")->rowCount();
      if($chk2 == 0){
        $c = 1;
        $name = $tname;
      }
    }
}
 $move =  move_uploaded_file($temp,"../img/submit_card/".$fname);
 if($move){
  $query=$conn->query("insert into tbl_submit_card(student_id,name,fname)values('$scholar_id','$name','$fname')");
  if($query){
  echo "<script language='javascript'>alert('Succesfully Submit'); </script>";
  }
  else{
  die(mysql_error());
  }
 }
}
?>