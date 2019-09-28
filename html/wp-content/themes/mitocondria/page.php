<?php
get_header();
?>

<section class="llamado" id="llamado">
  <div class="wrap">
    <figure>
      <img src="<?php the_field('imagen_hero'); ?>" alt="" class="wow fadeInRight">
    </figure>
    <div class="row">
      <div class="col-lg-4">
        <h1 class="wow fadeInUp2"><?php the_field('titulo_hero'); ?></h1>
        <p class="wow fadeInUp2" data-wow-delay=".5s"><?php the_field('texto_hero'); ?></p>
        <a href="<?php the_field('boton_url_hero'); ?>" class="btn btn-verde wow fadeInUp2" data-wow-delay=".7s"><?php the_field('boton_texto_hero'); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="featured bg-gris" id="features">
  <div class="wrap">
    <h2 class="text-center wow fadeInUp2"><?php the_field('titulo_feat'); ?></h2>

	  <?php if( have_rows('card_feat') ): ?>
    	<div class="row">

      <?php while( have_rows('card_feat') ): the_row(); 

			// vars
			$icono = get_sub_field('icono_card');
			$titulo = get_sub_field('titulo_card');
			$texto = get_sub_field('texto_card');
			$link = get_sub_field('link_card');
      ?>

        <div class="col-lg-4 col-md-6">
          <div class="box-feat wow fadeInUp2" data-wow-delay="0s">
            <figure>
              <span class="<?php echo $icono; ?>"></span>
            </figure>
            <h3><?php echo $titulo; ?></h3>
            <p><?php echo $texto; ?></p>
            <a href="<?php echo $link; ?>">Learn More</a>
          </div>
        </div>
		  <?php endwhile; ?>
    </div>
		<?php endif; ?>
  </div>
</section>

<section class="create">
  <div class="wrap">
    <div class="row">
      <div class="col-lg-7">
        <figure class="wow fadeInLeft">
          <img src="<?php the_field('imagen_proto'); ?>" alt="">
        </figure>
      </div>
      <div class="col-lg-5">
        <h2 class="wow fadeInUp2"><?php the_field('titulo_proto'); ?></h2>
        <?php the_field('texto_proto'); ?>

        <div class="card-test wow fadeIn">
          <div class="head-card">
            <figure>
              <img src="<?php the_field('imagen_autor_proto'); ?>" alt="">
            </figure>
            <div class="title-card">
              <h4><?php the_field('autor_proto'); ?></h4>
              <h5><?php the_field('cargo_proto'); ?></h5>
            </div>
          </div>
          <blockquote><?php the_field('texto_testimomio_proto'); ?></blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="about bg-gris" id="about">
  <div class="wrap">
    <h2 class="text-center wow fadeInUp2"><?php the_field('titulo_about'); ?></h2>
    <div class="row">
      <div class="col-lg-6">
        <figure class="wow fadeIn">
          <img src="<?php the_field('imagen_about'); ?>" alt="">
        </figure>
      </div>
      <div class="col-lg-5 ml-auto">
        <h3 class="wow fadeInUp2" data-wow-delay=".2s"><?php the_field('titulo_2_about'); ?></h3>
        <p class="wow fadeInUp2" data-wow-delay=".4s"><?php the_field('texto_about'); ?></p>
        <a href="<?php the_field('link_boton_about'); ?>" class="btn btn-verde wow fadeInUp2" data-wow-delay=".6s"><?php the_field('texto_boton_about'); ?></a>
      </div>
    </div>
  </div>
</section>

<section class="testimonial" id="testimonials">
  <div class="wrap">
    <h2 class="text-center wow fadeInUp2"><?php the_field('titulo_test'); ?></h2>

    <div class="carrusel wow fadeIn">
      <div class="carrusel-1" id="w-test">
        <?php if( have_rows('testimonio') ): ?>
        <?php while( have_rows('testimonio') ): the_row(); 

          // vars
          $imagen = get_sub_field('imagen_test');
          $texto = get_sub_field('texto_test');
          $autor = get_sub_field('autor_test');
          ?>
            <div class="item item-test">
              <figure>
                <img src="<?php echo $imagen; ?>" alt="">
              </figure>
              <blockquote>
                <p><?php echo $texto; ?></p>
              </blockquote>
              <h5><?php echo $autor; ?></h5>
            </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="contact bg-gris" id="contact">
  <div class="wrap">
    <h2 class="text-center wow fadeInUp2"><?php the_field('titulo_contacto'); ?></h2>
    <div class="w-form wow fadeIn">
      <h3><?php the_field('titulo_2_contacto'); ?></h3>

      <?php
      echo do_shortcode(get_field('formulario'));
      ?>
    </div>
  </div>
</section>

<?php
get_footer();
