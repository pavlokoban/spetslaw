<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package undercoverlawyer
 */

get_header();

    while ( have_posts() ) { the_post();
     ?>
<?php /*?>$fe_img = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/750x500?text=No%20Image';<?php */?>
    <?php echo do_shortcode('[breadcrumbs]');?>

    <?php $h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>

    <div <?php post_class(['middle-content']);?>>
        <div class="default-setion pt-img-1 pa-details">
            <div class="container container-2">
                <h1 class="hd-h1"><?php echo $h1;?></h1>
                <?php the_content();?>
            </div>
        </div>
        <?php get_template_part( 'template-parts/custom/deposit', 'required' );?>
    </div>
<?php
}

get_footer();