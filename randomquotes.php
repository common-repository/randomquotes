<?php
/*
Plugin Name: Super Simple Random Quotes
Description: Selects a random quote from a text file and displays it anywhere in a Wordpress (or other PHP driven) site.
Version: 1.1
Author: Scott Ball
Author's URI: http://www.amorian.org
Plugin URI: http://www.amorian.org/uploads/randomequotes.zip
*/
/*	
Copyright 2008  Scott Ball
This program is free software.   You man redistribute it or modify it under the terms of any version of the GNU General Public License as published by
the Free Software Foundation.   This program is distributed free of cost without intent of sale.  It is provided WITHOUT ANY WARRANTY;  without even 
the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
//    Call function &lt;?php randomquote(); ?&gt; from the location where you want the quote to appear in your theme. 
function randomquote()
{
// Open the file of quotes.
	// Get the string that is the server path to the Wordpress 'index.php', and remove 'index.php' from the string
	// then add the default Wordpress path to 'quotes.txt' to the string
	$file = substr($_SERVER['SCRIPT_FILENAME'],0,strrpos($_SERVER['SCRIPT_FILENAME'], "/")+1).'wp-content/plugins/randomquotes/quotes.txt';
	$quotes = file($file);
	
// Select a random quote.
	$quote = explode("#",$quotes[mt_rand(0, (count($quotes)-1) )]);

// Write the quote into the web page.   Edit the styles to suit your tastes.  (If you know how, I recommend putting these styles into your Wordpress stylesheet.)
	echo "<div style='padding:5px 5px 0 10px; font-family:sans-serif;text-align:left; font-size:1.0em; letter-spacing:1px; color:#CC0000; line-height:1.5em;'>".$quote[0]."</div>";
	echo "<div style='padding:5px 0 0 10px; font-family:sans-serif; text-align:left; font-size:0.9em;color:#333333;'>&nbsp;-&nbsp;".$quote[1]."</div>";
}
?>