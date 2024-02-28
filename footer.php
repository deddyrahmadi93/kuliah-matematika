<?php
/**
 * Displays the footer section of the theme.
 *
 */
?>
	   </div><!-- #main -->

	   <?php
	      /**
	       * generic_after_main hook
	       */
	      do_action( 'generic_after_main' );
	   ?>

	   <?php
	   	/**
	   	 * travelify_before_footer hook
	   	 */
	   	do_action( 'generic_before_footer' );
	   ?>

	   <footer id="footerarea" class="clearfix">
			<?php
		      /**
		         * generic_footer hook
				 *
				 * HOOKED_FUNCTION_NAME PRIORITY
				 *
				 * generic_footer_widget_area 10
				 * generic_open_sitegenerator_div 20
				 * generic_socialnetworks 25
				 * generic_footer_info 30
				 * generic_close_sitegenerator_div 35
				 * generic_backtotop_html 40
		       */
		      do_action( 'generic_footer' );
		   ?>
		</footer>

		<?php
	   	/**
	   	 * generic_after_footer hook
	   	 */
	   	do_action( 'generic_after_footer' );
	   ?>

	</div><!-- .wrapper -->

	<?php
		/**
		 * generic_after hook
		 */
		do_action( 'generic_after' );
	?>

<?php wp_footer(); ?>

</body>
</html>