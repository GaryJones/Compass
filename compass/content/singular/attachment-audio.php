<?php
/**
 * A template part for displaying single audio attachments.
 *
 * @package     Compass
 * @subpackage  HybridCore
 * @copyright   Copyright (c) 2014, Flagship, LLC
 * @license     GPL-2.0+
 * @link        http://flagshipwp.com/
 * @since       1.0.0
 */
?>

<article <?php hybrid_attr( 'post' ); ?>>

	<?php tha_entry_top(); ?>

	<?php hybrid_attachment(); // Function for handling non-image attachments. ?>

	<header class="entry-header">
		<h1 <?php hybrid_attr( 'entry-title' ); ?>><?php single_post_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<p class="entry-meta">
			<time <?php hybrid_attr( 'entry-published' ); ?>><?php echo get_the_date(); ?></time>
			<?php if ( function_exists( 'ev_post_views' ) ) ev_post_views( array( 'text' => '%s' ) ); ?>
			<?php edit_post_link(); ?>
		</p>
	</footer><!-- .entry-footer -->

</article><!-- .entry -->

<div class="attachment-meta">

	<div class="media-info">

		<h3><?php _e( 'Audio Info', 'compass' ); ?></h3>

		<?php hybrid_media_meta(); ?>

	</div><!-- .media-info -->

	<?php tha_entry_bottom(); ?>

</div><!-- .attachment-meta -->
