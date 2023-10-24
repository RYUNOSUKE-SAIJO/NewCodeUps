
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
    $(".js-hamburger,.js-drawer, .js-drawer a").click(function () {
        $(".js-header,.js-hamburger").toggleClass("is-active");
        $(".js-drawer").fadeToggle(600);
        event.stopPropagation();
    });

    // リサイズ処理 //
    $(window).resize(function () {
        if (window.matchMedia("(min-width: 768px)").matches) {
            closeDrawer();
        }

        function closeDrawer() {
            $(".js-drawer,.js-hamburger").fadeOut();
            $(".js-header").removeClass("is-active");
        }
    });




    // FV swiper //
    var swiper = new Swiper(".js-fv-swiper", {
        loop: true,
        effect: 'fade',
        speed: 1000,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
    });


    // campaign swiper //
    var swiper = new Swiper(".js-campaign-swiper", {
        loop: true,
        spaceBetween: 24,
        speed: 1000,
        loopedSlides: 8,
        loopAdditionalSlides: 2,
        width: 280,
        // autoplay: {
        //     delay: 2000,
        //     disableOnInteraction: false,
        // },
        breakpoints: { //ブレークポイントの設定 小さい順に設定する！！
            768: {
                spaceBetween: 40,
                width: 333,
            },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });


    // 画像アニメーション //
    var box = $('.information__left_img,.voice_card_img,.price__img'),
    speed = 700;  

//.colorboxの付いた全ての要素に対して下記の処理を行う
    box.each(function(){
        $(this).append('<div class="color"></div>')
        var color = $(this).find($('.color')),
        image = $(this).find('img');
        var counter = 0;

        image.css('opacity','0');
        color.css('width','0%');
        //inviewを使って背景色が画面に現れたら処理をする
        color.on('inview', function(){
            if(counter == 0){
            $(this).delay(200).animate({'width':'100%'},speed,function(){
                image.css('opacity','1');
                $(this).css({'left':'0' , 'right':'auto'});
                $(this).animate({'width':'0%'},speed);
            })
                counter = 1;
            }
        });

    });

    // スクロールしたら「トップに戻る」ボタンが表示される
    const toTopButton = $(".js-to-top");
    const scrollHeight = 100;
    toTopButton.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
        toTopButton.fadeIn();
        } else {
        toTopButton.fadeOut();
        }
    });

    // 「トップに戻る」ボタンをクリックしたらスクロールで戻る
    toTopButton.click(function () {
        $("body,html").animate({ scrollTop: 0 }, 800);
        return false;
    });


    // modal window //
    $(".gallery__item > img").click(function () {
        var src = $(this).attr("src");
        var cap = $(this).attr("alt");
        $(".js-gallery__modal-block").fadeIn().css("display", "flex");
        $("#popup").attr("src", src);
    });

    $(".js-gallery__modal-block").click(function (e) {
        // モーダルの外側をクリックした場合にのみモーダルを閉じる
        if (e.target === this) {
            $(this).fadeOut(); // フェードアウトさせる
        }
    });


    // タブ切替 //
    $('.tab-contents__tab').on('click', function() {
        $('.tab-contents__tab,.tab-contents__panel').removeClass('is-active');
    
        $(this).addClass('is-active');

        var index = $('.tab-contents__tab').index(this);
        $('.tab-contents__panel').eq(index).addClass('is-active');
    });












});


