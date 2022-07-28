<?php

defined('ABSPATH') or exit('Please don&rsquo;t call the plugin directly. Thanks :)');
echo '<div class="wrap-seopress-analysis">
		<p>
			' . __('Enter a few keywords for analysis to help you write optimized content.', 'wp-seopress') . '
		</p>
		<p>
			<span class="label">' . __('Did you know?', 'wp-seopress') . '</span> ' . __('Writing content for your users is the most important thing! If it doesn‘t feel natural, your visitors will leave your site, Google will know it and your ranking will be affected.', 'wp-seopress') . '
		</p>
		<div class="col-left">
			<p>
				<label for="seopress_analysis_target_kw_meta">' . __('Target keywords', 'wp-seopress') . '
					' . seopress_tooltip(__('Target keywords', 'wp-seopress'), __('Separate target keywords with commas. Do not use spaces after the commas, unless you want to include them', 'wp-seopress'), esc_html('my super keyword,another keyword,keyword')) . '
				</label>
				<input id="seopress_analysis_target_kw_meta" type="text" name="seopress_analysis_target_kw" placeholder="' . esc_html__('Enter your target keywords', 'wp-seopress') . '" aria-label="' . __('Target keywords', 'wp-seopress') . '" value="' . esc_attr($seopress_analysis_target_kw) . '" />
			</p>';
            if (empty($seopress_analysis_data)) {
                echo '<button id="seopress_launch_analysis" type="button" class="button" data_id="' . get_the_ID() . '" data_post_type="' . get_current_screen()->post_type . '">' . __('Analyze my content', 'wp-seopress') . '</button>';
            } else {
                echo '<button id="seopress_launch_analysis" type="button" class="button" data_id="' . get_the_ID() . '" data_post_type="' . get_current_screen()->post_type . '">' . __('Refresh analysis', 'wp-seopress') . '</button>';
            }

            if (is_plugin_active('wp-seopress-insights/seopress-insights.php')) {
                echo '<button id="seopress_add_to_insights" type="button" class="button-secondary" data_id="' . get_the_ID() . '" data_post_type="' . get_current_screen()->post_type . '">' . __('Track with Insights', 'wp-seopress') . '</button>';
                echo '<div id="seopress_add_to_insights_status"></div>';
                echo '<span class="spinner"></span>';
            }

            echo '<br><p><span class="howto">' . __('To get the most accurate analysis, save your post first. We analyze all of your source code as a search engine would.', 'wp-seopress') . '</span></p>';
echo '</div>';
if (is_plugin_active('wp-seopress-pro/seopress-pro.php')) {
    echo '<div class="col-right">
			<p>
				<label for="seopress_google_suggest_kw_meta">' . __('Google suggestions', 'wp-seopress') . '
					' . seopress_tooltip(__('Google suggestions', 'wp-seopress'), __('Enter a keyword, or a phrase, to find the top 10 Google suggestions instantly. This is useful if you want to work with the long tail technique.', 'wp-seopress'), esc_html('my super keyword,another keyword,keyword')) . '
				</label>
				<input id="seopress_google_suggest_kw_meta" type="text" name="seopress_google_suggest_kw" placeholder="' . __('Get suggestions from Google', 'wp-seopress') . '" aria-label="Google suggestions" value="">
			</p>
			<button id="seopress_get_suggestions" type="button" class="button">' . __('Get suggestions!', 'wp-seopress') . '</button>';

    echo "<ul id='seopress_suggestions'></ul>";

    if ('' != get_locale()) {
        $locale       = substr(get_locale(), 0, 2);
        $country_code = substr(get_locale(), -2);
    } else {
        $locale       = 'en';
        $country_code = 'US';
    }

    echo "<script>
				jQuery('#seopress_get_suggestions').on('click', function(data) {
					data.preventDefault();

					document.getElementById('seopress_suggestions').innerHTML = '';

					var kws = jQuery('#seopress_google_suggest_kw_meta').val();

					if (kws) {
						var script = document.createElement('script');
						script.src = 'https://www.google.com/complete/search?client=firefox&format=rich&hl=" . $locale . "&q='+kws+'&gl=" . $country_code . "&callback=seopress_google_suggest';
						document.body.appendChild(script);
					}
				});
			</script>
		</div>";
}

if (function_exists('seopress_get_service')) {
    $analyzes = seopress_get_service('GetContentAnalysis')->getAnalyzes($post);
    seopress_get_service('RenderContentAnalysis')->render($analyzes, $seopress_analysis_data);
}
