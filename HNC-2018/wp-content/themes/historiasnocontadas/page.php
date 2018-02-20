<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>
<?php if ( get_the_title() == 'Historias no contadas'): ?>

    <?php get_template_part( 'content/content', 'index' ); ?>
    
  <?php else: ?>
    <div id="primary">
      <div id="content">

        <?php the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
          <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </header>

          <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
            <?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
          </div>
        </article>

        <?php comments_template( '', true ); ?>

      </div>
    </div>
    <?php get_sidebar(); ?>
<?php endif; ?>
  <?php get_footer(); ?>
