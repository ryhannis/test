<section class="hero-copy">
<div class="hero-content flex justify-between flex-column items-center tc h-100 w-70">

	<div class="cs-heading">
	<!-- CASE TITLE -->
	<h1 class="case-title lh-title ttu"><?php the_title(); ?></h1>
	<!-- ESTABLISHED DATE -->
	<?php if( get_field('date') ): ?>
		<p class="date lh-solid ttu"><?php the_field('date'); ?></p>
	<?php endif; ?>
	</div>

	<!-- CASE DESCRIPTION -->
	<h2 class="case-copy lh-copy ttu center" ><?php the_content(); ?></h2>

	<!-- SITE LINK -->
	<?php 
$link = get_field('web_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="cs-link ttu " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>

</div>
</section>