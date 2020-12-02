<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inventive_Ventures
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header"> -->
		<!-- <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>.entry-header -->

	<?php inventive_ventures_post_thumbnail(); ?>

	<div class="entry-content case-copy lh-copy info-pages tc w-80 w-70-ns items-center center flex-column ">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'inventive-ventures' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->


<?php if ( is_page(02)) : ?>
<div class="menu-overlay fixed top-0 left-0 w-100 h-100 bg-white flex items-center justify-center ">
  <div class="faded-overlay"></div>
  <nav>
    <?php $args = array(
      'posts_per_page'   => -1,
	  'post_type'        => 'post',
	  'orderby'=> 'title',
	  'order' => 'ASC'
    );
    $query = new WP_Query( $args ); ?>
    <?php if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="tc link post-link" data-image="<?php the_field('hero_image'); ?>">
        <h1 class=" pa3 ttu ma0">
          <?php the_title(); ?>
        </h1>
      </a>
    <?php endwhile; endif; ?>
  </nav>
</div>
<?php endif; ?>