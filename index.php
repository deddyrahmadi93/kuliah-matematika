<?php
/**
 * Displays the index section of the theme.
 *
 */
?>

<?php get_header(); ?>

<?php
	/**
	 * generic_before_main_container hook
	 */
	do_action( 'generic_before_main_container' );
?>

<div id="container">
	<?php
		/**
		 * generic_main_container hook
		 *
		 * HOOKED_FUNCTION_NAME PRIORITY
		 *
		 * generic_content 10
		 */
		do_action( 'generic_main_container' );
	?>
</div><!-- #container -->

<?php
	/**
	 * generic_after_main_container hook
	 */
	do_action( 'generic_after_main_container' );
?>

<?php get_footer(); ?>
