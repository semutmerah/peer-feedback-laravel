$(document).ready(function() {
	var feedback_total = $(".feedback-set.show .feedback").length;
	$("body").keydown(function (e){
		var reviewer = $(".feedback-set.show .reviewer.active");
		var answer = $(".feedback-set.show .feedback.show");
		var id_now_number = $(answer).index('.feedback-set.show .feedback');

        $(answer).removeClass("show");
        $(answer).addClass("hide");
        $(reviewer).removeClass("active");

		if (e.keyCode == 37) { //left
			if (id_now_number==0) {
                id_now_number = feedback_total - 1;
            } else {
                id_now_number -= 1;
            }
		}
		else if (e.keyCode == 39) { //right
			if (id_now_number==feedback_total - 1) {
                id_now_number = 0;
            } else {
                id_now_number += 1;
            }
		}

        next_feedback = $('.feedback-set.show .feedback')[id_now_number];
        next_reviewer = $('.feedback-set.show .reviewer')[id_now_number];
        $(next_feedback).removeClass("hide");
        $(next_feedback).addClass("show");
        $(next_feedback).addClass("active");

	});
});
