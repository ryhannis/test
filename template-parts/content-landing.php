<!-- <h1>
<a href="<?php the_permalink(); ?>">
check out <?php the_title(); ?>
</a>
</h1> -->


<section class="hero items-center">
	<!-- HERO IMAGE -->
	
<div class="container relative">
<div class="hero-image cover bg-center center tc" style="<?php 
nice_background('hero_image'); ?>">

		<!-- HERO LOGO -->
		<div class="hero-image-logo w-25-ns w-50 contain bg-center absolute center" style="<?php if( get_field('logo') ): ?>
		background-image: url(<?php the_field('logo'); ?>)
		<?php endif; ?>">
		</div>
</div>
</div>

</section>