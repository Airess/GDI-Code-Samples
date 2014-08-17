<?php
/**
 * The sidebar containing the secondary widget area and conditional tags for page-specific sidebars.
 *
 * If no active widgets in this sidebar, it will be hidden completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
 
<div id="tertiary" class="sidebar-container" role="complementary">
	<div class="sidebar-inner">
		<div class="widget-area">
		
			<?php
				if(is_page( 'about' )){
					dynamic_sidebar( 'aboutsidebar' );
				}

				if(is_page( 'contact' )){
					dynamic_sidebar( 'contactsidebar' );
				}
			?>
		
			<?php
				if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div><!-- .widget-area -->
		</div><!-- .sidebar-inner -->
	</div><!-- #tertiary -->
<?php endif; ?>