<?php
/**
* Plugin Name: TMD Spam Killer
* Plugin URI: https://wordpress.org/plugins/tmd-spam-killer/
* Description: Hides the 'Comment Author URL' from the WordPress comments submission form and kills the comment submission process if a spam 'bot script is detected trying to submit a comment with a completed 'Comment Author URL' field.
* Version: 1.001
* Author: The Mayne Design
* Author URI: www.mayne.net
* License: GPLv2 or later
*/

## Remove URL field from comment form
function tsk_url_filtered($fields)
{
  if(isset($fields['url']))
   unset($fields['url']);
  return $fields;
}
add_filter('comment_form_default_fields', 'tsk_url_filtered');


## If URL comment field is completed by a robot then kill WP if the user isn't logged in
function tsk_preprocess_comment_kill_if_url( $commentdata ) {
	if ( $commentdata['comment_author_url'] != '' && is_user_logged_in() == false ) {
		wp_die( 'Sorry an error has occurred' );
    }
	else {
		return $commentdata;
	}
} 
add_filter( 'preprocess_comment' , 'tsk_preprocess_comment_kill_if_url' );