
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
    $(".js-hamburger,.js-drawer, .js-drawer a").click(function () {
        $(".js-hamburger,.js-header").toggleClass("is-active");
        $(".js-drawer").fadeToggle(600);
        event.stopPropagation();
    });








});


