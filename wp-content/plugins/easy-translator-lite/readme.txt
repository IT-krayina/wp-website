=== Easy Translator ===
Contributors: manojtd
Donate link: http://buy.thulasidas.com/easy-translator
Tags: plugins, internationalization, translation, translator, localization, i18n, l10n
Requires at least: 2.8
Tested up to: 3.8
Stable tag: 3.30

Easy Translator is a machine translator for blog posts and a plugin translation tool for developers and translators.

== Description ==

*Easy Translator* is a plugin to translate other plugins as well as blog posts and pages. It provides a customizable widget to enable machine translation (from Google or Microsoft). For plugins, it picks up translatable strings (in `_[_e]()` functions) and presents them and their existing translations (from the MO object of the current text-domain, if loaded) in a user editable form. It can generate a valid PO file that can be emailed to the plugin author.

The [Pro Version](http://buy.thulasidas.com/easy-translator "Buy the Pro Version for $3.95") adds the following features:

1. Machine translation help to seed your plugin translation efforts. That is, for each translatable string found, it will give you a translation as provided by Google, which you can edit and perfect.
2. Auto identification of the text-domain used by the plugin being translated.
3. Email support so that your translators can send the PO file directly from the its window, streamlining their work.
4. Color-pickers for the blog post translation widget, to customize and match your colors with your theme.

If you are a plugin author interested in internationalizing your plugins, you may want to ask your potential translators to install *Easy Translator* to make it a snap to give you translations. If you want to clean up your internationalization, you will appreciate *Easy Translator* because it does a fuzzy string matching to highlight possible repetitions and conflicts among key strings.

Note that *Easy Translator* is now a blog page translator for a blogger, although it was originally written as a tool for plugin authors and the kind international users who put in their time and effort to translate plugins.

== Upgrade Notice ==

= 3.30 =

Compatibility with WP3.8. Documentation changes.

== Screenshots ==

1. How to launch *Easy Translator* - Where to find it?
2. How to use *Easy Translator* - The Editor
3. How to use *Easy Translator* - The POT File Viewer

== Installation ==

1. Upload the *Easy Translator* plugin (the whole easy-translator folder) to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Go to the Tools -> Easy Translator to use it.

== Frequently Asked Questions ==

= Looks good, but doesn't work! =

*Easy Translator* is a fairly complicated program. If you find a bug or anything that doesn't work as expected, please do not keep it to youself. Please post it in [the forum](http://wordpress.org/tags/easy-translator-lite "Easy Translator Forum") or [email me](http://support.thulasidas.com/ "Contact Manoj"). I really would like to make it work perfectly.

= This plugin conflicts with other plugins. What to do now? =

*Easy Translator* uses the PHP "super-global" variables (`$_SESSION[]`) to hold various strings and settings between your visits so that your translation work is not accidentally erased. I hope to have implemented it safely. But as any developer will tell you, there is nothing safe about using globals. If you find anything amiss, I'd appreciate it if you could let me know. Please post it in [the forum](http://wordpress.org/tags/easy-translator-lite "Easy Translator Forum") or [contact me](http://support.thulasidas.com/ "Contact Manoj").

**If you have a question or comment about the Pro version, please do not use the forum hosted at WordPress.org, but [contact the plugin author](http://support.thulasidas.com/ "Contact Manoj") using our support portal.**

= The PO files created generate errors when I run `msgfmt` on them. What are these errors? =

The plugin has a known issue with quotation marks within strings. Some of the quotations marks don't get escaped with a backslash. I think this issue is locale-specific, and don't know how to solve it. If you have any ideas, please let me know. The workaround is to edit the generated PO files with a text editor and go to the lines that give you errors in `msgfmt`. You will most likely find some unescaped quotes that you should prepend a backslash to. It should then go through `msgfmt` without error. Another known problem is that in some locales, the `\n` character in the first few lines appear as `n` -- again in a locale-specific way.

= How do I get it to translate my blog pages/posts? =

To enable blog page/post translation, find the Easy Translator widget (under the Appearance -> Widgets menu on your WordPress admin page) and drop it on a sidebar. If you have the Pro version of the plugin, you can tweak the colors of the widget to match your theme.

== Change Log ==

= Past =

* V3.30: Compatibility with WP3.8. Documentation changes. [Dec 19, 2013]
* V3.20: Compatibility with WP3.7. Some minor documentation changes. [Nov 9, 2013]
* V3.10: Compatibility with WP3.6. Some additional tooltips to help the user. [Aug 15, 2013]
* V3.01: Documentation changes only. [May 21, 2013]
* V3.00: Major upgrade with blog page translation as well as Google translate to seed plugin translation. [May 20, 2013]
* V2.13: Proper session initialization. [Mar 30, 2013]
* V2.12: Proper use of SESSION variables. [Feb 18, 2013]
* V2.11: Bug fixes (Fatal error: Call-time pass-by-reference has been removed). [Jan 27, 2013]
* V2.10: Including a support link on the admin page. [Sep 30, 2012]
* V2.06: Taking care of some debug notices from WordPress debug mode. [Aug 28, 2012]
* V2.05: Minor changes to the admin page. [July 18, 2012]
* V2.04: Taking care of magic_quotes_gpc in PHP. [May 18, 2012]
* V2.03: Renaming the plugin to drop the word Lite. [May 11, 2012]
* V2.02: Changing the php file search to recursive. [Mar 20, 2012]
* V2.01: Adding a new feature to create a new MO file (rather than just editing an existing one). [Mar 19, 2012]
* V2.00: Releasing a Lite and Pro version. [Mar 6, 2012]
* V1.01: Correcting a few minor bugs (a) Author email (of the plugin being translated was set to the author of this plugin. (b) The name of the plugin was set to *Easy AdSense* (Thanks, Sub!). (c) Some corrections are needed for escaping quotation marks and line breaks in locales other than English. Will include them in the next release. (Hard to test because my locale is en_US).
* V1.00: Initial release. [July 21, 2009]

