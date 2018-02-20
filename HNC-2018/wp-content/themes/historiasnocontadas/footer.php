<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>

	</div><!-- #main  -->

	<footer id="colophon" role="contentinfo">
			<div class="container py-2">
        <div class="row">
          <div class="col-xs-12 col-md-4 col-lg-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
          </div>
          <div class="col-xs-12 col-md-4 col-lg-4">
            <p>¿Desea recibir notificaciones de los últimos artículos en su correo electrónico? ¡Suscríbase a nuestro newsletter!.</p>
            <a href="#" id="suscribirse" class="p-1" data-toggle="modal" data-target="#exampleModal">Suscribirse</a>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suscribirse</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="43" title="Suscribirse"]') ?>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div id="footer-bajo">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <p class="p-2">© Historias No Contadas.</p>
            </div>
          </div>
        </div>
      </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
