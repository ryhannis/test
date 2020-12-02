

	
<div class="slider-item relative flex vh-50 w-30">
<div class="sliderimage vh-50 w-100 bg-center center tc" 
style="<?php nice_background('hero_image'); ?>">
<a href="<?php the_permalink(); ?>" class="tc link post-link">
		<!-- HERO LOGO -->
        <div class="hero-image-logo w-50-ns w-75 contain bg-center absolute flex center" style="<?php if( get_field('logo') ): ?>
		background-image: url(<?php the_field('logo'); ?>)
		<?php endif; ?>">
		</div>
</div>
</div>


