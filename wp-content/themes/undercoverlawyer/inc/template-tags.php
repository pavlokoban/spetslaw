<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package undercoverlawyer
 */

if ( ! function_exists( 'post_date' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time.
	 */
	function post_date() {
		$time_string = '%2$s';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '%2$s';
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( DATE_W3C ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( DATE_W3C ) ),
			esc_html( get_the_modified_date() )
		);

		$posted_on = sprintf(
			/* translators: %s: post date. */
			esc_html_x( '%s', 'post date', 'undercoverlawyer' ),
			'' . $time_string . ''
		);

		echo '<figure><i class="fa fa-calendar"></i>' . $posted_on . '</figure>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'post_author' ) ) :
	/**
	 * Prints HTML with meta information for the current author.
	 */
	function post_author() {
		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'undercoverlawyer' ),
			'' . esc_html( get_the_author() ) . ''
		);

		echo '<figure><i class="fa fa-user"></i> ' . $byline . '</figure>'; // WPCS: XSS OK.

	}
endif;

if ( ! function_exists( 'undercoverlawyer_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function post_categories() {
		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			$categories_list = get_the_category_list( esc_html__( ', ', 'undercoverlawyer' ) );
			if ( $categories_list ) {
				/* translators: 1: list of categories. */
				printf( '<figure><i class="fa fa-folder-open"></i>' . esc_html__( '%1$s', 'undercoverlawyer' ) . '</figure>', $categories_list ); // WPCS: XSS OK.
			}

			/* translators: used between list items, there is a space after the comma */
			$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'undercoverlawyer' ) );
			if ( $tags_list ) {
				/* translators: 1: list of tags. */
				//printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'undercoverlawyer' ) . '</span>', $tags_list ); // WPCS: XSS OK.
			}
		}

		if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {

		}


	}
endif;

if ( ! function_exists( 'undercoverlawyer_post_thumbnail' ) ) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function undercoverlawyer_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) :
			?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
			<?php
			the_post_thumbnail( 'post-thumbnail', array(
				'alt' => the_title_attribute( array(
					'echo' => false,
				) ),
			) );
			?>
		</a>

		<?php
		endif; // End is_singular().
	}
endif;
