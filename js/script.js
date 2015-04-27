$(document).ready(function() {
	// scroll button hover
		$("#button").mouseover( function() {
		$(this).css("background-color", "rgba(255,255,255,0.2)");
	});
	// scroll button unhover
		$("#button").mouseout( function() {
		$(this).css("background-color", "");
	});
	// scroll page down
	$("#button").click( function() {
		$("html, body").animate( {
        	scrollTop: $("#howitworks-wrapper").offset().top - 100
        }, 1000);
	});
});

