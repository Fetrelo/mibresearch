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
	});

});