<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercoverlawyer
 */
get_header();

    if ( have_posts() ) { ?>
        <?php echo do_shortcode('[breadcrumbs]');?>
        <div class="middle-content">
            <div class="default-setion pt-img-1">
                <div class="container container-2">
                    <?php
                    if (is_home() && !is_front_page()) { ?>
                        <h1 class="hd-h1"><?php the_field('h1',get_option('page_for_posts'));?></h1>
                        <?php
                    } ?>
                    <div class="blog-box-main">
                        <div class="row">
                            <?php
                            while (have_posts()) { the_post();
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