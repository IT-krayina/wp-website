=== NK Google Analytics ===
Contributors: marodok
Donate link: http://www.marodok.com/nk-google-analytics/
Tags: javascript, google, tracking, analytics, tracking code, display advertising, remarketing analytics, universal analytics, google analytics
Requires at least: 2.7
Tested up to: 3.8
Stable tag: 1.2.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds necessary javascript to enable Google Analytics tracking on your website.

== Description ==

NK Google Analytics adds the required javascript to track your website, it supports <b>Classic</b>, <b>Universal</b> and <b>Remarketing</b> Google Analytics tracking code. 

For more information about Google Analytics visit:
[Google Analytics](http://www.google.com/analytics)

For more information about Display Advertising
[Support Display Advertising](https://support.google.com/analytics/answer/2444872?hl=en&utm_id=ad)

NK Google Analytics its simple, just add your Google Analytics ID.

<h4>Features</h4>

* Supports standard Google Analytics tracking via the latest async tracking methods (faster and more reliable than the older ga.js tracking method)
* Inserts your tracking code on all theme pages
* Supports Classic Google Analytics tracking code
* Supports Universal Google Analytics tracking code
* Supports Display Advertising tracking code
* Supports Custom Google Analytics tracking code
* No tracking for admin users logged-in.

NK Google Analytics enables Google Analytics on all pages.


== Installation ==

If you don't have an Google Analytics ID, you need to go to [Google Analytics](http://www.google.com/analytics), create an account and get the code (Similar to UA-0000000-0)

1. Upload `nk-google-analytics` directory to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Add the ID from Google Analytics (UA-0000000-0) to the settings (Admin > Settings > NK Google Analytics > Google Analytics ID field) and press "Save Changes"
4. Change other options like "Enable Remarketing" or "Universal Analytics" if you want


== Frequently Asked Questions ==

= Does NK Google Analytics supports classic Tracking code? =

Yes, it does.

= Does NK Google Analytics supports Universal Tracking code? =

Yes, it does.

= Does NK Google Analytics supports Display Advertising / Remarketing Tracking code? =

Yes, it does.

= Does NK Google Analytics supports Custom Tracking code? =

Yes, it does.

= The plugin should work as soon as the Google Analytics code is inserted? =

Yes, for classic Google Analytics. If you have Universal Analytics you must set your domain (your-domain.com without www or htttp://).

The default configuration should work in both cases.

= What kind of Google Analytics do I have? =

You should go to Google.com/Analytics and select your website profile. After select "Admin > Tracking Info" .

For Universal Analytics you will see this label: "Universal Analytics is enabled for this property.", for Classic Analytics you doesn't

= Is the plugin working? =

You can enter to real time panel into google/analytics and navigate into your website to test if the tracking code is working



== Screenshots ==

1. Modified settings panel with NK Google Analytics.
2. NK Google Analytics settings page.

== Changelog ==

= 1.2.9 = 
* Removed an error_log call, so the log file will not grow more
* Added an index.html file in plugin's directory to avoid to crawlers to index it

= 1.2.8 = 
* Upgraded some validations and fixed some minor bugs

= 1.2.7 = 
* Tracking issue fix with remarketing tracking code

= 1.2.6 = 
* New enable/disable option.
* Retyped and reordered some option for improve reading and comprehension of options.

= 1.2.5 = 
* Custom code fix.

= 1.2.4 = 
* Update documentation and FAQ.
* Added Universal Analytics domain verification.


= 1.2.3 = 
* Fix some minor bugs.

= 1.2.2 = 
* Added support to custom Google Analytics tracking code.

= 1.2.1 = 
* Google Analytics ID setting verification.

= 1.2 =
* Fix some minor bugs.
* Update documentation.

= 1.1 =
* Fix some bugs.

= 1.0 =
* First release.

== Upgrade Notice ==

= 1.0 =

Fisrt release.
