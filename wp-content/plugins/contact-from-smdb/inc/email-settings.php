<?php
if (!defined('ABSPATH')) exit('No direct script access allowed');

class EmailSettingsPage {
	
	public function __construct()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'smdb_init' ));
		
		wpcf7_add_shortcode( array( 'spam_email', 'spam_email*' ), array( $this, 'wpcf7_spam_email_shortcode_handler'), true );

		add_filter( 'wpcf7_validate_spam_email', array( $this, 'wpcf7_spam_email_validation_filter'), 10, 2 );

        add_filter( 'wpcf7_validate_spam_email*', array( $this, 'wpcf7_spam_email_validation_filter'), 10, 2 );

		add_action( 'admin_init', array( $this, 'wpcf7_add_tag_generator_spam_email'), 30 );
    }

    public function smdb_init() {
				
		wp_enqueue_script( 'smdb-custom-js', SMDB_PLUGIN_URL. 'js/custom.js' );

	}


	public function wpcf7_spam_email_shortcode_handler( $tag ) {

		$tag = new WPCF7_Shortcode( $tag );

		if ( empty( $tag->name ) )

			return '';

		$validation_error = wpcf7_get_validation_error( $tag->name );

		$class = wpcf7_form_controls_class( $tag->type, 'wpcf7-spam_email' );

		if ( in_array( $tag->basetype, array( 'email', 'url', 'tel','spam_email' ) ) )

			$class .= ' wpcf7-validates-as-' . $tag->basetype;

		if ( $validation_error )

			$class .= ' wpcf7-not-valid';

		$atts = array();   

		$atts['class'] = $tag->get_class_option( $class );

		$atts['id'] = $tag->get_id_option();       

		$atts['aria-invalid'] = $validation_error ? 'true' : 'false';       

		$atts['type'] = 'hidden';   

		$atts['name'] = $tag->name;

		$atts = wpcf7_format_atts( $atts );


		$option_values = $tag->options;
		
		$option_value = explode(":",$option_values[0]);
			
		$atts2['type'] = 'hidden';   

		$atts2['name'] = 'smdb_email';

		$atts2['value'] = $option_value[1] ? $option_value[1] : 'your-email';

		$atts2 = wpcf7_format_atts( $atts2 );
		
		
		$option_value = explode(":",$option_values[1]);
		
		$atts3['type'] = 'hidden';   

		$atts3['name'] = 'smdb_message';

		$atts3['value'] = $option_value[1] ? $option_value[1] : 'your-message';

		$atts3 = wpcf7_format_atts( $atts3 );
		
		$html = sprintf(
			'<span class="wpcf7-form-control-wrap %1$s"><input %2$s />%3$s</span><input %4$s /><input %5$s />',
			sanitize_html_class( $tag->name ), $atts, $validation_error,$atts2 ,$atts3);
		
		

		return $html;

	}

	public function wpcf7_spam_email_validation_filter( $result, $tag ) {
	 //print_r($tag);

		$tag = new WPCF7_Shortcode( $tag );

		$type = $tag->basetype;

		$name = $tag->name;

		$values = $tag->values;

		$value = isset( $_POST[$name] ) ? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) ) : '';



		if ( 'spam_email' == $tag->basetype ) {
			$smdb_email = $_POST['smdb_email'];
			if ( '' == $value ) {

				$result->invalidate( $smdb_email, 'Please re-enter email address'  );
				//add_filter("wpcf7_ajax_json_echo", "change_responce",10,2);

			} elseif ( '' != $value && ! wpcf7_is_email( $value ) ) {

				$result->invalidate( $smdb_email ,  'Please re-enter email address'  );
				//add_filter("wpcf7_ajax_json_echo", "change_responce",10,2);

			}elseif (  $value != $_POST[$smdb_email] ) {

				$result->invalidate( $smdb_email,  'Please re-enter email address' );
				//add_filter("wpcf7_ajax_json_echo", "change_responce",10,2);

			}

		}

		$result['reason'] = 'test';

		return $result;

	}


	public function change_responce ($response, $result) {


		$response["message"] = "Plaese re-enter e-mail address manually";


		return $response;

	}

	//this is fixed

	public function wpcf7_add_tag_generator_spam_email() {

		$tag_generator = WPCF7_TagGenerator::get_instance();

		$tag_generator->add( 'spam_email', __( 'spam email', 'sse' ), array( $this, 'wpcf7_tag_generator_spam_email') );

	}

	public function wpcf7_tag_generator_spam_email( $contact_form , $args = '' ) {

		$args = wp_parse_args( $args, array() );

		$type = $args['id'];

		if ( ! in_array( $type, array( 'email', 'url', 'tel','spam_email' ) ) ) {

			$type = 'text';

		}

		if ( 'text' == $type ) {

			$description = __( "Generate a form-tag for a single-line plain text input field. For more details, see %s.", 'sse' );

		} elseif ( 'email' == $type ) {

			$description = __( "Generate a form-tag for a single-line email address input field. For more details, see %s.", 'sse' );

		} elseif ( 'url' == $type ) {

			$description = __( "Generate a form-tag for a single-line URL input field. For more details, see %s.", 'sse' );

		} elseif ( 'tel' == $type ) {

			$description = __( "Generate a form-tag for a single-line telephone number input field. For more details, see %s.", 'sse' );

		} elseif ( 'spam_email' == $type ) {

			$description = __( "Generate a form-tag for a single-line confirm email input field.");

		}

		$desc_link = wpcf7_link( __( 'http://contactform7.com/text-fields/', 'sse' ), __( 'Text Fields', 'sse' ) );

		?>

		<div class="control-box">
			<fieldset>
				<legend><?php echo sprintf( esc_html( $description ), $desc_link ); ?></legend>
				<table class="form-table">
					<tbody>
						<tr>
							<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-name' ); ?>"><?php echo esc_html( __( 'Name', 'sse' ) ); ?></label></th>
							<td><input type="text" name="name" class="tg-name oneline" id="<?php echo esc_attr( $args['content'] . '-name' ); ?>" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-id' ); ?>"><?php echo esc_html( __( 'Id attribute', 'sse' ) ); ?></label></th>
							<td><input type="text" name="id" class="idvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-id' ); ?>" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-class' ); ?>"><?php echo esc_html( __( 'Class attribute', 'sse' ) ); ?></label></th>
							<td><input type="text" name="class" class="classvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-class' ); ?>" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-email' ); ?>"><?php echo esc_html( __( 'E-mail field', 'sse' ) ); ?></label></th>
							<td><input type="text" name="email_field" class="classvalue oneline option" value="your-email" id="<?php echo esc_attr( $args['content'] . '-email' ); ?>" /></td>
						</tr>
						<tr>
							<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-message' ); ?>"><?php echo esc_html( __( 'Message field', 'sse' ) ); ?></label></th>
							<td><input type="text" name="message_field" class="classvalue oneline option" value="your-message" id="<?php echo esc_attr( $args['content'] . '-message' ); ?>" /></td>
						</tr>
					</tbody>
				</table>
			</fieldset>
		</div>
		<div class="insert-box">
			<input type="text" name="<?php echo $type; ?>" class="tag code" readonly onfocus="this.select()" />
			<div class="submitbox">
				<input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr( __( 'Insert Tag', 'sse' ) ); ?>" />
			</div>
		</div>
	<?php

	}
}
$email_settings_page = new EmailSettingsPage();