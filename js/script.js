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
				console.log(data);
				stations = [];
				hours = [];
				for(var key in objects) {
				    stations.push(objects[key]);
				}
				for(var key in objects) {
				    hours.push(objects[key]);
				}
				var ctx = $('#stations').getContext('2d');
				var chart = new Chart(ctx, {
				    type: 'line',
				    data: {
				        labels: Object.keys(data['stations']),
				        datasets: [{
				            label: "Estación",
				            backgroundColor: 'rgb(255, 99, 132)',
				            borderColor: 'rgb(255, 99, 132)',
				            data: stations,
				        }]
				    },
				    options: {}
				});
				var ctx2 = $('#hours').getContext('2d');
				var chart = new Chart(ctx2, {
				    type: 'line',
				    data: {
				        labels: Object.keys(data['hours']),
				        datasets: [{
				            label: "Horas pico",
				            backgroundColor: 'rgb(255, 99, 132)',
				            borderColor: 'rgb(255, 99, 132)',
				            data: hours,
				        }]
				    },
				    options: {}
				});
			}
		});
	});
});