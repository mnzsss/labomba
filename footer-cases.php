<?php wp_footer();?>

<!-- Next Case -->
<section id="next-post">
    <a href="<?php the_field('link-next');?>">
        <div class="content">
            <div class="content_container">
                <div class="content_bg" style="background-image: url(<?php the_field('bg-next');?>);">
                </div>
                <div class="content_info">
                    <span>Next</span>
                    <h2><?php the_field('name-next');?></h2>
                </div>
            </div>
        </div>
    </a>
</section>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();
</script>
</body>

</html>