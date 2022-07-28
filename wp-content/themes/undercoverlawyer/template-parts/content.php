<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercoverlawyer
 */

?>
<?php /*?>$fe_img = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/750x500?text=No%20Image';<?php */?>

<div id="post-<?php the_ID(); ?>" <?php post_class(['col-sm-6','col-xs-12']); ?>>
    <div class="blog-box">
        <div class="blog-box-content">
            <div class="bb-name"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
            
            <div class="bb-post-by">
                <?php
                post_author();
                post_categories();
                post_date();?>
            </div>
            <div class="bb-short-content"><?php the_excerpt(); ?></div>
        </div>
    </div>
</div>