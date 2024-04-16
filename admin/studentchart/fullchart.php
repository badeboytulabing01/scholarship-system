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
        dataPoints: <?php echo json_encode($full, JSON_NUMERIC_CHECK); ?>
    }]
});
chart.render();
 
}
</script>