<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php echo do_shortcode('[breadcrumbs]');?>
    <div <?php post_class(['middle-content']);?>>
        <div class="default-setion pt-img-1">
            <div class="container container-2">
                 <h1 class="hd-h1"><?php the_field('h1'); ?></h1>
                <div class="blog-details-main">
                    <div class="row">
                        <div class="col-sm-8 col-xs-12">
                           
                           
                            <div class="blog-details-content">
                                <?php the_content();?>
                            </div>
                           
                           
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="sidebar-main">
                               <div class="widget">
                                    <?php
                                    $cur_id = get_the_ID();
                                    $t_id = get_the_terms($post->ID,'cities')[0]->term_id;
                                    $parent_args = get_posts([
                                        'post_type'      => get_post_type(),
                                        'posts_per_page' => -1,
                                        'post_status'    => 'publish',
                                        'order'          => 'ASC',
                                        'orderby'       => 'menu_order',
                                        'post_parent'       => 0,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'cities',
                                                'field' => 'term_id',
                                                'terms' => $t_id,
                                            )
                                        )
                                    ]); ?>
                                    <div class="widget-title"><?php echo get_the_terms($post->ID,'cities')[0]->name;?></div>
                                    <ul>
                                        <?php
                                        foreach ( $parent_args as $post ) { setup_postdata($post);
                                            $active = ($cur_id == $post->ID) ? 'activemain' : '';?>
                                            <li <?php post_class([$active]);?> data-menu_order="<?php echo $post->menu_order;?>"><a href="<?php the_permalink(); ?>" title="<?php the_field('sidebar_title'); ?>"><?php the_field('sidebar_title'); ?></a>
                                                <?php
                                                $childs1 = get_posts([
                                                    'post_type'      => get_post_type(),
                                                    'posts_per_page' => -1,
                                                    'post_status'    => 'publish',
                                                    'order'          => 'ASC',
                                                    'orderby'       => 'title',
                                                    'post_parent'    => $post->ID,
                                                    'tax_query' => array(
                                                        array(
                                                            'taxonomy' => 'cities',
                                                            'field' => 'term_id',
                                                            'terms' => $t_id,
                                                        )
                                                    )
                                                ]);
                                                if($childs1) { ?>
                                                    <ul class="sub-posts">
                                                        <?php
                                                        foreach ( $childs1 as $post ) { setup_postdata($post);
                                                            $active2 = ($cur_id == $post->ID) ? 'active' : '';?>
                                                            <li <?php post_class([$active2]);?>><a href="<?php the_permalink(); ?>" title="<?php the_field('sidebar_title'); ?>"><?php the_field('sidebar_title'); ?></a></li>
                                                            <?php
                                                        } ?>
                                                    </ul>
                                                <?php
                                                } ?>
                                            </li>
                                        <?php
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part( 'template-parts/custom/deposit', 'required' );?>
    </div>

<?php get_footer();?>