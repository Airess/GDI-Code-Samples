<?php

 /**
 * Adds My Awesome widget.
 */
 
class My_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	public function __construct() {
		parent::__construct(
	 		'my_widget', // Base ID
			'My Awesome Widget', // Name
			array( 'description' => __( 'My Awesome widget I made myself', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 */
	 
	public function widget( $args, $instance ) {
		extract( $args );
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		$textarea = $instance['textarea'];
		$textarea2 = $instance['textarea2'];

		echo $before_widget;

		echo '<ul>';
		
		// if the title is set
		if ( $title ) {
		echo $before_title . $title . $after_title;
		}

		// if text is entered in the first textarea
		if ( $textarea ) {
		echo '	<li>' . $textarea . '</li>';
		}
			
		// if text is entered in the second textarea
		if ( $textarea ) {
		echo '	<li>' . $textarea2 . '</li>';
		}
		
		echo '</ul>';
		
        echo $after_widget;
	}

	/**
	 * Sanitize widget form values as they are saved.
	 */
	 
	public function update($new_instance, $old_instance) {
	$instance = $old_instance;
	$instance['title'] = strip_tags($new_instance['title']);
	$instance['textarea'] = ($new_instance['textarea']);
	$instance['textarea2'] = ($new_instance['textarea2']);
    return $instance;
    }

	/**
	 * Back-end widget form.
	 */
	 
	public function form( $instance ) {
	
    $title = esc_attr($instance['title']);
	$textarea = esc_attr($instance['textarea']);
	$textarea2 = esc_attr($instance['textarea2']);

    ?>

	<p>
      	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title (optional)'); ?></label>
      	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
    </p>

	<p>
    	<label for="<?php echo $this->get_field_id('textarea'); ?>"><?php _e('Enter text below:'); ?></label>
    	<textarea class="widefat" id="<?php echo $this->get_field_id('textarea'); ?>" name="<?php echo $this->get_field_name('textarea'); ?>"><?php echo $textarea; ?></textarea>
    </p>

	<p>
    	<label for="<?php echo $this->get_field_id('textarea2'); ?>"><?php _e('Enter more text below:'); ?></label>
    	<textarea class="widefat" id="<?php echo $this->get_field_id('textarea2'); ?>" name="<?php echo $this->get_field_name('textarea2'); ?>"><?php echo $textarea2; ?></textarea>
    </p>

    <?php
	}

}

// register My_Widget widget
function register_my_widget() {
    register_widget( 'My_Widget' );
}
add_action( 'widgets_init', 'register_my_widget' );

?>