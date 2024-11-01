=== WP-Debug ===
Contributors: cpoteet
Tags: debug, development
Requires at least: 2.0
Tested up to: 2.3.1
Stable tag: 1.0

A plugin that will display debug information without have to use print_r() or var_dump()!

Note: WebDevStudio has created [WP-Devel](http://wordpress.org/extend/plugins/wp-devel/) which uses the foundation of WP-Debug and has added enhancements. IÕm no longer updating WP-Debug but instead pointing to their work.

== Description ==

Developers now have the ability to dynamically see what's going on behind the scenes when your page is rendered with help from the [Krumo Framework](http://kaloyan.info/krumo/).

With it you can display information about GET/POST requests, session variables, server information (from php.ini), included files, variables, and more!

== Installation ==

This section describes how to install the plugin and get it working.

1. Download, upload, activate.
2. When logged in it will display at the bottom of the page (everything is removed for outside users).

Note: Be sure that your footer uses the wp_footer() function to work.

== Configuration ==

= Changing Styles =

Krumo comes with some default styles: default, blue, green, orange, and scablon.com. It is set to default which works the best with the default WordPress theme. If you would like to change it you can go to the "krumo" folder of the plugin and edit the "selected" value in the krumo.ini file (you might have to adjust the styles depending on how CSS inheritance from your theme throws things off).

= Adding Variables =

I have most of the Krumo API in the plugin, but you can add/remove at your lesiure. If you want to check a variable then simply add to lines 14, but you can see on line 14 that I had to declare WordPress variables as global, because the content is outside the loop. Simply add a global variable to line 12 if needed.

Be sure to check the [documentation](http://kaloyan.info/krumo/docs/documentation) for their API if need be.

== Screenshots ==

1. A DHTML show/hide menu displays the debug information.