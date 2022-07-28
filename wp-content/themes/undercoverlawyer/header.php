<?php

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php the_field('favicon','option');?>">
<?php wp_head(); ?>
<meta name="google-site-verification" content="w7FnIzvpcIentEDNnvnNFMns4bnA9eB80YQX0ljN57c" />
<meta name="author" content="Spets Law"> 
<meta name="Language" content="English"/>
<meta name="Publisher" content="Spets Law"/> 
<meta name="distribution" content="Local">
<meta name="revisit-after" content="2 days">
<meta name="ROBOTS" content="INDEX, FOLLOW">
<meta name="YahooSeeker" content="INDEX, FOLLOW">
<meta name="msnbot" content="INDEX, FOLLOW">
<meta name="googlebot" content="index,follow">
<meta name="Rating" content="General">
<meta name="allow-search" content="yes">
<meta name="expires" content="never">
<meta name="robots" content="NOODP,NOYDIR" />
<meta name="google-site-verification" content="XeONqtzoTlg17JU4TE09o_FXNYCC7yYE8KPn08xs1X8" />
    
 <!------------------ Google Analytics ---------------->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-63ELF5ZZ1M"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-63ELF5ZZ1M');
</script>
<!----------------- Google Webmaster -------------------->
 <meta name="google-site-verification" content="w7FnIzvpcIentEDNnvnNFMns4bnA9eB80YQX0ljN57c" />
 
 
 
    
</head>

<body <?php body_class(); ?>>
    <script src="https://www.apex.live/scripts/invitation.ashx?company=VladimirTsirkin" async></script>
     <?php /**************this section for seo code **************** */ ?>
 <?php if (!is_404() || !is_search()) : ?>
<div style="display:none;">

	<div itemscope itemtype="http://schema.org/LocalBusiness">
		<img itemprop="image" src="https://www.undercoverlawyer.com/wp-content/uploads/2019/01/mail-logo.jpg" alt="Logo"/>
		<div itemprop="name">
			<strong>
				<?php
				$yoast_wpseo_title = get_post_meta( $post->ID, '_yoast_wpseo_title', true );
				$yoast_wpseo_metadesc = get_post_meta( $post->ID, '_yoast_wpseo_metadesc', true );

				if ( !empty( $yoast_wpseo_title ) ):
					echo get_post_meta( $post->ID, '_yoast_wpseo_title', true );
				else :
					wp_title( '|', true, 'right' );
				endif;
				?>
			</strong>
		</div>
		<?php if (!empty($yoast_wpseo_metadesc)): ?>
		<div itemprop="description">
			<?php echo get_post_meta($post->ID, '_yoast_wpseo_metadesc', true); ?>
		</div>
		<?php else: ?>
		<?php endif; ?>
		<img itemprop="image" src="https://www.undercoverlawyer.com/wp-content/uploads/2019/01/mail-logo.jpg" alt="Logo"/>
 
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
			<span itemprop="telephone">305-831-4333</span>
			<span itemprop="streetAddress">1001 N Federal Hwy, Suite 244,</span>
			<span itemprop="addressLocality">Hallandale</span>,
			<span itemprop="addressRegion">FL</span> <span itemprop="postalCode">33009</span>
		</div>	

	</div>
</div>
 <?php endif; ?>
 <?php /**************************************/ ?>

<header>
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span
                class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
    <div class="container container-2">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="h-logo">
                    <a href="<?php echo site_url();?>" title="<?php bloginfo('title');?>">
                        <img src="<?php the_field('site_logo','option');?>" alt="<?php bloginfo('title');?>">
                    </a>
                </div>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="h-right">
                    <?php if(get_field('languages_list','option')) { ?>
                    <div class="we-speak"> 
                        <span><?php the_field('languages_we_speak','option');?></span> 
                        <figure><?php the_field('languages_list','option');?></figure>
                    </div>
                    <?php } ?>
                    <!--<div class="h-social">
                        <?php /*get_template_part( 'template-parts/custom/social', 'icons' ); */?>
                        <div class="searchsection">
                            <div class="searchbarform">
                                <form role="search" method="get" action="<?php /*echo home_url( '/' ); */?>">
                                    <input class="form-control" placeholder="<?php /*echo esc_attr_x( 'Search', 'placeholder' ) */?>" value="<?php /*echo get_search_query() */?>" name="s">
                                </form>
                                <button title="Search Here" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>-->
                    <div class="h-contact">
                        <div class="h-contact-inner">
                            <figure><?php the_field('city_name3','option');?></figure>
                            <summary><a href="tel:<?php the_field('phone_other_no','option');?>"><?php the_field('phone_other','option');?></a></summary>
                        </div>
                        <div class="h-contact-inner">
<!--                             <figure><?php the_field('city_name','option');?></figure> -->
							<figure>Florida</figure>
                            <summary><a href="tel:<?php the_field('phone333','option');?>"><?php the_field('phone333','option');?></a></summary>
                        </div>
                        <div class="h-contact-inner">
							
							<figure>New Jersey</figure>
							<summary><a href="tel:7325252200">732-525-2200</a></summary>
<!--                             <figure><?php the_field('city_name2','option');?></figure> -->
<!--                             <summary><a href="tel:<?php the_field('phone787','option');?>"><?php the_field('phone787','option');?></a></summary> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hr-bottom">
        <div class="container container-2">
            <nav class="navbar navbar-default">
                <div class="collapse navbar-collapse" id="myNavbar">
                    <button class="close-btn">Back <i class="fa fa-angle-right"></i></button>
                    <?php
                    wp_nav_menu( [
                        'theme_location' => 'primary',
                        'container'      => false,
                        'menu_class'     => 'nav navbar-nav',
                    ] );?>
                    <div class="mobile-menu-contact">
                        <div class="h-contact-inner-m">
                            <figure><?php the_field('city_name3','option');?></figure>
                            <summary><a href="tel:<?php the_field('phone_other_no','option');?>"><?php the_field('phone_other','option');?></a></a></summary>
                        </div>
                        <div class="h-contact-inner-m">
                            <figure><?php the_field('city_name','option');?></figure>
                            <summary><a href="tel:<?php the_field('phone333','option');?>"><?php the_field('phone333','option');?></a></summary>
                        </div>
                        <div class="h-contact-inner-m">
                            <figure><?php the_field('city_name2','option');?></figure>
                            <summary><a href="tel:<?php the_field('phone787','option');?>"><?php the_field('phone787','option');?></a></summary>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>