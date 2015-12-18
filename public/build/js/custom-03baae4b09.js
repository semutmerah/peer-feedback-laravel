$(document).ready(function() {
	$("body").keydown(function (e){
        switch(e.keyCode) {
            case 27:
                taUnfocus(e);
                break;
            case 9:
                taFocus(e);
                break;
            case 37:
            case 39:
                kananKiri(e);
                break;
            case 38: 
            case 40:
                atasBawah(e);
                break;
        }
	});
});

function kananKiri(e) {
    if ($('.feedback-set.show textarea:focus').length > 0) { return; }

    var feedback_total = $(".feedback-set.show .feedback").length;
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
    } else if (e.keyCode == 39) { //right
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
    $(next_reviewer).addClass("active");
}

function atasBawah(e) {
    if ($('.feedback-set.show textarea:focus').length > 0) { return; }
    var feedback_set_total = $('.feedback-set').length;
    var active_feedback_set = $('.feedback-set.show');
    var active_feedback_set_position = $(active_feedback_set).index('.feedback-set');
    
    switchDisplay(active_feedback_set);

    if (e.keyCode == 38) {
        //naik ke set sebelumnya
        if (active_feedback_set_position > 0) {
            active_feedback_set_position -= 1;
        }
    
    } else {
        // turun ke set berikutnya
        if (active_feedback_set_position < feedback_set_total - 1) {
            active_feedback_set_position += 1;
        }
    }

    next_active_feedback = $('.feedback-set')[active_feedback_set_position];
    switchDisplay(next_active_feedback);

    $('.feedback-set.show .feedback').each(function(){
        $(this).removeClass('show');
        $(this).addClass('hide');
    });
    $('.feedback-set.show .feedback:first').removeClass('hide');
    $('.feedback-set.show .feedback:first').addClass('show');
   
    $('.feedback-set.show .reviewer').each(function(){
        $(this).removeClass('active');
    });
    $('.feedback-set.show .reviewer:first').addClass('active');

}

function taFocus(e) {
    e.preventDefault();
    $('.feedback-set.show textarea').focus();
}

function taUnfocus(e) {
    e.preventDefault();
    $('textarea:focus').blur();
}

function rollUp(current, limit) {
    if ((current == limit)) {
        return 0;
    } else {
        return current+1;
    }
}

function rollDown(current, limit) {
    if (current == 0) {
        return limit;
    } else {
        return current-1;
    }
}

function switchDisplay(elemen) {
    if ($(elemen).hasClass('show')) {
        // already shown, hide it
        $(elemen).removeClass('show');
        $(elemen).addClass('hide');
    } else if ($(elemen).hasClass('hide')) {
        // hidden, show it
        $(elemen).removeClass('hide');
        $(elemen).addClass('show');
    }
}

function switchActive(elemen) {
    if ($(elemen).hasClass('active')) {
        $(elemen).removeClass('active');
    } else {
        $(elemen).addClass('active');
    }
}

//# sourceMappingURL=custom.js.map
