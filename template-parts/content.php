<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inventive_Ventures
 */
get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- 'HERO' NEEDS A INLINE STYLE ATTRIBUTE 'BACKGROUND-IMG' ON IT-->


<?php get_template_part( 'template-parts/content-landing' ); ?>
	<!-- TEXT CONTENT -->
	<?php get_template_part( 'template-parts/content-bodycopy' ); ?>
	<?php get_template_part( 'template-parts/content-image-gallery' ); ?>
	

	<footer class="entry-footer">
		<?php //inventive_ventures_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
