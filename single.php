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

	

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			

		endwhile; // End of the loop.
		?>
		

		
<div class="prev items-center center absolute">
	<div class="pagination-inner">
	<?php previous_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.87 96.61"><defs><style>.cls-1{fill:none;stroke:#707070;stroke-width:3px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="Path_275" data-name="Path 275" class="cls-1" d="M52.85,1.1,2.2,48.28,52.85,95.51"/></g></g></svg>');?>
	</div>
</div>

<div class="next items-center cente absolute">
	<div class="pagination-inner">
	<?php next_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.87 96.61"><defs><style>.cls-1{fill:none;stroke:#707070;stroke-width:3px;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path id="Path_275" data-name="Path 275" class="cls-1" d="M1,95.51,51.67,48.33,1,1.1"/></g></g></svg>');?>
	
	</div>
</div>




	</main><!-- #main -->

<?php
 get_footer();

 