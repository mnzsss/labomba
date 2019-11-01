   <!-- Call to Action -->
   <section class="bg-dark" id="cta">
       <div class="container">
           <div class="row">
               <div class="col-md-9 col-sm-12">
                   <h2>vamos bater um papo ?</h2>
                   <p>
                       É muito fácil começar a criar um novo universo para sua marca, o
                       primeiro passo é a gente se conhecer melhor. Vamos lá?
                   </p>
               </div>
               <div class="col-md-3 col-sm-12 text-center">
                   <a href="https://briefing.estudiolabomba.com/" target="blank">
                       <img src="<?php bloginfo('template_directory');?>/assets/img/labomba_logo_bomba.svg"
                           class="img-fluid mb-4" alt="Estúdio LaBomba" />
                   </a>
                   <p>clique na bomba para um projeto</p>
                   <a href="https://briefing.estudiolabomba.com/" target="blank" class="link">Foda</a>
               </div>
           </div>
       </div>
   </section>


   <!-- Rodapé -->
   <footer>
       <div class="container">
           <div class="row align-items-end">
               <div class="col-md-5 col-sm-12">
                   <h4>Onde nos encontrar ?</h4>
                   <h4><i class="fas fa-map-marker-alt pr-2"></i>Santo André</h4>
                   <p>Avenida Itamarati, 878 - Santo André / SP</p>
               </div>
               <div class="col-md-7 col-sm-12 text-right">
                   <h4 class="d-block d-lg-none">+55 11 2896 5199</h4>
                   <ul id="informacoes-rodape">
                       <li class="d-none d-lg-block">
                           <h4>+55 11 2896 5199</h4>
                       </li>
                       <li>
                           <a href="https://www.instagram.com/estudio.labomba/" target="blank">
                               <i class="fab fa-instagram"></i>
                           </a>
                       </li>
                       <li>
                           <a href="https://www.behance.net/estudiolabomba" target="blank">
                               <i class="fab fa-behance"></i>
                           </a>
                       </li>
                       <li>
                           <a href="https://www.facebook.com/estudiolabomba" target="blank">
                               <i class="fab fa-facebook-f"></i>
                           </a>
                       </li>
                       <li>
                           <a href="https://www.linkedin.com/company/est%C3%BAdio-la-bomba/about/" target="blank">
                               <i class="fab fa-linkedin-in"></i>
                           </a>
                       </li>
                       <li>
                           <a href="https://vimeo.com/user34771087" target="blank">
                               <i class="fab fa-vimeo-v"></i>
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </footer>

   <?php wp_footer();?>
   <!-- Scripts -->
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <script>
AOS.init();
   </script>

   <script>
$(document).ready(function() {
    $(document).on("click", ".cta", function() {
        $(this).toggleClass("active");
    });
});

var loader = document.getElementById("loader");

function load() {
    loader.style.opacity = "0";
    loader.style.visibility = "hidden";
}
setTimeout(load, 3050);
   </script>
   </body>

   </html>