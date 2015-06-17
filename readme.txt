=== Plugin Name ===
Contributors: supersonic
Donate link: https://www.amazon.co.uk/gp/registry/wishlist/1J77G6RFK7JZ3/
Tags: comments, spam
Requires at least: 4.2.2
Tested up to: 4.2.2
Stable tag: 4.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hides the 'Comment Website URL' field, kills WP if a spam 'bot submits a comment which includes a Comment Author URL.

== Description ==

Is this the ultimate in automated 'bot Spam Killers?

Spam is the bane of WordPress admin's lives; auto-generated Spam can bypass unset hidden fields from the WordPress comment page by directly submitting the comment to WordPress.

This plugin does two things:

- Removes the 'Comment Author URL' field from the WordPress comments form; for most non-technical blogs this optional field is irrelevant.
- Kills WP (hey that saves some CPU cycles) if a comment is submitted which contains a Comment Author URL.

Website spam 'bots have two aims, firstly they populate spam links within the main body of a spam comment, and the spam 'bot also includes the spam destination in the Comment Author URL of the comment field.

We put together this little plugin as despite running two other anti-spam plugins + Google Captcha, 'bot spam was still getting through. This was resulting in an hour or so each week weeding out the real comments that had fallen into the spam bucket due to the real commenter failing to complete the Google Captcha correctly. We also noticed that real user comments reduced with Google Captcha in place.

We don't need to stand for this any longer; say goodbye to Comment Author URL Spam and save CPU cycles!

== Installation ==

There is no configuration for this plugin, simply:

1. Upload `plugin-name.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Where has my 'Comment Author URL' field gone from the comments form? =

This plugin removes the 'Comment Author URL' field in order to detect 'bots that automatically add 'Comment Author URL' via automated comment spam.

= How do I restore the 'Comment Author URL' field in the comments form? =

To restore the 'Comment Author URL' field in the comments form, deactivate and remove this plugin via the WordPress Plugins panel.

= I use other comment submission Plugins that add a specific URL, for example WPMUDev’s Ultimate Facebook, is this plugin compatible? =

No it may not be compatible; if you have any suggestions feel free to open a ticket via the support tab above.

== Changelog ==

= 1.001 =
* Allow logged in users to have a Comment Author URL in their User profile

= 1.0 =
* Initial release

== Upgrade Notice ==
= 1.001 =
* Enhancement for logged in users