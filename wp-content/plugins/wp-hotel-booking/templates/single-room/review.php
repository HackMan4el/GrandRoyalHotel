<?php
/**
 * The template for displaying single room review.
 *
 * This template can be overridden by copying it to yourtheme/wp-hotel-booking/single-room/review.php.
 *
 * @author  ThimPress, leehld
 * @package WP-Hotel-Booking/Templates
 * @version 1.6
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();

if ( ! isset( $comment ) ) {
    return;
}

$rating   = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
$settings = WPHB_Settings::instance();
?>

<li itemprop="review" itemscope itemtype="http://schema.org/Review" <?php comment_class(); ?>
	id="li-comment-<?php comment_ID(); ?>">

	<div id="comment-<?php comment_ID(); ?>" class="comment_container">

		<?php echo get_avatar( $comment, apply_filters( 'hb_review_gravatar_size', '60' ), '' ); ?>

		<div class="comment-text">

			<?php if ( $rating && $settings->get( 'enable_review_rating' ) ) { ?>
				<div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating"
					title="<?php echo esc_html( sprintf( __( 'Rated %d out of 5', 'wp-hotel-booking' ), $rating ) ); ?>">
					<span style="width:<?php echo( ( $rating / 5 ) * 100 ); ?>%"></span>
				</div>
			<?php } ?>

			<!-- Review title -->
			<?php
			if ( intval(hb_settings()->get( 'enable_advanced_review' )) === 1 ) {
				?>
				<h3 class="hb-room-review-title">
					<?php
					$review_title = get_comment_meta( $comment->comment_ID, 'hb_room_review_title', true );

					if ( ! empty( $review_title ) ) {
						echo esc_html( $review_title );
					}
					?>
				</h3>
				<?php
			}
			?>

			<?php if ( $comment->comment_approved == '0' ) { ?>
				<p class="meta"><em><?php _e( 'Your comment is awaiting approval', 'wp-hotel-booking' ); ?></em></p>
			<?php } else { ?>
				<p class="meta">
					<strong itemprop="author"><?php comment_author(); ?></strong>
					<time itemprop="datePublished"
						datetime="<?php echo get_comment_date( 'c' ); ?>">
						<?php echo get_comment_date( hb_date_format() ); ?>
					</time>
				</p>
			<?php } ?>

			<div itemprop="description" class="description"><?php comment_text(); ?></div>

			<!-- Review Image -->
			<?php
			if ( intval(hb_settings()->get( 'enable_advanced_review' )) === 1 ) {
				$attachment_ids = get_comment_meta( get_comment_ID(), 'hb_room_review_images', true );
				if ( ! empty( $attachment_ids ) && is_array( $attachment_ids ) ) {
					?>
					<ul class="hb-room-review-images">
						<?php
						foreach ( $attachment_ids as $id ) {
							$image_src = wp_get_attachment_image_url( $id );
							if ( ! $image_src ) {
								continue;
							}

							?>
							<li>
								<img src="<?php echo esc_url_raw( $image_src ); ?>" alt="<?php echo esc_attr( $id ); ?>">
							</li>
							<?php
						}
						?>
					</ul>
					<?php
				}
			}
			?>
		</div>
	</div>
</li>
