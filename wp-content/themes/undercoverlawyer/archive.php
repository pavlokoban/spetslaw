<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercoverlawyer
 */
get_header(); echo do_shortcode('[breadcrumbs]');
    if ( have_posts() ) { ?>
    
        <div <?php post_class(['middle-content']);?>>
            
            <div class="default-setion pt-img-1">
                <div class="container container-2">
                    <?php the_archive_title( '<h1 class="hd-h1">', '</h1>' ); ?>
                    <div class="blog-box-main">
                        <div class="row">
                            <?php
                            while ( have_posts() ) { the_post();
                                get_template_part('template-parts/content', get_post_type());
                            }
                            if ( $wp_query->max_num_pages > 1 ) { ?>
                                <div class="paginCover">
                                    <?php
                                    the_posts_pagination(array(
                                        'screen_reader_text' => '',
                                        'prev_text' => __('<', 'undercoverlawyer'),
                                        'next_text' => __('>', 'undercoverlawyer'),
                                    )); ?>
                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
}
else{
    get_template_part( 'template-parts/content', 'none' );
}
get_footer();