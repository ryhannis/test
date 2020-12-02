<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Inventive_Ventures
 */

 

get_header(); 



get_template_part( 'template-parts/content-about' );
?>

<ul class="slider">
    <?php $args = array(
      'posts_per_page'   => -1,
	  'post_type'        => 'post',
	  'orderby'=> 'title',
	  'order' => 'ASC'
    );
    $loop = new WP_Query( $args ); 
    if ($loop->have_posts() ) : while ($loop->have_posts() ) : $loop->the_post(); 
      get_template_part( 'template-parts/content-slider' );
      
     endwhile; endif; ?>
     
</ul>

  

<?php get_footer(); ?>
