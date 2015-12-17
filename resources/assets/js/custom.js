$(document).ready(function() {
	var feedback_total = $(".feedback-set.show .feedback").length;
	$("body").keydown(function (e){
        /*
		var reviewer = $(".reviewer.active");
		var regex = /.*-(\d+)/;*/
		var answer = $("feedback-set.show .feedback.show");
		var id_now_number = $(answer).index('.feedback-set.show .feedback');
		if (e.keyCode == 37) { //left
		$(answer).removeClass("show");
		$(answer).addClass("hide");
		$(reviewer).removeClass("active");
			if (id_now_number==0) {
                id_now_number = feedback_total - 1;
            } else {
                id_now_number -= 1;
            }
			$('.feedback-set.show .feedback')[id_now_number].removeClass("hide");
			$('.feedback-set.show .feedback')[id_now_number].addClass("show");
			$('.feedback-set.show .feedback')[id_now_number].addClass("active");
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
