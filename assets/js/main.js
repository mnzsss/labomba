// Functions

// Verifica se o Usuário está na div
function isScrolledIntoView(elem) {
  var docViewTop = $(window).scrollTop();
  var docViewBottom = docViewTop + $(window).height();

  var elemTop = $(elem).offset().top;
  var elemBottom = elemTop + $(elem).height();

  return elemBottom <= docViewBottom && elemTop >= docViewTop;
}

// Mega Menu Icon
$(".nav_icon").click(function() {
  $(this).toggleClass("open");
  $(".nav_menu").toggleClass("open");
});

// Studio
// Show video
$(window).on("scroll", function() {
  if (!isScrolledIntoView(".studio_video")) {
    $(".studio_video").addClass("show");
  } else {
    $(".studio_video").removeClass("show");
  }
});

// Change text about with scroll
$(window).scroll(function() {
  let windowHeight = $(window).height();

  if ($(this).scrollTop() > windowHeight * 1.13) {
    $(".about_content-paragraph").html(
      "Somos percepção e caminho, criamos conceitos, estratégias, acreditamos que a marca se comunica com o seu propósito, esse é o verdadeiro sentido."
    );
    $(".studio_lamp").css({ opacity: 1 });
  } else {
    $(".about_content-paragraph").html(
      "Nós aumentamos o potencial competitivo e resultados de nossos clientes, gerando ligação emocional entre consumidores e a marca através da ousadia, estratégia, arte e design"
    );
    $(".studio_lamp").css({ opacity: 0 });
  }
});
