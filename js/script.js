const hamburger = document.querySelector(".humburger");
const nav = document.querySelector(".sp-header-nav");

if (hamburger && nav) {
  hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");
  });
}
$(function () {
    // // ハンバーガーメニュー
    //  $(".burger").on("click", function(){
    //    $(this).toggleClass("active");
    //    $('.menu').toggleClass("active");
    //    $('body').toggleClass("active");
    //  });
    // $(".js-link,.menu").on("click", function(){
    //   $('.burger').removeClass("active");
    //   $('.menu').removeClass("active");
    //   $('body').removeClass("active");
    // });
    // var prevScrollpos = window.pageYOffset;
    // window.onscroll = function() {
    //   var currentScrollpos = window.pageYOffset;
    //   if (prevScrollpos > currentScrollpos || currentScrollpos < 450) {
    //     document.querySelector(".header").classList.remove("active");
    //   } else {
    //     document.querySelector(".header").classList.add("active");
    //   }
    //   prevScrollpos = currentScrollpos;
    // }
    // 要素が画面下部に来たらshowを付与
    // $(window).scroll(function () {
    //   $('.up,.down,.right,.left,.pop').each(function () {
    //     var top_of_element = $(this).offset().top;
    //     var bottom_of_window = $(window).scrollTop() + $(window).height();
    //     if (bottom_of_window > top_of_element) {
    //       $(this).addClass('show');
    //     }
    //   });
    // });
    // ローディング
    // var loadingFinished = false;
    // var loading = $('.loadUp,.loadDown,.loadRight,.loadLeft,.loadPop');
    // $(window).on('load', function () {
    //   loading.addClass('show');
    //   loadingFinished = true;
    // });
    // setTimeout(function(){
    //   if (!loadingFinished) {
    //     loading.addClass('show');
    //   }
    // }, 2000);
    // アコーディオン
    // $('.js_onClick').on('click', function () {
    //   $(this).next().slideToggle();
    //   $(this).toggleClass('active');
    // });
});


$(function () {
  const fvswiper = new Swiper(".fv-swiper", {
    loop: true,
    // effect: "fade",
    speed: 200,
    allowTouchMove: false,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    fadeEffect: {
      crossFade: true,
    },
  });

  $(window).on("scroll", function () {
    const scrollTop = $(this).scrollTop();
    const fvTop = $(".fv").offset().top;
    const relativeScroll = scrollTop - fvTop;

    if (relativeScroll > -window.innerHeight && relativeScroll < $(".fv").outerHeight()) {
      $(".fv-swiper").css(
        "transform",
        "translateY(" + relativeScroll * 1 + "px)"
      );
    }
  });
});

$(window).on("scroll load", function () {
  const scroll = $(window).scrollTop();
  const windowHeight = $(window).height();

  $(".item").not(".active").each(function () {
    const top = $(this).offset().top;

    if (scroll > top - windowHeight + 0) {
      $(this).addClass("active");
    }
  });
});

$(window).on("scroll", function () {
  $(".item1, .item2, .item3, .item4").each(function (i) {
    const elemPos = $(this).offset().top;
    const scroll = $(window).scrollTop();
    const windowHeight = $(window).height();

    if (scroll > elemPos - windowHeight * 0.7) {
      $(this)
        .delay(i * 200)
        .queue(function () {
          $(this).addClass("is-show").dequeue();
        });
    }
  });
});

const tpworkswiper = new Swiper(".tp-works-swiper", {
  slidesPerView: 3,
  spaceBetween: 10,

  breakpoints: {
    0: {
      slidesPerView: 1,
      slidesPerGroup: 1,
      grid: {
        rows: 3,
        fill: "row",
      },
      loop: false,
    },

    768: {
      slidesPerView: 3,
      slidesPerGroup: 1,
      grid: {
        rows: 1,
      },
      loop: true,
    },
  },

  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

  pagination: {
    el: ".tp-works-pagination",
    clickable: true,
  },

  navigation: {
    nextEl: ".tp-works-swiper-btn-next",
    prevEl: ".tp-works-swiper-btn-prev",
  },
});


$("body").addClass("loading");

$(window).on("load", function () {
  setTimeout(function () {
    $("#loading").addClass("is-open");
  }, 400);

  setTimeout(function () {
    $("#loading").fadeOut(300);
  }, 1800);
});

const worksswiper = new Swiper(".works-swiper", {
    loop: true, // ループ
    slidesPerView: 1, // 1枚表示
    spaceBetween: 20, // スライド間の余白
    autoplay: {
      delay: 3000, // 3秒ごと
      disableOnInteraction: false,
    },
    pagination: {
      el: ".works-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".works-swiper-button-next",
      prevEl: ".works-swiper-button-prev",
    },
  });


