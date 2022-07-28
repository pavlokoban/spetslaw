<?php echo do_shortcode('[breadcrumbs]');?>
<div class="middle-content">
    <div class="default-setion pt-img-1">
        <div class="container container-2">
            <h1 class="hd-h1"><?php the_title();?></h1>
            <div class="sitemap-wrap">
                <div class="row">

                    <!--pages-->
                    <div class="col-xs-12">
                        <h3 class="text-primary">
                            <figure>Pages</figure>
                        </h3>
                        <ul>
                            <?php wp_list_pages('title_li=&post_type=page&sort_column=menu_order&exclude=295,8,63,160,942,1307,1309'); ?>
                        </ul>
                    </div>
                    <!--pages-->

                    <!--practice-area-->
                    <div class="col-xs-12">
                        <h3 class="text-primary">
                            <figure><a href="<?php echo get_permalink(160);?>"><?php echo get_the_title(160);?></a></figure>
                        </h3>
                        <ul>
                            <?php
                            wp_list_pages([
                                'post_type' => 'practice-areas',
                                'title_li'    => '',
                                'echo'        => 1,
                                'walker' => new WPSE_130877_Custom_Walker()
                            ]);?>
                        </ul>
                    </div>
                    <!--practice-area-->

                    <!--blogs-->
                    <div class="col-xs-12">
                        <h3 class="text-primary">
                            <figure>
                                <a href="<?php echo get_permalink(get_option('page_for_posts'));?>">
                                    <?php echo get_the_title(get_option('page_for_posts'));?>
                                </a>
                            </figure>
                        </h3>
                        <?php
                        $myposts = get_posts(['post_type' => 'post','posts_per_page' => -1]);
                        if($myposts) {?>
                            <ul>
                                <?php
                                foreach($myposts as $post) { ?>
                                    <li>
                                        <a href="<?php the_permalink();?>"><?php the_title();?></a>
                                    </li>
                                    <?php
                                } ?>
                            </ul>
                            <?php
                        } ?>
                    </div>
                    <!--blogs-->

                </div>
            </div>
        </div>
    </div>
</div>