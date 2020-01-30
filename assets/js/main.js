$(document).ready(function() {
  // Mega Menu Icon
  $(".nav_icon").click(function() {
    $(this).toggleClass("open");
    $(".nav_menu").toggleClass("open");
    $(".header_footer").toggleClass("fixed");
    $(".nav_content-logo").toggleClass("fixed");
    $("body").toggleClass("hidden");
  });

  // Init ScrollMagic
  var controller = new ScrollMagic.Controller();

  // Scenes
  var aboutScene = new ScrollMagic.Scene({
    triggerElement: ".studio",
    duration: "200%"
  })
    .setPin(".about_content")
    .setClassToggle(".about_content", "fade-in")
    .addTo(controller);

  var magentaScene = new ScrollMagic.Scene({
    triggerElement: "body",
    duration: "300%",
    triggerHook: 0.1
  })
    .setPin(".background_detail_magenta")
    .addTo(controller);

  var lampScene = new ScrollMagic.Scene({
    triggerElement: ".studio",
    triggerHook: 1
  })
    .setPin(".studio_lamp")
    .setClassToggle(".studio_lamp", "fade-in")
    .addTo(controller);
});

// Studio
$(window).on("scroll", () => {
  const windowHeight = $(window).height();

  // Show video
  if ($(this).scrollTop() > windowHeight / 1.7) {
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
