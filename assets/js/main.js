$(document).ready(() => {
  // Mega Menu Icon
  $(".nav_icon").click(function() {
    $(this).toggleClass("open");
    $(".nav_menu").toggleClass("open");
    $(".header_footer").toggleClass("fixed");
    $(".nav_content-logo").toggleClass("fixed");
    $("body").toggleClass("hidden");
  });

  // Init ScrollMagic
  const controller = new ScrollMagic.Controller();

  // Scenes
  const aboutScene = new ScrollMagic.Scene({
    triggerElement: ".about_content",
    duration: "200%"
  })
    .setPin(".about_content")
    .setClassToggle(".about_content", "fade-in")
    .addTo(controller);

  const magentaScene = new ScrollMagic.Scene({
    triggerElement: "body",
    duration: "300%",
    triggerHook: 0.1
  })
    .setPin(".background_detail_magenta")
    .addTo(controller);

  const lampScene = new ScrollMagic.Scene({
    triggerElement: ".studio",
    duration: "1000%",
    triggerHook: 1
  })
    .setPin(".studio_lamp")
    .setClassToggle(".studio_lamp", "fade-in")
    .addTo(controller);

  const amareloScene = new ScrollMagic.Scene({
    triggerElement: ".universe_content",
    triggerHook: 0.1
  })
    .setClassToggle(".background_detail_amarelo", "transform")
    .addTo(controller);

  const lampMoveScene = new ScrollMagic.Scene({
    triggerElement: ".universe_content",
    triggerHook: 0.1
  })
    .setClassToggle(".studio_lamp", "transform")
    .addTo(controller);

  const universeScene = new ScrollMagic.Scene({
    triggerElement: ".universe_content",
    duration: "678%",
    triggerHook: 0
  })
    .setPin(".universe_content_infos")
    .setClassToggle(".universe_content_infos", "fade-in")
    .addTo(controller);

  const detachShowScene = new ScrollMagic.Scene({
    triggerElement: ".universe_content-detach",
    duration: "100%",
    triggerHook: 0
  })
    .setPin(".universe_content-detach")
    .setClassToggle(".universe_content-detach", "fade-in")
    .addTo(controller);

  const brandingShowScene = new ScrollMagic.Scene({
    triggerElement: ".universe_content-branding",
    duration: "100%",
    triggerHook: 0
  })
    .setPin(".universe_content-branding")
    .setClassToggle(".universe_content-branding", "fade-in")
    .addTo(controller);

  const designShowScene = new ScrollMagic.Scene({
    triggerElement: ".universe_content-design",
    duration: "100%",
    triggerHook: 0
  })
    .setPin(".universe_content-design")
    .setClassToggle(".universe_content-design", "fade-in")
    .addTo(controller);

  // Metodology
  const fisiologyEffectMoveScene = new ScrollMagic.Scene({
    triggerElement: ".effect-description",
    triggerHook: 0.8
  })
    .setClassToggle(".fisiology-effect", "transform")
    .addTo(controller);

  // Carousel Proejcts
  const carousel = $(".projects_content-carousel").flickity({
    cellAlign: "left",
    prevNextButtons: false,
    pageDots: false
  });

  // Dots
  $(".projects_content-dots-prev").on("click", () => {
    carousel.flickity("previous");
  });

  $(".projects_content-dots-next").on("click", () => {
    carousel.flickity("next");
  });
});

// Studio
$(window).on("scroll", () => {
  const windowHeight = $(window).height();

  // Show video
  if ($(this).scrollTop() >= windowHeight / 1.7) {
    $(".studio_video").css({ opacity: 0.4 });
  } else {
    $(".studio_video").css({ opacity: 0 });
  }

  // Change text about with scroll
  if ($(this).scrollTop() > windowHeight * 1.3) {
    $(".about_content-paragraph").html(
      "Somos percepção e caminho, criamos conceitos, estratégias, acreditamos que a marca se comunica com o seu propósito, esse é o verdadeiro sentido."
    );
  } else {
    $(".about_content-paragraph").html(
      "Nós aumentamos o potencial competitivo e resultados de nossos clientes, gerando ligação emocional entre consumidores e a marca através da ousadia, estratégia, arte e design"
    );
  }
});
