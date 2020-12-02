<section class="hero-gallery">
<div class="entry-content">

<?php if( have_rows('content') ): while ( have_rows('content') ) : the_row() 
;

if( get_row_layout() == 'gallery' ) : ?>
<!-- this tag wraps and contains our gallery -->
<div class="gallery flex flex-wrap center">
<?php $images = get_sub_field('gallery'); ?>

<?php foreach($images as $image) : ?>
    
    <div class="gallery-image <?php the_field('image_width' , 
    $image['id']) ?>">
<div class="image-contain">
        <?php echo wp_get_attachment_image($image['id'], 'full'); ?>
    </div>
    </div>

<?php endforeach; ?>
</div>


<?php endif;
endwhile; endif?>
</div>

</section>



