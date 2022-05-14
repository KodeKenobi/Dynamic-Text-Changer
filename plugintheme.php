<?php


/**
 * Plugin Name: plugintheme
 * Description: WordPress plugin that allows for the dynamic replacing of words in the content on a post or page..
 */


// Remove ther admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

// Declaring a string variable
//$str = "jerky";
//echo("Original String : ");
//echo($str."<br>");

// Old string
$str_old = "jerky";

// New string
$str_new = "biltong";

// Replacing part of string
$final_str = str_replace($str_old,$str_new,$str);

//echo("Modified String : ");
//echo($final_str);

?>