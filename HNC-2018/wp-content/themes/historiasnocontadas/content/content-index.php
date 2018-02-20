<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>

<section id="slider-inicial">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <?php if( have_rows('imagenes_slider') ):
                $class_active = 1;
                  while ( have_rows('imagenes_slider') ) : the_row();
                  if ($class_active == 1){
                    $class_active = 'active';
                  }?>
                      <div class="carousel-item <?php echo $class_active ?>">
                        <img class="d-block w-100" src="<?php the_sub_field('imagen'); ?>" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                          <h5><?php the_sub_field( "titulo" ); ?></h5>
                          <p><?php the_sub_field( "parrafo" ); ?></p>
                        </div>
                      </div>
                <?php
                $class_active++;
                  endwhile;
              else :
                  // no rows found
              endif; ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</section>
<pre>
  <?php
    $post_object = get_field('noticia_parallax');
    if( $post_object ):
      $post = $post_object;
      setup_postdata( $post );
      $url_post = get_the_permalink();
      $titulo_post = get_the_title();
      $url_img = get_the_post_thumbnail_url();
      $fecha_post = get_the_time('l d M Y');
      $content_short = substr(get_the_content(), 0, 70)."...";
  ?>
  <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif; ?>
</pre>
<!-- listar noticias principales -->
<section class="container mt-3" id="loop-noticias-pp">
  <div class="row">
    <?php query_posts('showposts=6'); /* Con esta línea limitamos el resultado a 5 resultados */ ?>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="col-xs-12 col-sm-6 col-md-4 my-3">
          <div class="img-post">
            <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <div class="titulo-post">
            <h5><?php the_title();?></h5>
          </div>
          <small class="fecha-post"><?php the_time('l d M Y') ?></small>
          <div class="parra-post">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
          </div>
          <a href="<?php the_permalink() ?>" class="btn-leer-mas">Leer más</a>
        </div>
    <?php endwhile; endif;?>
  </div>
</section>
<!-- end listar noticias principales -->

<!-- parallax y noticia -->
    <section class="cw-100 my-3 post-destacado" id="paralax" style="background:url('<?php echo $url_img ?>');
                    background-attachment: fixed;
                    background-position: center;
                    background-repeat: no-repeat;
                    background-size: cover;">
        <div id="encima-paralax">
          <div class="info-post-destacado d-flex justify-content-center pt-3">
            <span><?php echo $fecha_post ?> </span>
          </div>
          <div class="d-flex justify-content-center">
            <hr>
          </div>
          <div class="d-flex justify-content-center my-4">
            <h4><?php echo $titulo_post ?></h4>
          </div>
          <div class="d-flex justify-content-center my-4">
            <h5><?php echo $content_short ?></h5>
          </div>
          <div class="d-flex justify-content-center my-4">
            <a href="<?php echo $url_post ?>" class="a-paralax-leer-mas">Leer más</a>
          </div>
        </div>
    </section>
<!-- end parallax y noticia -->

<!-- noticias y slide y noticias -->
<section class="container mt-4 mb-5" id="loop-noticias-sec">
  <div class="row">
    <?php query_posts('showposts=3'); /* Con esta línea limitamos el resultado a 5 resultados */ ?>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <div class="col-xs-12 col-sm-6 col-md-4 my-3">
          <div class="img-post">
            <a href="<?php the_permalink() ?>">
            <?php the_post_thumbnail(); ?>
            </a>
          </div>
          <div class="titulo-post">
            <h5><?php the_title();?></h5>
          </div>
          <small class="fecha-post"><?php the_time('l d M Y') ?></small>
          <div class="parra-post">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
          </div>
          <a href="<?php the_permalink() ?>" class="btn-leer-mas">Leer más</a>
        </div>
    <?php endwhile; endif;?>
  </div>
    <div class="row">
      <hr id="hr-baja">
      <h4 class="ml-4 pb-4">Destacados</h4>
    </div>
  <div class="row" id="slider-bajo-noticias">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 p-0 borde">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <?php query_posts('showposts=3');
              $class_ac = 1;
            ?>
            <?php if (have_posts()) : while (have_posts()) : the_post();?>
              <?php if ($class_ac == 1){
                $class_ac = 'active';
              }?>
              <div class="carousel-item <?php echo $class_ac ?>">
                <img class="d-block w-100" src="<?php echo get_the_post_thumbnail_url() ?>" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                  <h5><?php the_title();?></h5>
                  <p><?php echo substr(get_the_content(), 0, 70)."..."; ?> </p>
                </div>
              </div>
            <?php $class_ac++; endwhile; endif;?>
          </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
      <div class="row" id="noticias-bottom">
        <?php query_posts('showposts=1&orderby=rand') ?>
        <?php if (have_posts()) : while (have_posts()) : the_post()?>
          <div class="col-xs-6 col-md-6 col-lg-6 div-bg-img img-bj-1-2 borde" style="background:url('<?php echo get_the_post_thumbnail_url() ?>');min-height: 200px">
            <div class="contenido-post-pq">
              <a href="<?php the_permalink() ?>"><h5 class="text-center mt-5 text-uppercase"><?php the_title();?></h5></a>
              <p class="text-center"><?php echo substr(get_the_content(), 0, 70)."..."; ?></p>
            </div>
          </div>
        <?php endwhile; endif;?>
        <?php query_posts('showposts=1&orderby=rand') ?>
        <?php if (have_posts()) : while (have_posts()) : the_post()?>
          <div class="col-xs-6 col-md-6 col-lg-6 div-bg-img img-bj-1-2 borde" style="background:url('<?php echo get_the_post_thumbnail_url() ?>');min-height: 200px;">
            <div class="contenido-post-pq">
              <a href="<?php the_permalink() ?>"><h5 class="text-center mt-5 text-uppercase"><?php the_title();?></h5></a>
              <p class="text-center"><?php echo substr(get_the_content(), 0, 70)."..."; ?></p>
            </div>
          </div>
        <?php endwhile; endif;?>

        <?php query_posts('showposts=1&orderby=rand') ?>
        <?php if (have_posts()) : while (have_posts()) : the_post()?>
          <div class="col-xs-12 col-md-12 col-lg-12 div-bg-img borde" style="background:url('<?php echo get_the_post_thumbnail_url() ?>');min-height: 212px;">
            <h5 class="text-center mt-5 text-uppercase"><?php the_title();?></h5>
            <p class="px-3 text-center"><?php echo substr(get_the_content(), 0, 70)."..."; ?></p>
          </div>
        <?php endwhile; endif;?>
      </div>
  </div>
  </div>
</section>
<!-- noticias y slide y noticias -->
