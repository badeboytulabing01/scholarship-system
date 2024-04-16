    <?php
 
$points = array( 
    array("y" => 3373.64, "label" => "January" ),
    array("y" => 2435.94, "label" => "France" ),
    array("y" => 1842.55, "label" => "China" ),
    array("y" => 1828.55, "label" => "Russia" ),
    array("y" => 1039.99, "label" => "Switzerland" ),
    array("y" => 765.215, "label" => "Japan" ),
    array("y" => 612.453, "label" => "Netherlands" )
);
$conn=mysqli_connect("localhost","root", "");
mysqli_select_db($conn,"db_scholarship");
$fulchart=array();

$count=0;

$result=mysqli_query($conn,"SELECT COUNT(studentid) AS visitor, DATE_FORMAT(dateApplay, '%M') AS month FROM tbl_studentinfo where status='full' GROUP BY DATE_FORMAT(dateApplay, '%Y-%m') ");
while($row=mysqli_fetch_array($result))
{
  $fulchart[$count]["label"]=$row["month"];
 $fulchart[$count]["y"]=$row["visitor"];
 $count=$count+1;


}
 
?>


<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("full", {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: ""
    },
    axisY: {
        title: "Number of Students"
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## Students",
        points: <?php echo json_encode($fulchart, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 <div id="full" style="height: 370px; width: 45%; margin-left:25%; "></div>