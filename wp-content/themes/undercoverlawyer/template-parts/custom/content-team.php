<?php $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>

<?php echo do_shortcode('[breadcrumbs]');?>

<div class="middle-content">
    <?php get_template_part( 'template-parts/custom/partners', '4' );?>
</div>