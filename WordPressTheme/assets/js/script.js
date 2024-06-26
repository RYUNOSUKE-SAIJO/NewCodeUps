"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  /* ===============================================
  # ハンバーガー・ドロワーメニュー
  =============================================== */
  $(".js-hamburger,.js-drawer, .js-drawer a").click(function () {
    $(".js-header,.js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle(600);
    event.stopPropagation();
  });

  /* ===============================================
  # リサイズ処理
  =============================================== */
  $(window).resize(function () {
    if (window.matchMedia("(min-width: 768px)").matches) {
      closeDrawer();
    }
    function closeDrawer() {
      $(".js-drawer,.js-hamburger").fadeOut();
      $(".js-header,.js-hamburger").removeClass("is-active");
    }
  });

  /* ===============================================
  # FV swiper
  =============================================== */
  var swiper = new Swiper(".js-fv-swiper", {
    loop: true,
    effect: "fade",
    speed: 3000,
    autoplay: {
      delay: 8000,
      disableOnInteraction: false
    }
  });

  /* ===============================================
  # campaign swiper
  =============================================== */
  var swiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    spaceBetween: 24,
    speed: 5000,
    loopedSlides: 8,
    loopAdditionalSlides: 2,
    width: 280,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    breakpoints: {
      //ブレークポイントの設定 小さい順に設定する！！
      768: {
        spaceBetween: 40,
        width: 333
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  // 画像アニメーション //
  var box = $(".information__left-img,.voice-card__img,.price__img,.tab-contents__panel-right"),
    speed = 500;

  // .colorboxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($(".color")),
      image = $(this).find("img");
    var counter = 0;
    image.css("opacity", "0");
    color.css("width", "0%");
    // inviewを使って背景色が画面に現れたら処理をする
    color.on("inview", function () {
      if (counter == 0) {
        $(this).delay(100).animate({
          width: "100%"
        }, speed, function () {
          // ふわっとさせるアニメーションを追加
          image.animate({
            opacity: 1
          }, speed);
          $(this).css({
            left: "0",
            right: "auto"
          });
          $(this).animate({
            width: "0%"
          }, speed);
        });
        counter = 1;
      }
    });
  });

  /* ===============================================
  # modal window
  =============================================== */
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

  /* ===============================================
  # アコーディオン
  =============================================== */

  $(function () {
    //アイテムとコンテンツを開きっぱなしにする記述//
    $(".js-accordion__item .js-accordion__content").css("display", "block");
    //開きっぱなしのアイテムの＋ボタンの記述//
    $(".js-accordion__item .js-accordion__title").addClass("is-open");
    //クリックしたら..//
    $(".js-accordion__title").on("click", function () {
      //"is-open"が付与されて＋ボタンがーボタンに//
      $(this).toggleClass("is-open");
      //クリックされた要素の直後の要素を300ミリ秒でスライド表示する//
      $(this).next().slideToggle(300);
    });
  });

  /* ===============================================
  # トップに戻るボタン
  =============================================== */
  $(window).on("scroll", function () {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var footHeight = $("footer").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight) {
      $(".js-to-top").css({
        position: "absolute",
        bottom: footHeight + 19
      });
    } else {
      $(".js-to-top").css({
        position: "fixed",
        bottom: "16px"
      });
      9;
    }
  });
  var topBtn = $("#page-top");
  topBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  topBtn.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 500, "swing");
    return false;
  });

  /* ===============================================
  #  サイドバー（アーカイブ）
  =============================================== */
  $(document).ready(function () {
    $(".js-archive__title:first").addClass("open");
    $(".side-contents__archive-months:first").css("display", "block");
    $(".js-archive__title").click(function () {
      $(this).next(".side-contents__archive-months").slideToggle();
      $(this).toggleClass("open");
    });
  });

  /* ===============================================
  # GSAP
  =============================================== */

  window.addEventListener("load", function () {
    var openingTL = gsap.timeline();
    openingTL.fromTo(".opening__logo", {
      autoAlpha: 0
    }, {
      autoAlpha: 1,
      delay: 0.5
    }).to(".opening__logo", {
      duration: 0.5,
      autoAlpha: 0,
      scale: 1.1,
      filter: "blur(5px)"
    }, "+=1").to(".opening__mask", {
      duration: 1.5,
      scaleX: 0,
      ease: "power4.inOut"
    }, "-=.2").to(".first-view__slide-img", {
      duration: 1.5,
      clipPath: "inset(0 0% 0 0)",
      ease: "power4.inOut",
      stagger: 0
    }, "-=.8").set(".opening", {
      autoAlpha: 0
    });
  });

  /* ===============================================
  # タブメニュー
  =============================================== */
  $(".js-tab-menu").on("click", function () {
    $(".js-tab-menu").removeClass("is-active");
    $(".js-tab-content").removeClass("is-active");
    $(this).addClass("is-active");
    var number = $(this).data("number");
    $("#" + number).addClass("is-active");
  });

  /* ===============================================
  # 別ページからタブメニューへダイレクトリンク
  =============================================== */
  $(document).ready(function () {
    var hash = window.location.hash;
    if (hash) {
      // ハッシュに基づいてタブをアクティブにする
      $(".js-tab-menu").removeClass("is-active");
      $(".js-tab-content").removeClass("is-active");
      $('.js-tab-menu[data-number="' + hash.substring(1) + '"]').addClass("is-active");
      $(hash).addClass("is-active");
    }
  });
  $(document).ready(function () {
    var hash = window.location.hash;
    if (hash) {
      // ハッシュに基づいてタブをアクティブにする
      $(".js-tab-menu").removeClass("is-active");
      $(".js-tab-content").removeClass("is-active");
      $('.js-tab-menu[data-number="' + hash.substring(1) + '"]').addClass("is-active");
      $(hash).addClass("is-active");

      // ページ内リンクの場合、指定の位置（100px上）で表示
      if ($(hash).length > 0) {
        var targetOffset = $(hash).offset().top - 500;
        $("html, body").animate({
          scrollTop: targetOffset
        }, 300);
      }
    }
  });
  $(document).ready(function () {
    var hash = window.location.hash;
    if (hash) {
      // ハッシュに基づいてタブをアクティブにする
      $(".js-tab-menu").removeClass("is-active");
      $(".js-tab-content").removeClass("is-active");
      $('.js-tab-menu[data-number="' + hash.substring(1) + '"]').addClass("is-active");
      $(hash).addClass("is-active");

      // ページ内リンクの場合、指定の位置（100px上）で表示
      if ($(hash).length > 0) {
        var targetOffset = $(hash).offset().top - 500;
        $("html, body").animate({
          scrollTop: targetOffset
        }, 300);
      }
    }
  });

  //終了タグ
});