<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercoverlawyer
 */
$fe_img = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://via.placeholder.com/750x500?text=No%20Image';
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(['col-sm-6','col-xs-12']); ?>>
    <div class="blog-box">
        <?php /*?><?php
        if( 'post' == get_post_type() ) { ?>
            <a href="<?php the_permalink();?>">
                <img src="<?php echo $fe_img;?>" alt="<?php the_title();?>">
            </a>
        <?php
        } ?><?php */?>
        <div class="blog-box-content">
            <div class="bb-name"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
            <?php
            if( get_the_excerpt() || 'post' == get_post_type() ) { ?>
                <div class="bb-post-by">
                    <?php
                    if( get_the_excerpt() ) { ?>
                        <div class="excerpt-info">
                            <?php the_excerpt();?>
                        </div>
                    <?php
                    }
                    if( 'post' == get_post_type() ) {
                        post_author();
                        post_categories();
                        post_date();
                    } ?>
                </div>
            <?php
            } ?>
        </div>
    </div>
</div>
