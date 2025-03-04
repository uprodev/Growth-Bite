const winLg = 1024;
let mm = gsap.matchMedia();

jQuery(document).ready(function ($) {
  // if (navigator.userAgent.indexOf("Mac") > 0 || navigator.userAgent.indexOf("iPhone") > 0) {
  //   $("body").addClass("mac-os");
  // }

  if ($(".logos-slider").length) {
    const tickerSlider = new Swiper(".logos-slider", {
      loop: true,
      spaceBetween: 5,
      slidesPerView: "auto",
      allowTouchMove: false,
      spaceBetween: 16,
      speed: 5000,
      autoplay: {
        delay: 0,
        disableOnInteraction: false,
      },
      breakpoints: {
        768: {
          spaceBetween: 30,
        },
        1024: {
          spaceBetween: 60,
        },
        1360: {
          spaceBetween: 110,
        },
      },
      on: {
        init: function () {
          ScrollTrigger.refresh();
        },
      },
    });
  }

  // reviews slider
  if ($(".reviews-slider").length) {
    const reviewsSlider = new Swiper(".reviews-slider", {
      loop: false,
      spaceBetween: 16,
      speed: 500,
      slidesPerView: 1.2,
      navigation: {
        nextEl: ".reviews-controls .swiper-button-next",
        prevEl: ".reviews-controls .swiper-button-prev",
      },
      pagination: {
        el: ".reviews-slider .swiper-pagination",
      },
      breakpoints: {
        768: {
          slidesPerView: 2.2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 3.1,
          spaceBetween: 32,
        },
      },
    });
  }

  //header
  function navOpen() {
    const scrollY = $(window).scrollTop();
    $("body").css({ position: "fixed", top: -scrollY });
    $(".navbar-toggler").addClass("active");
    $(".header").addClass("nav-opened");
    $(".navigation-main").addClass("active");
  }

  function navClose() {
    const scrollY = document.body.style.top;
    $("body").css({ position: "initial", top: 0 });
    window.scrollTo(0, parseInt(scrollY || "0") * -1);

    $(".navbar-toggler").removeClass("active");
    setTimeout(() => {
      $(".header").removeClass("nav-opened");
    }, 300);
    $(".navigation-main").removeClass("active");
  }

  $(".header .navbar-toggler").on("click", function () {
    if ($(this).hasClass("active")) {
      navClose();
    } else {
      navOpen();
    }
  });

  $(".navigation-main li").each(function () {
    if ($(this).find("ul").length) {
      $(this).addClass("menu-parent");
    }
  });

  $(".menu-parent > a").each(function () {
    $(this).append($('<span class="icon" />'));
  });
  $(".navigation-main .menu-parent > a").each(function () {
    $(this).find(".icon").append('<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 7.5L10 12.5L15 7.5" stroke="#475467" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/></svg>');
  });
  $(".navigation-main .menu-parent > a").on("click", function (e) {
    if ($(window).width() < winLg) {
      e.preventDefault();
      e.stopPropagation();
      if ($(this).closest("li").hasClass("sub-opened")) {
        $(this).closest("li").removeClass("sub-opened").find("ul").slideUp(300);
      } else {
        $(".navigation-main .sub-opened").removeClass("sub-opened").find("ul").slideUp(300);
        $(this).closest("li").addClass("sub-opened").find("ul").slideDown(300);
      }
    }
  });
  $(document).on("click", function (e) {
    $(".navigation-main .sub-opened").removeClass("sub-opened").find("ul").slideUp(300);
  });

  if (document.querySelector(".service-steps")) {
    const container = document.querySelector(".service-steps");

    mm.add("(min-width: 768px)", () => {
      tl = gsap
        .timeline({
          scrollTrigger: {
            trigger: ".service-steps",
            start: "top center",
          },
        })
        .to(".steps-line", {
          scaleX: 1,
          duration: 3,
          ease: "none",
        })
        .to(
          ".step1 .step-number",
          {
            color: "#000",
            duration: 0.01,
          },
          "-=3"
        )
        .to(
          ".step1 .hightlight",
          {
            scale: 1,
            duration: 0.3,
          },
          "-=3"
        )
        .to(
          ".step2 .step-number",
          {
            color: "#000",
            duration: 0.01,
          },
          "-=2"
        )
        .to(
          ".step2 .hightlight",
          {
            scale: 1,
            duration: 0.3,
          },
          "-=2"
        )
        .to(
          ".step3 .step-number",
          {
            color: "#000",
            duration: 0.01,
          },
          "-=1"
        )
        .to(
          ".step3 .hightlight",
          {
            scale: 1,
            duration: 0.3,
          },
          "-=1"
        );
    });
    mm.add("(max-width: 767px)", () => {
      gsap.to(".steps-line", {
        scrollTrigger: {
          trigger: container,
          start: "top center",
          end: `+=${container.offsetHeight}`,
          scrub: true,
        },
        scaleY: 1,
        ease: "none",
      });

      document.querySelectorAll(".step-item").forEach((step) => {
        gsap.to(step.querySelector(".step-number"), {
          scrollTrigger: {
            trigger: step,
            start: "top center",
          },
          color: "#000",
          ease: "none",
          duration: 0.01,
        });
        gsap.to(step.querySelector(".hightlight"), {
          scrollTrigger: {
            trigger: step,
            start: "top center",
          },
          scale: 1,
          duration: 0.3,
        });
      });
    });
  }

  if ($(".banner-home").length) {
    let gradient0 = "radial-gradient(50% 50% at 50% 50%, #f0f9ff 0%, #f0f9ff 100%)",
      gradient1 = "radial-gradient(50% 50% at 50% 50%, #7CD4FD 0%, #f0f9ff 100%)",
      gradient2 = "radial-gradient(50% 50% at 50% 50%, #32D583 0%, #f0f9ff 100%)",
      gradient3 = "radial-gradient(50% 50% at 50% 50%, #FEC84B 0%, #f0f9ff 100%)",
      gradient4 = "radial-gradient(50% 50% at 50% 50%, #D6BBFB 0%, #f0f9ff 100%)",
      gradient5 = "radial-gradient(50% 50% at 50% 50%, #32D583 0%, #f0f9ff 100%)",
      gradient6 = "radial-gradient(50% 50% at 50% 50%, #FEC84B 0%, #f0f9ff 100%)";
    let d = 1.5;

    tlBg = gsap.timeline({
      repeat: -1,
      paused: true,
    });
    tlBg
      .fromTo(
        ".bg-right",
        {
          background: gradient0,
          x: "0%",
          y: "0%",
        },
        {
          background: gradient1,
          x: "0%",
          y: "0%",
          ease: "none",
          duration: d,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient1,
          x: "0%",
          y: "0%",
        },
        {
          background: gradient0,
          x: "10%",
          y: "0%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient0,
          x: "10%",
          y: "0%",
        },
        {
          background: gradient2,
          x: "20%",
          y: "0%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient2,
          x: "20%",
          y: "0%",
        },
        {
          background: gradient0,
          x: "10%",
          y: "10%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient0,
          x: "10%",
          y: "10%",
        },
        {
          background: gradient3,
          x: "0%",
          y: "20%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient3,
          x: "0%",
          y: "20%",
        },
        {
          background: gradient0,
          x: "10%",
          y: "10%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient0,
          x: "10%",
          y: "10%",
        },
        {
          background: gradient4,
          x: "20%",
          y: "0%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient4,
          x: "20%",
          y: "0%",
        },
        {
          background: gradient0,
          x: "10%",
          y: "10%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient0,
          x: "10%",
          y: "10%",
        },
        {
          background: gradient5,
          x: "0%",
          y: "20%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient5,
          x: "0%",
          y: "20%",
        },
        {
          background: gradient0,
          x: "10%",
          y: "10%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient0,
          x: "10%",
          y: "10%",
        },
        {
          background: gradient6,
          x: "10%",
          y: "0%",
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-right",
        {
          background: gradient6,
          x: "10%",
          y: "0%",
        },
        {
          background: gradient0,
          x: "0%",
          y: "0%",
          ease: "none",
          duration: 1.5,
        }
      );

    let gradient00 = "radial-gradient(50% 50% at 50% 50%, #f0f9ff 0%, #f0f9ff 31%, #f0f9ff 100%)",
      gradient01 = "radial-gradient(50% 50% at 50% 50%, #a6f4c5 0%, #d1fadf 31%, #f0f9ff 100%)",
      gradient02 = "radial-gradient(50% 50% at 50% 50%, #FEF0C7 0%, #F8F4E0 31%, #f0f9ff 100%)",
      gradient03 = "radial-gradient(50% 50% at 50% 50%, #D9D6FE 0%, #E4E6FF 31%, #f0f9ff 100%)",
      gradient04 = "radial-gradient(50% 50% at 50% 50%, #a6f4c5 0%, #d1fadf 31%, #f0f9ff 100%)",
      gradient05 = "radial-gradient(50% 50% at 50% 50%, #C7D7FE 0%, #D8E6FF 31%, #f0f9ff 100%)",
      gradient06 = "radial-gradient(50% 50% at 50% 50%, #D9D6FE 0%, #E4E6FF 31%, #f0f9ff 100%)";

    tlBg1 = gsap.timeline({
      repeat: -1,
      paused: true,
    });
    tlBg1
      .fromTo(
        ".bg-left",
        {
          background: gradient00,
        },
        {
          background: gradient01,
          ease: "none",
          duration: d,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient01,
        },
        {
          background: gradient00,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient00,
        },
        {
          background: gradient02,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient02,
        },
        {
          background: gradient00,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient00,
        },
        {
          background: gradient03,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient03,
        },
        {
          background: gradient00,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient00,
        },
        {
          background: gradient04,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient04,
        },
        {
          background: gradient00,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient00,
        },
        {
          background: gradient05,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient05,
        },
        {
          background: gradient00,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient00,
        },
        {
          background: gradient06,
          ease: "none",
          duration: 1.5,
        }
      )
      .fromTo(
        ".bg-left",
        {
          background: gradient06,
        },
        {
          background: gradient00,
          ease: "none",
          duration: 1.5,
        }
      );

    ScrollTrigger.create({
      trigger: ".banner-home",
      start: "top bottom",
      end: "bottom top",
      onEnter: function () {
        tlBg.play();
        tlBg1.play();
      },
      onEnterBack: function () {
        tlBg.play();
        tlBg1.play();
      },
      onLeave: function () {
        tlBg.pause();
        tlBg1.pause();
      },
    });
  }

  // content-nav
  if (document.querySelector(".content-nav")) {
    function buildArticleAnchors(index, heading) {
      var a = $("<a>");

      var name = "section" + index;
      $(heading).attr("id", name);
      a.attr("href", "#" + name);
      a.text($(heading).text());
      return a;
    }
    var headings = $(".page-content h4");
    var sections = headings.map(function (i, e) {
      var a = buildArticleAnchors(i, e);
      var li = $("<li>");
      li.append(a);
      $(".content-nav ul").append(li);
      return li;
    });

    $(".page-content h4").waypoint(
      function (direction) {
        if (direction === "down") {
          $(".content-nav .active").removeClass("active");
          var selector = ".content-nav a[href='#" + this.element.id + "']";
          $(selector).parent().addClass("active");
        }
      },
      {
        offset: 50,
      }
    );

    $(".page-content h4").waypoint(
      function (direction) {
        if (direction === "up") {
          $(".content-nav .active").removeClass("active");
          var selector = ".content-nav a[href='#" + this.element.id + "']";
          $(selector).parent().prev().addClass("active");
        }
      },
      {
        offset: 50,
      }
    );

    $(".content-nav a").on("click", function (e) {
      e.preventDefault();
      var dest = $($(this).attr("href"));
      $("html, body").animate({ scrollTop: dest.offset().top - 40 }, 300);
    });

    mm.add("(min-width: 768px)", () => {});
    ScrollTrigger.create({
      trigger: ".text-wrapper",
      start: "top 0",
      end: (self) => "+=" + (document.querySelector(".text-wrapper").offsetHeight - self.pin.offsetHeight),
      pin: ".content-nav",
      pinSpacing: false,
    });
  }
});
