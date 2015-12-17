$(document).ready(function() {
	var feedback_total = $(".feedback").length;
	$("body").keydown(function (e){
		var answer = $(".feedback.show");
		var reviewer = $(".reviewer.active");
		var regex = /.*-(\d+)/;
		var id_now = answer.attr("id");
		var id_now_number = parseInt(id_now.match(regex)[1]);
		if (e.keyCode == 37) { //left
		$(answer).removeClass("show");
		$(answer).addClass("hide");
		$(reviewer).removeClass("active");
			if (id_now_number==1) {
				$("#feedback-"+feedback_total).removeClass("hide");
				$("#feedback-"+feedback_total).addClass("show");
				$("#reviewer-"+feedback_total).addClass("active");
			} else {
				var id_next_number = id_now_number - 1;
				$("#feedback-"+id_next_number).removeClass("hide");
				$("#feedback-"+id_next_number).addClass("show");
				$("#reviewer-"+id_next_number).addClass("active");
			}
		}
		else if (e.keyCode == 39) { //right
		$(answer).removeClass("show");
		$(answer).addClass("hide");
		$(reviewer).removeClass("active");
			if (id_now_number==feedback_total) {
				$("#feedback-1").removeClass("hide");
				$("#feedback-1").addClass("show");
				$("#reviewer-1").addClass("active");
			} else {
				var id_next_number = id_now_number + 1;
				$("#feedback-"+id_next_number).removeClass("hide");
				$("#feedback-"+id_next_number).addClass("show");
				$("#reviewer-"+id_next_number).addClass("active");
			}
		}
	});
});
