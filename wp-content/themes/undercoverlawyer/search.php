<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package undercoverlawyer
 */

get_header();

if ( have_posts() ) { ?>

    <div class="middle-content">
        <div class="default-setion pt-img-1">
            <div class="container container-2">
                <h1 class="hd-h1"><?php printf( esc_html__( 'Search Results for: %s', 'undercoverlawyer' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                <div class="blog-box-main">
                    <div class="row">
                        <?php
                        while (have_posts()) { the_post();
                            get_template_part( 'template-parts/content', 'search' );
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