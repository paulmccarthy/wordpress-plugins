=== WP Frame Breaker ===
Contributors: paulmac
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=LPT7UT9QE2G42&lc=IE&item_name=Paul%20McCarthy&amount=1%2e00&currency_code=EUR&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted
Tags: frames, remove, break, digg
Requires at least: 2.3
Tested up to: 2.7.1
Stable tag: trunk

Adds a short javascript to your blog header to break out of any containing frames

== Description ==

Uses a short javascript to remove any containing frames around your WordPress site. The Digg toolbar now adds frames to sites, affecting site owners traffic stats and SEO. Using "WP Frame Breaker" will force your site out of the Digg containing frame.

== Installation ==

1. Extract "wp-frame-beaker.zip"
1. Upload the "wp-frame-breaker" folder to your WordPress Plugins folder.
1. Activate the plugin from the WordPress Plugins Page.

== Frequently Asked Questions ==

= I activated the plugin and I don't see anything happening? =
The plugin does not visibily alter the way your site appears. It simply adds a small piece of javascript to your blogs code that checks if your site is being displayed in a frame and if it is, removes the frame.

Check your page source, (right click anywhere in your site and go to View Page Source). Look for a line that contains:

Start WP Frame Breaker Script

If you see this line, then the plugin is installed correctly.

= What if a user doesn't have javascript enabled? =
If the user doesn't have javascript enabled, then this plugin will not work. However, javascript is usually required for most sites that display links in a frame, so this should work for the majority of users.