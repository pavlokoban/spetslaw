<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package undercoverlawyer
 */
?>
<div class="middle-content">
    <div class="default-setion pt-img-1">
        <div class="container container-2">
            <section class="no-results not-found">
                <div class="page-header">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'undercoverlawyer' ); ?></h1>
                </div>
                <div class="page-content">
                    <?php
                    if ( is_home() && current_user_can( 'publish_posts' ) ) :

                        printf(
                            '<p>' . wp_kses(
                            /* translators: 1: link to WP admin new post page. */
                                __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'undercoverlawyer' ),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ) . '</p>',
                            esc_url( admin_url( 'post-new.php' ) )
                        );

                    elseif ( is_search() ) :
                        ?>

                        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'undercoverlawyer' ); ?></p>
                        <?php
                        get_search_form();

                    else :
                        ?>

                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'undercoverlawyer' ); ?></p>
                        <?php
                        get_search_form();

                    endif;
                    ?>
                </div>
            </section>
        </div>
    </div>
</div>
