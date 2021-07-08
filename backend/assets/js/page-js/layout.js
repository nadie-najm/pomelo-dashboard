//navbar

$('.search').click(function () {
    $('.search_box').fadeIn();
    if ($('.search_box').css("dispaly", "block")) {
        $(".notification_box,.user_box").fadeOut();
    }
});

$('.btn_close').click(function () {
    $('.search_box').fadeOut();
});     

$('.user').click(function () {
    $('.user_box').fadeToggle();
    if ($('.user_box').css("dispaly", "block")) {
        $(".search_box,.notification_box").fadeOut();
    }
});

$('.notification').click(function () {
    $('.notification_box').fadeToggle();
    if ($('.notification_box').css("dispaly", "block")) {
        $(".search_box,.user_box").fadeOut();
    }
});

//close dropdown click every where

$(document).click(function (event) {
    if (!$(event.target).closest(".search_box,.search,.user_box,.user,.notification_box,.notification ,.modal_n").length) {
        $("body").find(".search_box,.user_box,.notification_box,.modal_box").fadeOut();
    }
});

//end navbar

$('#sign_out_modal').click(function () {
    $('.modal_box').css("display", "flex").hide().fadeIn();
});


//sidebar

for (let j = 0; j < $('.btn_main_menu').length; j++) {

    $('.btn_main_menu').eq(j).click(function () {

        if ($(this).next().css('display') === 'none') {

            $('.btn_main_menu').next().slideUp();
            $('.icon').attr('class', 'fad fa-chevron-left icon');
            $(this).next().slideDown();
            $('.icon').eq(j).attr('class', 'fad fa-chevron-down icon');


        } else {

            $(this).next().slideUp();
            $('.icon').eq(j).attr('class', 'fad fa-chevron-left icon');
        }

    });

}

//responsive sidebar

$('.icon_toggle_menu_sb').click(function () {
    $('.sidebar').toggleClass('active_menu');
    $('.search_box , .main_content').toggleClass('pr');
    if ($(this).hasClass('fa-chevron-double-right')) {
        $('.icon_toggle_menu_sb').removeClass('fa-chevron-double-right');
        $('.icon_toggle_menu_sb').addClass('fa-chevron-double-left');
    } else {
        $('.icon_toggle_menu_sb').removeClass('fa-chevron-double-left');
        $('.icon_toggle_menu_sb').addClass('fa-chevron-double-right');
    }
})

$(window).resize(function() {
    //do something

    var width = $(document).width();
    if (width < 992) {
        $('.sidebar').addClass('active_menu');
        $('.search_box , .main_content').addClass('pr');
        if ($(this).hasClass('fa-chevron-double-right')) {
            $('.icon_toggle_menu_sb').removeClass('fa-chevron-double-right');
            $('.icon_toggle_menu_sb').addClass('fa-chevron-double-left');
        } else {
            $('.icon_toggle_menu_sb').removeClass('fa-chevron-double-left');
            $('.icon_toggle_menu_sb').addClass('fa-chevron-double-right');
        }
    }
    else{
        $('.sidebar').removeClass('active_menu');
        $('.search_box , .main_content').removeClass('pr');
        if ($(this).hasClass('fa-chevron-double-right')) {
            $('.icon_toggle_menu_sb').removeClass('fa-chevron-double-right');
            $('.icon_toggle_menu_sb').addClass('fa-chevron-double-left');
        } else {
            $('.icon_toggle_menu_sb').removeClass('fa-chevron-double-left');
            $('.icon_toggle_menu_sb').addClass('fa-chevron-double-right');
        }
    }
});

//end sidebar


//btn back to top

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      $('.back_to_top').addClass('show_btn_btt');
    } else {
        $('.back_to_top').removeClass('show_btn_btt');
    }
  });
  
  $('.back_to_top').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
  
  