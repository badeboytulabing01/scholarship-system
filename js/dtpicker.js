$(document).ready(function(){
			// for date formats
		$.datepicker.setDefaults({
			// dateFormat:'yy-mm-dd'
			dateFormat:'mm-dd-yy',
		});
		$(function(){
		// datepicker ui
		$('#from_date').datepicker({
			// for change month and year
			changeYear: true,
			changeMonth: true
		   });
		$('#to_date').datepicker({
			// for change month and year
			changeYear: true,
			changeMonth: true
		  });
		});

	// for ajax filter
	$('#filter').click(function(){
		var from_date = $('#from_date').val();
		var to_date = $('#to_date').val();

		// for check if both variable has value
		if (from_date !='' && to_date != '') {
			$.ajax({
				url: 'filter.php',
				method: 'POST',
				// send data to server
				data:{from_date:from_date, to_date:to_date},
				// success call back function
				success: function(data){
					$('#order_table').html(data);
				}
			});
		}else{
			alert('Please Select Date');
		}
	});
});