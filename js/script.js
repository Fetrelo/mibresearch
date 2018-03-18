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
			dataType: 'json',
			data: { 
				start: $("#startDate").val(), 
				end: $("#finishDate").val(), 
				casa: casa
			},
			success: function (data) {
				alert();
				console.log(data);
			},
			error: function(e) {
				alert("error");
				console.log(e);
			}
		});
	});
});