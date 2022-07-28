<?php
?>
        <footer>
            <div class="footer-form-bg" id="ft-form">
                <div class="container container-2">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <div class="footer-form">
                                <?php echo do_shortcode('[contact-form-7 id="'.get_field('footer_form','option').'"]');?>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="footer-contact-data">
                                <div class="ft-logo">
                                    <a href="<?php echo site_url();?>" title="<?php bloginfo('title');?>">
                                        <img src="<?php the_field('site_logo','option');?>" alt="<?php bloginfo('title');?>">
                                    </a>
                                </div>
                                <div class="boutique-title"><?php the_field('tag_line','option');?></div>
                                <div class="footer-address">
									
									<summary><a href="tel:<?php the_field('phone_other_no','option');?>" class="ft-pnone"><?php the_field('phone_other','option');?></a> <span> (<?php the_field('city_name3','option');?>)</span></summary>
									<br>
									
                                    <figure>800 SE 4th Ave, Suite 620 <br> Hallandale Beach, FL 33009</figure>
									 <summary><a href="tel:<?php the_field('phone333','option');?>" class="ft-pnone"><?php the_field('phone333','option');?></a></summary> <br>
									<figure>104 N Broadway Suite A, South <br>Amboy NJ 08879, United States</figure>
<!-- 									<figure><?php the_field('address','option');?></figure> -->
                                   
<!--                                     <summary><a href="tel:<?php the_field('phone787','option');?>" class="ft-pnone"><?php the_field('phone787','option');?></a></summary> -->
									<summary><a href="7325252200" class="ft-pnone">732-525-2200</a></summary>
                                    
                                    <div class="button-section"><a href="<?php echo get_field('view_map','option')['url'];?>" class="btn-design"><?php echo get_field('view_map','option')['title'];?></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-last">
                <div class="container container-2">
                    <div class="ft-menu">
                        <div class="container container-2">
                            <?php
                            wp_nav_menu( [
                                'theme_location' => 'primary',
                                'container'      => false,
                                'depth'          => 1,
                            ] );?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-xs-12">
                            <div class="copyright">
                                <figure>© 2015-<?php echo date('Y').' '.get_bloginfo('name');?></figure>
                                <?php
                                wp_nav_menu( [
                                    'theme_location' => 'bottom_menu',
                                    'container'      => false,
                                ] );?>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <?php /* ?>
                            <div class="ft-social">
                                <figure>Social Share</figure>
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_url();?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/home?status=<?php echo site_url();?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo site_url();?>&title=&summary=&source=" target="_blank" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div> <?php */ ?>
                        <div class="ft-social fts-2">
                        <figure>Social networks</figure>
                        <ul>
                          <li><a href="https://www.facebook.com/102788571541029/videos/738192633565817/" target="_blank" title="Facebook" rel="nofollow noopener"><i class="fa fa-facebook"></i></a></li>
                         
                            
                        <li><a href="https://www.facebook.com/Vladimir-Tsirkin-Associates-2321025517932075/" target="_blank" title="Facebook" rel="nofollow noopener"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/VladimirTsirki1" target="_blank" title="Twitter" rel="nofollow noopener"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/vladimir-tsirkin-associates/" target="_blank" title="LinkedIn" rel="nofollow noopener"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.google.com/maps?cid=6183184491708112248&amp;authuser=1&amp;_ga=2.97769759.1679246253.1548366198-422963798.1536959112" target="_blank" title="Google Business" rel="nofollow noopener"><i class="fa fa-google-plus"></i></a></li>
                        </ul>                            
                        </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="powered">
                                <span>POWERED BY</span>
                                <a href="https://www.webslaw.com" target="_blank" title="Webs Law">
                                    <img src="<?php bloginfo('template_url');?>/images/webslaw-logo.png" alt="Webs Law"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="mobile-contact-icon">
            <a href="tel:<?php the_field('phone333','option');?>"><i class="fa fa-phone"></i></a>
        </div>
        <div class="sidebar-btn hidden-lg hidden-md hidden-sm">
                <div class="contact_slider"><i class="fa fa-comment"></i></div>
            </div>
        <div class="contact-popup">
			<div class="sidebar-btn hidden-xs">
				<div class="contact_slider"><i class="fa fa-comment"></i></div>
			</div>
            <?php echo do_shortcode('[contact-form-7 id="'.get_field('popup_form','option').'"]');?>
        </div>
        <?php wp_footer(); ?>
        <script>
            jQuery(function(){
    "use strict";
    jQuery("input.wpcf7-email").on('keyup ', function() {   
        var eInput = this.value;
        jQuery(this).closest("form").find('input.wpcf7-spam_email').val(eInput);
                
    });
});
        </script>
    </body>
</html>