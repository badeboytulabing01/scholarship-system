          <script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
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
        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>
<div id="chartContainer" style="height: 370px; width: 45%; margin-left:25%; border: 20px solid #0B7636;"></div>