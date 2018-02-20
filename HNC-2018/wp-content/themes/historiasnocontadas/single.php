<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

		<div id="primary">
			<div id="content">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div class="img-post-long" style="background: url('<?php echo get_the_post_thumbnail_url() ?>');background-size: cover;">
					<div class="malla-s"></div>
				</div>

				<div class="container">
					<div class="row">
					<div class="col-lg-9 col-sm-12">
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>

						<div class="entry-meta">
							<?php
								printf( __( '<span class="meta-prep meta-prep-author">Publicado el </span><time class="entry-date" datetime="%2$s" pubdate>%3$s</time>', 'themename' ),
									get_permalink(),
									get_the_date( 'c' ),
									get_the_date(),
									get_author_posts_url( get_the_author_meta( 'ID' ) ),
									sprintf( esc_attr__( 'View all posts by %s', 'themename' ), get_the_author() ),
									get_the_author()
								);
							?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->
				<?php comments_template( '', true ); ?>
					</div>
					<div class="col-lg-3 col-sm-12" id="side-bar-s">
						<?php get_sidebar(); ?>
					<nav id="nav-below" role="article">
						<h1 class="section-heading"><?php _e( 'Publicaciones recientes', 'themename' ); ?></h1>
						<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'themename' ) . '</span> %title' ); ?></div>
						<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'themename' ) . '</span>' ); ?></div>
					</nav><!-- #nav-below -->			

					<?php endwhile; // end of the loop. ?>

					</div>
					</div>
				</div>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>
