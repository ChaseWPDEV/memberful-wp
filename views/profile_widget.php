<?php if ( is_user_logged_in() ): ?>
	<?php
		echo get_avatar( wp_get_current_user()->user_email, 20 );
		echo wp_get_current_user()->display_name; 
	?>
	<a href="<?php echo memberful_signout_url(); ?>"><?php echo __('Sign out'); ?></a>
	<a href="<?php echo memberful_member_url(); ?>"><?php echo __('Account'); ?></a>
<?php else: ?>
	<a href="<?php echo memberful_wp_login_url(); ?>"><?php echo __('Sign in'); ?></a>
<?php endif; ?>