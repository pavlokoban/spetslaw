<?php $fe_img = ( get_the_post_thumbnail_url() ) ? get_the_post_thumbnail_url() : get_field('default_banner');?>

<?php echo do_shortcode('[breadcrumbs]');?>

<?php $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>

<?php $h2 = ( get_field('h2') ) ? get_field('h2') : '';?>

<?php get_template_part( 'template-parts/custom/deposit', 'required' );?>

<?php
if(get_field('h2')) { ?>
    <h2><?php the_field('h2');?></h2>
    <?php
}?>

Blog
<?php undercoverlawyer_posted_by();?>
    <figure><i class="fa fa-folder-open"></i><?php echo get_the_category_list( __( ', ', 'gproslaw' ) );?></figure>
<?php undercoverlawyer_posted_on();?>

checklist
https://docs.google.com/spreadsheets/d/1VzhgoLTt4RtZyz2XeHVI-VjJOzm6BbeNLQfH6glX0FQ/edit#gid=0

<?php post_class(['hp']);?>

<?php get_template_part( 'template-parts/custom/partners', '4' ); ?>
<?php get_template_part( 'template-parts/custom/social', 'icons' ); ?>

<!--Location Start: <?php echo __DIR__.'/'. basename(__FILE__); ?>-->

<!--Location End: <?php echo __DIR__.'/'. basename(__FILE__); ?>-->
