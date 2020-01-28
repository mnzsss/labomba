// Mega Menu Icon
$(".nav_icon").click(function() {
  $(this).toggleClass("open");
  $(".nav_menu").toggleClass("open");
});

// Studio
$(window).on("scroll", () => {
  const windowHeight = $(window).height();

  // Show video
  if ($(this).scrollTop() > windowHeight / 1.7) {
    $(".studio_video").css({ opacity: 0.4 });
    $(".studio_lamp").css({ opacity: 1 });
  } else {
    $(".studio_video").css({ opacity: 0 });
    $(".studio_lamp").css({ opacity: 0 });
  }

  // Change text about with scroll
  if ($(this).scrollTop() > windowHeight * 1.12) {
    $(".about_content-paragraph").html(
      "Somos percepção e caminho, criamos conceitos, estratégias, acreditamos que a marca se comunica com o seu propósito, esse é o verdadeiro sentido."
    );
  } else {
    $(".about_content-paragraph").html(
      "Nós aumentamos o potencial competitivo e resultados de nossos clientes, gerando ligação emocional entre consumidores e a marca através da ousadia, estratégia, arte e design"
    );
  }

  // Change elements universe section
  if ($(this).scrollTop() > windowHeight * 1.7) {
    $(".background_detail_magenta").css({
      position: "absolute",
      top: "10px",
      left: "10px"
    });
    $(".background_detail_amarelo").css({ bottom: "70%" });
  } else {
    $(".background_detail_magenta").css({
      position: "fixed",
      top: "-14%",
      left: "90%"
    });
    $(".background_detail_amarelo").css({ bottom: "8em" });
  }
});
