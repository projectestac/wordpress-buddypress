<?php
/**
 * BuddyPress - Members Settings Notifications
 *
 * @package BuddyPress
 * @subpackage bp-legacy
 * @version 3.0.0
 */

/** This action is documented in bp-templates/bp-legacy/buddypress/members/single/settings/profile.php */
do_action( 'bp_before_member_settings_template' ); ?>

<h2 class="bp-screen-reader-text"><?php
	/* translators: accessibility text */
	_e( 'Notification settings', 'buddypress' );
?></h2>

<?php
//XTEC ************ MODIFICAT ­ Added slash at the end of url
//2019.12.09 @nacho
?>
<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/notifications/'; ?>" method="post" class="standard-form" id="settings-form">
<?php
//************ ORIGINAL
/*
<form action="<?php echo bp_displayed_user_domain() . bp_get_settings_slug() . '/notifications'; ?>" method="post" class="standard-form" id="settings-form">
*/
//************ FI
?>
	<p><?php _e( 'Send an email notice when:', 'buddypress' ); ?></p>

	<?php

	/**
	 * Fires at the top of the member template notification settings form.
	 *
	 * @since 1.0.0
	 */
	do_action( 'bp_notification_settings' ); ?>

	<?php

	/**
	 * Fires before the display of the submit button for user notification saving.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_members_notification_settings_before_submit' ); ?>

	<div class="submit">
		<input type="submit" name="submit" value="<?php esc_attr_e( 'Save Changes', 'buddypress' ); ?>" id="submit" class="auto" />
	</div>

	<?php

	/**
	 * Fires after the display of the submit button for user notification saving.
	 *
	 * @since 1.5.0
	 */
	do_action( 'bp_members_notification_settings_after_submit' ); ?>

	<?php wp_nonce_field('bp_settings_notifications' ); ?>

</form>

<?php

/** This action is documented in bp-templates/bp-legacy/buddypress/members/single/settings/profile.php */
do_action( 'bp_after_member_settings_template' );
