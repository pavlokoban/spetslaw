<?php
if (!defined('ABSPATH')) exit('No direct script access allowed');

class AdminSettingsPage
{
	public $countryList;
    public function __construct()
    {
		
		$this->countryList = array(
        'AF' => 'Afghanistan',
        'AX' => 'Aland Islands',
        'AL' => 'Albania',
        'DZ' => 'Algeria',
        'AS' => 'American Samoa',
        'AD' => 'Andorra',
        'AO' => 'Angola',
        'AI' => 'Anguilla',
        'AQ' => 'Antarctica',
        'AG' => 'Antigua and Barbuda',
        'AR' => 'Argentina',
        'AM' => 'Armenia',
        'AW' => 'Aruba',
        'AU' => 'Australia',
        'AT' => 'Austria',
        'AZ' => 'Azerbaijan',
        'BS' => 'Bahamas the',
        'BH' => 'Bahrain',
        'BD' => 'Bangladesh',
        'BB' => 'Barbados',
        'BY' => 'Belarus',
        'BE' => 'Belgium',
        'BZ' => 'Belize',
        'BJ' => 'Benin',
        'BM' => 'Bermuda',
        'BT' => 'Bhutan',
        'BO' => 'Bolivia',
        'BA' => 'Bosnia and Herzegovina',
        'BW' => 'Botswana',
        'BV' => 'Bouvet Island (Bouvetoya)',
        'BR' => 'Brazil',
        'IO' => 'British Indian Ocean Territory (Chagos Archipelago)',
        'VG' => 'British Virgin Islands',
        'BN' => 'Brunei Darussalam',
        'BG' => 'Bulgaria',
        'BF' => 'Burkina Faso',
        'BI' => 'Burundi',
        'KH' => 'Cambodia',
        'CM' => 'Cameroon',
        'CA' => 'Canada',
        'CV' => 'Cape Verde',
        'KY' => 'Cayman Islands',
        'CF' => 'Central African Republic',
        'TD' => 'Chad',
        'CL' => 'Chile',
        'CN' => 'China',
        'CX' => 'Christmas Island',
        'CC' => 'Cocos (Keeling) Islands',
        'CO' => 'Colombia',
        'KM' => 'Comoros the',
        'CD' => 'Congo',
        'CG' => 'Congo the',
        'CK' => 'Cook Islands',
        'CR' => 'Costa Rica',
        'CI' => 'Cote d\'Ivoire',
        'HR' => 'Croatia',
        'CU' => 'Cuba',
        'CY' => 'Cyprus',
        'CZ' => 'Czech Republic',
        'DK' => 'Denmark',
        'DJ' => 'Djibouti',
        'DM' => 'Dominica',
        'DO' => 'Dominican Republic',
        'EC' => 'Ecuador',
        'EG' => 'Egypt',
        'SV' => 'El Salvador',
        'GQ' => 'Equatorial Guinea',
        'ER' => 'Eritrea',
        'EE' => 'Estonia',
        'ET' => 'Ethiopia',
        'FO' => 'Faroe Islands',
        'FK' => 'Falkland Islands (Malvinas)',
        'FJ' => 'Fiji the Fiji Islands',
        'FI' => 'Finland',
        'FR' => 'France, French Republic',
        'GF' => 'French Guiana',
        'PF' => 'French Polynesia',
        'TF' => 'French Southern Territories',
        'GA' => 'Gabon',
        'GM' => 'Gambia the',
        'GE' => 'Georgia',
        'DE' => 'Germany',
        'GH' => 'Ghana',
        'GI' => 'Gibraltar',
        'GR' => 'Greece',
        'GL' => 'Greenland',
        'GD' => 'Grenada',
        'GP' => 'Guadeloupe',
        'GU' => 'Guam',
        'GT' => 'Guatemala',
        'GG' => 'Guernsey',
        'GN' => 'Guinea',
        'GW' => 'Guinea-Bissau',
        'GY' => 'Guyana',
        'HT' => 'Haiti',
        'HM' => 'Heard Island and McDonald Islands',
        'VA' => 'Holy See (Vatican City State)',
        'HN' => 'Honduras',
        'HK' => 'Hong Kong',
        'HU' => 'Hungary',
        'IS' => 'Iceland',
        'IN' => 'India',
        'ID' => 'Indonesia',
        'IR' => 'Iran',
        'IQ' => 'Iraq',
        'IE' => 'Ireland',
        'IM' => 'Isle of Man',
        'IL' => 'Israel',
        'IT' => 'Italy',
        'JM' => 'Jamaica',
        'JP' => 'Japan',
        'JE' => 'Jersey',
        'JO' => 'Jordan',
        'KZ' => 'Kazakhstan',
        'KE' => 'Kenya',
        'KI' => 'Kiribati',
        'KP' => 'Korea',
        'KR' => 'Korea',
        'KW' => 'Kuwait',
        'KG' => 'Kyrgyz Republic',
        'LA' => 'Lao',
        'LV' => 'Latvia',
        'LB' => 'Lebanon',
        'LS' => 'Lesotho',
        'LR' => 'Liberia',
        'LY' => 'Libyan Arab Jamahiriya',
        'LI' => 'Liechtenstein',
        'LT' => 'Lithuania',
        'LU' => 'Luxembourg',
        'MO' => 'Macao',
        'MK' => 'Macedonia',
        'MG' => 'Madagascar',
        'MW' => 'Malawi',
        'MY' => 'Malaysia',
        'MV' => 'Maldives',
        'ML' => 'Mali',
        'MT' => 'Malta',
        'MH' => 'Marshall Islands',
        'MQ' => 'Martinique',
        'MR' => 'Mauritania',
        'MU' => 'Mauritius',
        'YT' => 'Mayotte',
        'MX' => 'Mexico',
        'FM' => 'Micronesia',
        'MD' => 'Moldova',
        'MC' => 'Monaco',
        'MN' => 'Mongolia',
        'ME' => 'Montenegro',
        'MS' => 'Montserrat',
        'MA' => 'Morocco',
        'MZ' => 'Mozambique',
        'MM' => 'Myanmar',
        'NA' => 'Namibia',
        'NR' => 'Nauru',
        'NP' => 'Nepal',
        'AN' => 'Netherlands Antilles',
        'NL' => 'Netherlands the',
        'NC' => 'New Caledonia',
        'NZ' => 'New Zealand',
        'NI' => 'Nicaragua',
        'NE' => 'Niger',
        'NG' => 'Nigeria',
        'NU' => 'Niue',
        'NF' => 'Norfolk Island',
        'MP' => 'Northern Mariana Islands',
        'NO' => 'Norway',
        'OM' => 'Oman',
        'PK' => 'Pakistan',
        'PW' => 'Palau',
        'PS' => 'Palestinian Territory',
        'PA' => 'Panama',
        'PG' => 'Papua New Guinea',
        'PY' => 'Paraguay',
        'PE' => 'Peru',
        'PH' => 'Philippines',
        'PN' => 'Pitcairn Islands',
        'PL' => 'Poland',
        'PT' => 'Portugal, Portuguese Republic',
        'PR' => 'Puerto Rico',
        'QA' => 'Qatar',
        'RE' => 'Reunion',
        'RO' => 'Romania',
        'RU' => 'Russian Federation',
        'RW' => 'Rwanda',
        'BL' => 'Saint Barthelemy',
        'SH' => 'Saint Helena',
        'KN' => 'Saint Kitts and Nevis',
        'LC' => 'Saint Lucia',
        'MF' => 'Saint Martin',
        'PM' => 'Saint Pierre and Miquelon',
        'VC' => 'Saint Vincent and the Grenadines',
        'WS' => 'Samoa',
        'SM' => 'San Marino',
        'ST' => 'Sao Tome and Principe',
        'SA' => 'Saudi Arabia',
        'SN' => 'Senegal',
        'RS' => 'Serbia',
        'SC' => 'Seychelles',
        'SL' => 'Sierra Leone',
        'SG' => 'Singapore',
        'SK' => 'Slovakia (Slovak Republic)',
        'SI' => 'Slovenia',
        'SB' => 'Solomon Islands',
        'SO' => 'Somalia, Somali Republic',
        'ZA' => 'South Africa',
        'GS' => 'South Georgia and the South Sandwich Islands',
        'ES' => 'Spain',
        'LK' => 'Sri Lanka',
        'SD' => 'Sudan',
        'SR' => 'Suriname',
        'SJ' => 'Svalbard & Jan Mayen Islands',
        'SZ' => 'Swaziland',
        'SE' => 'Sweden',
        'CH' => 'Switzerland, Swiss Confederation',
        'SY' => 'Syrian Arab Republic',
        'TW' => 'Taiwan',
        'TJ' => 'Tajikistan',
        'TZ' => 'Tanzania',
        'TH' => 'Thailand',
        'TL' => 'Timor-Leste',
        'TG' => 'Togo',
        'TK' => 'Tokelau',
        'TO' => 'Tonga',
        'TT' => 'Trinidad and Tobago',
        'TN' => 'Tunisia',
        'TR' => 'Turkey',
        'TM' => 'Turkmenistan',
        'TC' => 'Turks and Caicos Islands',
        'TV' => 'Tuvalu',
        'UG' => 'Uganda',
        'UA' => 'Ukraine',
        'AE' => 'United Arab Emirates',
        'GB' => 'United Kingdom',
        'US' => 'United States of America',
        'UM' => 'United States Minor Outlying Islands',
        'VI' => 'United States Virgin Islands',
        'UY' => 'Uruguay, Eastern Republic of',
        'UZ' => 'Uzbekistan',
        'VU' => 'Vanuatu',
        'VE' => 'Venezuela',
        'VN' => 'Vietnam',
        'WF' => 'Wallis and Futuna',
        'EH' => 'Western Sahara',
        'YE' => 'Yemen',
        'ZM' => 'Zambia',
        'ZW' => 'Zimbabwe'
    );
   
        add_action( 'admin_menu', array( $this, 'add_smdb_page' ) );
        
		add_action( 'wpcf7_before_send_mail', array( $this, 'smdb_before_send_mail') );
		
		add_action( 'wp_ajax_datatables', array( $this, 'my_datatables_callback'));
		
		add_action( 'admin_init', array( $this, 'register_smdb_form_plugin_settings') );
		
    }

    public function smdb_admin_init() {
		
		wp_enqueue_style( 'smdb-bootstrap-min', SMDB_PLUGIN_URL. 'css/bootstrap.min.css');
		wp_enqueue_style( 'smdb-dataTables-bootstrap-min', SMDB_PLUGIN_URL.'css/dataTables.bootstrap.min.css');
		wp_enqueue_style( 'smdb-buttons-dataTables-min', SMDB_PLUGIN_URL.'css/buttons.dataTables.min.css');
		
		
		
		wp_enqueue_script( 'smdb-custom-js', SMDB_PLUGIN_URL. 'js/custom-admin.js' );
		
		wp_enqueue_script( 'smdb-jquery-js', SMDB_PLUGIN_URL. 'js/jquery-3.3.1.js' );
		wp_enqueue_script( 'smdb-dataTables-js', SMDB_PLUGIN_URL.'js/jquery.dataTables.min.js');
		wp_enqueue_script( 'smdb-bootstrap-min-js', SMDB_PLUGIN_URL. 'js/dataTables.bootstrap.min.js');
		
		wp_enqueue_script( 'smdb-dataTables-buttons-js', SMDB_PLUGIN_URL.'js/dataTables.buttons.min.js');
		wp_enqueue_script( 'smdb-buttons-flash-min-js', SMDB_PLUGIN_URL. 'js/buttons.flash.min.js');
		wp_enqueue_script( 'smdb-buttons-html5-min-js', SMDB_PLUGIN_URL. 'js/buttons.html5.min.js');
		wp_enqueue_script( 'smdb-buttons-print-min-js', SMDB_PLUGIN_URL. 'js/buttons.print.min.js');
		wp_enqueue_script( 'smdb-jszip-min-js', SMDB_PLUGIN_URL. 'js/jszip.min.js');
		wp_enqueue_script( 'smdb-pdfmake-min-js', SMDB_PLUGIN_URL. 'js/pdfmake.min.js');
		wp_enqueue_script( 'smdb-vfs_fonts-js', SMDB_PLUGIN_URL. 'js/vfs_fonts.js');
		
		//$wnm_custom = array( 'template_url' => SMDB_PLUGIN_URL );
    	//wp_localize_script( 'smdb-custom-js', 'wnm_custom', $wnm_custom );

	}
	
	public function load_admin_js(){

		add_action( 'admin_enqueue_scripts', array( $this, 'smdb_admin_init' ));
		
    }

    /**
     * Add options page
     */
    public function add_smdb_page()
    {
        
		$smdb_page = add_menu_page( 
			'Form Data',
			'Contact Form Data',
			'manage_options',
			'smdb_form_data',
			array( $this, 'create_smdb_page' )
        
    	); 
    	
    	
		
		add_submenu_page( 'smdb_form_data', 'Form Settings', 'Form Settings','manage_options', 'smdb_form_setting',array( $this, 'create_smdb_form_settingpage' ));
		
		add_action( 'load-' . $smdb_page, array( $this, 'load_admin_js') );
		
		
		
    }

    public function create_smdb_page() {
        
        ?>
        <div class="wrap">
            <h2>Form Data</h2>
            
            <?php 
		
		
			global $wpdb;
			$smdb       = apply_filters( 'smdb_database', $wpdb );
			$table_name = $smdb->prefix.'smdb_forms';
		
			$args = array(
				'post_type'=> 'wpcf7_contact_form',
				'order'    => 'ASC',
				'posts_per_page' => -1,
				'offset' => $start
			);

			$the_query = new WP_Query( $args );
			$form_id = isset($_GET['default_contact_form']) ? $_GET['default_contact_form'] : 0 ;
		    $block_ip = $_GET['block_ip'] ;
		
		
			?>
            
            
			<form action="/wp-admin/admin.php?page=smdb_form_data" method="get">
				<table class="form-table" width="350">
					<tbody>
						<tr>
							<th scope="row">Select Form</th>
							<td>
								<input type="hidden" name="page" value="smdb_form_data" />
								<select name="default_contact_form" id="default_contact_form" class="postform" onchange="this.form.submit()">
									<option  value="0" <?php echo $form_post_id == $form_id ? 'selected="selected"' : '';  ?> >Select Form</option>
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
									$title = get_the_title();
									$form_post_id = get_the_id();
									$totalItems   = $smdb->get_var("SELECT COUNT(*) FROM $table_name WHERE smdb_post_id = $form_post_id"); 
									if($totalItems) { ?>
									<option value="<?php echo $form_post_id; ?>" <?php echo $form_post_id == $form_id ? 'selected="selected"' : '';  ?> ><?php echo $title .' ( '.$totalItems.' )'; ?></option>
									<?php } endwhile; ?>
								</select>
							</td>
							
						</tr>
						<tr>
							<th scope="row">Select User</th>
							<td >
								<select name="block_ip" id="block_ip" onchange="this.form.submit()" />
									<option  value="all" <?php echo $block_ip == 'all' ? 'selected="selected"' : '';  ?> >All Data</option>
									<option  value="0" <?php echo $block_ip == '0' ? 'selected="selected"' : '';  ?> >Not Block IP</option>
									<option  value="1" <?php echo $block_ip == '1' ? 'selected="selected"' : '';  ?> >Block IP</option>
								</select>
							</td>
						</tr>
					</tbody>
				</table>
				
			</form>
           				
            <h3 class="title">&nbsp;</h3>	
                        
            <?php 
		 
		   if($form_id){
			   $query_srting = "";
		   	   if($block_ip != 'all' ){
				   $query_srting = " AND smdb_black_ip = $block_ip";			  
			   }
			   
			   $results    = $smdb->get_results( "SELECT * FROM $table_name WHERE smdb_post_id = $form_id $query_srting ORDER BY smdb_date DESC", OBJECT );

			   $first_row  = isset($results[0]) ? unserialize( $results[0]->smdb_value ): 0 ;	

				?>

				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">

					<thead>
						<tr>
							<th>No.</th>
							<th>Form Name</th>							
							<?php 
							if( !empty($first_row) ){

								foreach ($first_row as $key => $value) {

									if ( $key == 'smdb_status' ) continue;

									$key_val  = str_replace( array('your-', 'cfdb7_file'), '', $key);
									echo '<th>'.ucfirst( $key_val ).'</th>';

								}
							}
							?>
							<th>IP Address</th>
							<th>From</th>
							<th>Date</th>
						</tr>

					</thead>			



					<tbody>
						<?php 
						foreach($results as $key => $value) {?>
						<tr>	
							<td></td>
							<td><?php echo $value->smdb_black_ip ;?></td>
							<?php 
							$data = unserialize($value->smdb_value);

							//foreach ($data as $row_key => $row_value) {
							foreach ($first_row as $key => $datavalue) {

								if ( $key == 'smdb_status' ) continue;

								$data_value = $data[$key];
								echo '<td>'. $data_value .'</td>';


							} ?>
							<td><?php echo $value->smdb_ip ;?></td>
							<td><?php 
								//$fron_city = $this->ip_details($value->smdb_ip);							 
								//							 echo $fron_city->city .' / ' .$fron_city->country ;?></td>
							<td><?php echo $value->smdb_date ;?></td>
						</tr>	
						<?php }?>
					</tbody>
					<tfoot>
						<tr>
							<th>No.</th>
							<th>Form Name</th>
							<?php 
							if( !empty($first_row) ){
								foreach ($first_row as $key => $value) {

									if ( $key == 'smdb_status' ) continue;

									$key_val       = str_replace( array('your-', 'cfdb7_file'), '', $key);
									echo '<th>'.ucfirst( $key_val ).'</th>';

								}
							}
							?>

							<th>IP Address</th>
							<th>From</th>
							<th>Date</th>
						</tr>
					</tfoot>
			  </table>
           
            <?php } ?>
            
            <div class="modal fade" id="DescModal" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
							 <h3 class="modal-title">Job Requirements & Description</h3>

						</div>
						<div class="modal-body">
							 <h5 class="text-center">Hello. Below is the descripton and/or requirements for hiring consideration.</h5>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default " data-dismiss="modal">Apply!</button>
							<button type="button" class="btn btn-primary">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
        </div>
        <?php
    }
    
	public function register_smdb_form_plugin_settings() {
	//register our settings
		register_setting( 'smdb-form-settings-group', 'smdb_country_list' );
		register_setting( 'smdb-form-settings-group', 'smdb_bad_words' );
	}
    public function create_smdb_form_settingpage() { 
	
	//$o = self::instance();	
	?>
        
        <div class="wrap">
        <h1>Form Settings</h1>
        
            <form method="post" action="options.php">
                <?php settings_fields( 'smdb-form-settings-group' ); ?>
                <?php do_settings_sections( 'smdb-form-settings-group' ); ?>
                <table class="form-table">
                    <tr valign="top">
						<th scope="row">Some Other Option</th>
						<td><textarea class="large-text code" name="smdb_bad_words" ><?php echo esc_attr( get_option('smdb_bad_words') ); ?></textarea>
                   		<p class="description" id="tagline-description">Use a comma to separate the words.</p></td>
                    </tr>
                    <tr valign="top">
                    <th scope="row">Select Country</th>
                    	<td><?php $country_list = get_option('smdb_country_list'); ?>
                    	<?php /*
							<select name="smdb_country_list" multiple data-live-search="true" >
								<option value="" disabled selected>Select Country</option>
								<?php foreach($this->countryList as $key => $value){ ?>
								<option value="<?php echo $key;?>"><?php echo $value;?></option>
								<?php } ?>
							</select> */?>
                       		<ul class="country-list">
                       		<?php foreach($this->countryList as $key => $value){ ?>
								<li><input type="checkbox" name="smdb_country_list[]" <?php echo $country_list && in_array($key, $country_list) ? 'checked' : '' ; ?> value="<?php echo $key;?>" ><?php echo $value;?></li>
							<?php } ?>	
							</ul>
                        </td>
                    </tr>
                     
                    
                    
                    
                </table>
                
                <?php submit_button(); ?>
            
            </form>
        </div>
        <style>
			.country-list li{width:33%;float: left;}
			@media screen and (max-width: 767px) {
				.country-list li{width:100%;}
			}
		</style>
        
   <?php  }
	
	public function smdb_before_send_mail( $smdb_tag ) {

		global $wpdb;
		$smdb          = apply_filters( 'smdb_database', $wpdb );
		$table_name    = $smdb->prefix.'smdb_forms';
		$upload_dir    = wp_upload_dir();
		$smdb_dirname = $upload_dir['basedir'].'/smdb_uploads';
		$time_now      = time();

		$form = WPCF7_Submission::get_instance();

		if ( $form ) {

			$black_list   = array('_wpcf7', '_wpcf7_version', '_wpcf7_locale', '_wpcf7_unit_tag',
			'_wpcf7_is_ajax_call','smdb_name', '_wpcf7_container_post','_wpcf7cf_hidden_group_fields',
			'_wpcf7cf_hidden_groups', '_wpcf7cf_visible_groups', '_wpcf7cf_options','smdb_email','smdb_message');

			$data           = $form->get_posted_data();
			$files          = $form->uploaded_files();
			$uploaded_files = array();

			foreach ($files as $file_key => $file) {
				array_push($uploaded_files, $file_key);
				copy($file, $smdb_dirname.'/'.$time_now.'-'.basename($file));
			}

			$smdb_data   = array();

			//$smdb_data['smdb_status'] = 'unread';
			foreach ($data as $key => $d) {
				if ( !in_array($key, $black_list ) && !in_array($key, $uploaded_files )  ) {
					
					

					$tmpD = $d;

					if ( ! is_array($d) ){

						$bl   = array('\"',"\'",'/','\\');
						$wl   = array('&quot;','&#039;','&#047;', '&#092;');

						$tmpD = str_replace($bl, $wl, $tmpD );
					}
					if(is_array($tmpD)){
						foreach($tmpD as $dval){
							$smdb_data[$key] = trim($dval).'</br>';
						}
					}else{
						$smdb_data[$key] = trim($tmpD);
					}	
				}
				if ( in_array($key, $uploaded_files ) ) {
					$smdb_data[$key.'smdb_file'] = $time_now.'-'.$d;
				}
			}
				
			/* cfdb7 before save data. */
			$smdb_data = apply_filters('smdb_before_save_data', $smdb_data);

			do_action( 'smdb_before_save_data', $smdb_data );

			$smdb_post_id = $smdb_tag->id();
			$smdb_value   = serialize( $smdb_data );
			$smdb_date    = current_time('Y-m-d H:i:s');			
			$smdb_ip = $this->beliefmedia_ip();
			
		    //$smdb_ip_details = $this->ip_details($smdb_ip); 
			$dvl = trim($data[$data['smdb_message']]);
			
			if($dvl){
				$smdb_black_ip = $this->check_value_in_db($smdb_post_id,trim($data[$data['smdb_message']]));
			} else{
				$smdb_black_ip = 0;
			}
			if(trim(get_option('smdb_bad_words'))){
				$bad_words = explode(",",get_option('smdb_bad_words'));
				if($bad_words){
					foreach($bad_words as $value ){
						if (strpos(trim($data[$data['smdb_message']]), $value) !== false || strpos(trim($data[$data['smdb_email']]), $value) !== false) {
							$smdb_black_ip = 1;
							break;
						}
					}
				}
			}
			/*
			$country_list = get_option('smdb_country_list'); 
			if($country_list && !in_array($smdb_ip_details->country,$country_list )){
				$smdb_black_ip = 1;
			} */
			//$smdb_black_ip = 0;
			$smdb->insert( $table_name, array(
				'smdb_post_id' => $smdb_post_id,
				'smdb_value'   => $smdb_value,
				'smdb_ip'	   => $smdb_ip,		
				'smdb_date'    => $smdb_date,
				'smdb_black_ip'=> $smdb_black_ip
			) );

			/* cfdb7 after save data */
			$insert_id = $smdb->insert_id;
			do_action( 'smdb_after_save_data', $insert_id );			
			if($smdb_black_ip){
				add_filter('wpcf7_skip_mail', array( $this, 'my_skip_mail'));
				
    		    //$form->skip_mail = true;
			}
		}

	}
	public function my_skip_mail($f){		
		return true; // DO NOT SEND E-MAIL
   
	}
	public function beliefmedia_ip() {
		foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
			if (array_key_exists($key, $_SERVER) === true) {
				foreach (explode(',', $_SERVER[$key]) as $ip) {
					if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
						return $ip;
					}
				}
			}
		}
	}
	public function ip_details($IPaddress) 
    {
        $json       = file_get_contents("http://ipinfo.io/{$IPaddress}");
        $details    = json_decode($json);
        return $details;
    }
	
	public function check_value_in_db($smdb_ip,$message){
		
		global $wpdb;
		$smdb          = apply_filters( 'smdb_database', $wpdb );
		$table_name    = $smdb->prefix.'smdb_forms';
		$results  = $smdb->get_results( "SELECT * FROM $table_name WHERE smdb_ip like '$smdb_ip'" );
		
		$fl = 0;
		foreach($results as $key => $value) {
			$data = unserialize($value->smdb_value);
			
				if(in_array($message,$data)){
					$fl = 1;
					break;	
				}
			
		}
		return $fl;		
	}
	
    
}

$admin_settings_page = new AdminSettingsPage();