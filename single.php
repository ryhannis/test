<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Inventive_Ventures
 */

get_header();
?>

	<main id="primary" class="site-main">

	next_post_link( string $format = '%link &raquo;', string $link = '%title', bool $in_same_term = false, array|string $excluded_terms = '', string $taxonomy = 'category' )

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			

		endwhile; // End of the loop.
		?>
		
<div class="prev items-center center absolute">
	<div class="pagination-inner">
	<?php previous_post_link()?>
	</div>
</div>

<div class="next items-center cente absolute">
	<div class="pagination-inner">
	<?php next_post_link()?>
	
	</div>
</div>



	</main><!-- #main -->

<?php
 get_footer();

 