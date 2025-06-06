<?php
/**
 * The template for displaying content archive room.
 *
 * This template can be overridden by copying it to yourtheme/wp-hotel-booking/content-room.php.
 *
 * @author  ThimPress, leehld
 * @package WP-Hotel-Booking/Templates
 * @version 1.6.1
 */

/**
 * Prevent loading this file directly
 */
defined( 'ABSPATH' ) || exit();
?>

<li id="room-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * hotel_booking_before_loop_room_item hook
	 */
	do_action( 'hotel_booking_before_loop_room_item' );
	?>

	<div class="summary entry-summary">

		<?php
		/**
		 * hotel_booking_loop_room_thumbnail hook
		 */
		do_action( 'hotel_booking_loop_room_thumbnail' );

		echo '<div class="room-rating-featured">';
			/**
			 * hotel_booking_loop_room_rating hook
			 */
			do_action( 'hotel_booking_loop_room_rating' );

			/**
			 * hotel_booking_loop_room_feature hook
			 */
			do_action( 'hotel_booking_loop_room_feature' );
		echo '</div>';

		/**
		 * hotel_booking_loop_room_title hook
		 */
		do_action( 'hotel_booking_loop_room_title' );

		/**
		 * hotel_booking_loop_room_price hook
		 */
		do_action( 'hotel_booking_loop_room_price' );
		?>

	</div><!-- .summary -->

	<?php
	/**
	 * hotel_booking_after_loop_room_item hook
	 */
	do_action( 'hotel_booking_after_loop_room_item' );
	?>

</li>

<?php
/**
 * hotel_booking_after_loop_room
 */
do_action( 'hotel_booking_after_loop_room' ); ?>
