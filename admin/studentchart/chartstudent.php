  <?php
 
$dataPoints = array( 
    array("y" => 3373.64, "label" => "January" ),
    array("y" => 2435.94, "label" => "France" ),
    array("y" => 1842.55, "label" => "China" ),
    array("y" => 1828.55, "label" => "Russia" ),
    array("y" => 1039.99, "label" => "Switzerland" ),
    array("y" => 765.215, "label" => "Japan" ),
    array("y" => 612.453, "label" => "Netherlands" )
);
$link=mysqli_connect("localhost","root", "");
mysqli_select_db($link,"db_scholarship");
$test=array();

$count=0;

$res=mysqli_query($link,"SELECT COUNT(student_id) AS visitor_count, DATE_FORMAT(dateapply, '%M') AS month_name FROM tbl_student_info GROUP BY DATE_FORMAT(dateapply, '%Y-%m');");
while($row=mysqli_fetch_array($res))
{
  $test[$count]["label"]=$row["month_name"];
 $test[$count]["y"]=$row["visitor_count"];
 $count=$count+1;


}
 
?>