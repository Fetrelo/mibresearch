$(function() {

	var opts = { p: "#pr", s: "#se", t: "#te", c: "#cu", q: "#qu", b: "#bo" };

	setTimeout(function() {
		$("#presentation").fadeOut(400, function() {
			$("#body").fadeIn();
		});
	}, 0);

	$(".dropdown-item").click(function() {
		var id = $(this).attr("id");
		$(".panel").hide();
		$(opts[id]+".panel").fadeIn(400);
		$("#search").val(opts[id]);
	});

	$("#search").click(function() {
		var casa = $("#search").val();
		console.log(casa);
		$.ajax({
			url: './api.php',
			type: 'post',
			dataType: 'text',
			data: { 
				start: $("#startDate").val(), 
				end: $("#finishDate").val(), 
				casa: casa
			},
			success: function (data) {
				var ctx = $('#stations').getContext('2d');
				var chart = new Chart(ctx, {
				    // The type of chart we want to create
				    type: 'line',

				    // The data for our dataset
				    data: {
				        labels: ["January", "February", "March", "April", "May", "June", "July"],
				        datasets: [{
				            label: "Estación",
				            backgroundColor: 'rgb(255, 99, 132)',
				            borderColor: 'rgb(255, 99, 132)',
				            data: [0, 10, 5, 2, 20, 30, 45],
				        }]
				    },

				    // Configuration options go here
				    options: {}
				});
				console.log(data);
			}
		});
	});
});