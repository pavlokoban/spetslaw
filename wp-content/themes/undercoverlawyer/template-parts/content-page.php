<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercoverlawyer
 */
$h1 = ( get_field('h1') ) ? get_field('h1') : get_the_title();?>
<?php echo do_shortcode('[breadcrumbs]');?>

<div id="post-<?php the_ID(); ?>" <?php post_class(['middle-content']); ?>>
    <div class="default-setion pt-img-1 pa-details">
        <div class="container container-2">
            <h1 class="hd-h1"><?php echo $h1;?></h1>
            <?php
            if(get_field('h2')) { ?>
                <h2><?php the_field('h2');?></h2>
            <?php
            }
            the_content();?>
        </div>
    </div>
    <?php get_template_part( 'template-parts/custom/deposit', 'required' );?>
</div>