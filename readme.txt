=== Super Simple Random Quotes ===

Super Simple Random Quotes is a simple Wordpress plugin that you can use to add random quotes to your Wordpress site.  

Contributors: Scott Ball
Donate link: http://www.amorian.org/
Tags: random quote
Requires at least: Unknown
Tested up to: 2.7.1
Stable tag: trunk


== Description ==

Super Simple Random Quotes is a very simple random quote generator.  I made it as simple as I could so that very little programming knowledge is needed to make it work. You only need to put one short line of code into your Wordpress page.  You will need to put some quotes into a simple text file.

If you want a simple first plugin for making customizations to your blog, this would be a good one to start with. 

== Installation ==

1. Extract the randomquotes.zip archive into a temporary folder on your PC.  It should extract to a folder named "randomquotes".  If it doesn't, create a folder named "randomquotes" and move randomquotes.php and quotes.txt into it.

2. I recommend using the default quotes to get your plugin running.  Then when it's running fine, replace the quotes in quotes.txt with your favorite quotes.  

Each quote in quotes.txt is made up of the text of the quote, a delimiter character, and the quote's author.  The delimiter is the character "#" by default, but you can choose a different delimiter character if you know how to edit randomquotes.php and change the corresponding character there.  I recommend not changing the delimiter if you don't have to.

Don't use the "#" character in the text of your quote.

Make sure you don't leave any blank lines in the very bottom of the quotes.txt file.  randomquotes.php will try to display those also and you might get an error message on your page.

3. Copy the entire folder named "randomquotes" from your PC into the folder named "plugins" in your Wordpress site.

4. Activate the plugin through Wordpress.

5. Place "<?php randomquotes(); ?>" in your Wordpress HTML page where you want the quotes displayed.  For example, in the http://www.amorian.org site I put my random quotes at the bottom of my right-side sidebar in sidebar.php.  I created a category of "Quotes" and put the quote generator under it like this: 
<div id="right-sidebars">
  <div class="sidebar-box">
    <?php if ( !function_exists('dynamic_sidebar')        || !dynamic_sidebar(2) ) : ?>
      <h3>Recent Entries</h3>
      <ul><?php get_archives('postbypost', 10); ?></ul>
      <h3>Connect</h3>
      <ul><?php wp_register(); ?>
	    <li><?php wp_loginout(); ?></li>
        <?php wp_meta(); ?>
      </ul>
      <h3>Quotes</h3>           <!-- I added this line, and -->
      <?php randomquote(); ?>   <!-- I added this line -->
    <?php endif; ?>
  </div>
</div>

== Support ==

No support is available for this plugin. The author may not respond to inquiries, or update the plugin on a regular basis.  If you find something in this plugin that doesn't work, or if you find caveats in the use of this plugin, and you would like to share your fix or information, please let the author know by adding a comment to the Randomquotes blog entry in Amorian.org.
