<?php
/*
Plugin Name: NK Google Analytics
Plugin URI: http://www.marodok.com/nk-google-analytics/
Description: Add <a href="http://www.google.com/analytics/">Google Analytics</a> javascript code on all pages.
Version: 1.2.9
8Author: Manfred Rodríguez
Author URI: http://www.marodok.com
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_NKgoogleanalytics() {

  $domain = 'your-domain.com';
  if($_SERVER['SERVER_NAME']){
    $domain = $_SERVER['SERVER_NAME'];
  }

  add_option('nkweb_id', 'UA-0000000-0');
  add_option('nkweb_Display_Advertising', 'false');  
  add_option('nkweb_Universal_Analytics', 'true');
  add_option('nkweb_Domain', $domain);
  add_option('nkweb_Use_Custom', 'false');
  add_option('nkweb_Custom_Code', '');
  add_option('nkweb_Enable_GA', 'true');
  add_option('nkweb_Error', '');

  //Just for statistics
  try {
    $xml = file_get_contents("http://www.marodok.com/url.php?url=".site_url());  

  } catch (Exception $e) {
    // nothing :-)
  }
}

function deactive_NKgoogleanalytics() {
  delete_option('nkweb_id');
  delete_option('nkweb_Display_Advertising');
  delete_option('nkweb_Universal_Analytics');
  delete_option('nkweb_Domain');
  delete_option('nkweb_Use_Custom');
  delete_option('nkweb_Custom_Code');
  delete_option('nkweb_Enable_GA');
  delete_option('nkweb_Error');
}

function admin_init_NKgoogleanalytics() {
  register_setting('NKgoogleanalytics', 'nkweb_id');
  register_setting('NKgoogleanalytics', 'nkweb_Display_Advertising');
  register_setting('NKgoogleanalytics', 'nkweb_Universal_Analytics');
  register_setting('NKgoogleanalytics', 'nkweb_Domain');
  register_setting('NKgoogleanalytics', 'nkweb_Use_Custom');
  register_setting('NKgoogleanalytics', 'nkweb_Custom_Code');
  register_setting('NKgoogleanalytics', 'nkweb_Enable_GA');
  register_setting('NKgoogleanalytics', 'nkweb_Error');
}

function admin_menu_NKgoogleanalytics() {
  add_options_page('NK Google Analytics', 'NK Google Analytics', 'manage_options', 'NKgoogleanalytics', 'options_page_NKgoogleanalytics');
}

function options_page_NKgoogleanalytics() {
  include(WP_PLUGIN_DIR.'/nk-google-analytics/options.php');  
}

function NKgoogleanalytics() {
	
  $comment = "<!-- Tracking code easily added by NK Google Analytics -->\n";
  $nkweb_id = get_option('nkweb_id');
  $Display_Advertising = get_option('nkweb_Display_Advertising');
  $Universal_Analytics = get_option('nkweb_Universal_Analytics');
  $Domain = get_option('nkweb_Domain');
  $nkweb_Use_Custom = get_option('nkweb_Use_Custom');
  $nkweb_Custom_Code = get_option('nkweb_Custom_Code');
  $nkweb_Enable_GA = get_option('nkweb_Enable_GA');
  $nkweb_Error = get_option('nkweb_Error');

  $tk = "";
  

  if($nkweb_Enable_GA != "false"){

    $tk = $comment;
  
    if($nkweb_Use_Custom == "true"){
      
      
      $tk .= "<script>" . $nkweb_Custom_Code . "</script>";
      $tk = str_replace("<script><script>", "<script>", $tk);
      $tk = str_replace("</script></script>", "</script>", $tk);

    }else{
      if($nkweb_id != "" && $nkweb_id != "UA-0000000-0"){
        
        if($Universal_Analytics=="false"){
    
          $tk .= "<script type=\"text/javascript\">\n";
          $tk .= " var _gaq = _gaq || [];\n";
          $tk .= " _gaq.push( ['_setAccount', '".$nkweb_id . "'],['_trackPageview'] );\n";
          $tk .= "\n";
          $tk .= " (function() {\n";
          $tk .= "  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
          
          if($Display_Advertising=="false"){ 
            $tk .= " ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
          }else{
            $tk .= " ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';\n";
          }
          
          $tk .= "  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\n";
          $tk .= " })();\n";
          $tk .= "\n";
          $tk .= " window.onload = function() {\n";
          $tk .= "  if(_gaq.I==undefined){\n";
          $tk .= "   _gaq.push(['_trackEvent', 'tracking_script', 'loaded', 'ga.js', ,true]);\n";
          $tk .= "   ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\n";
          $tk .= "   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\n";
          $tk .= "   s = document.getElementsByTagName('script')[0];\n";
          $tk .= "   gaScript = s.parentNode.insertBefore(ga, s);\n";
          $tk .= "  } else {\n";
          $tk .= "   _gaq.push(['_trackEvent', 'tracking_script', 'loaded', 'dc.js', ,true]);\n";
          $tk .= "  }\n";
          $tk .= " };\n";          

          $tk .= "</script> \n";
          
        }else{
          
          
          $tk .= "<script> \n";
          $tk .= "(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ \n";
          $tk .= "(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), \n";
          $tk .= "m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) \n";
          $tk .= "})(window,document,'script','//www.google-analytics.com/analytics.js','ga'); \n";

          $tk .= "ga('create', '" . $nkweb_id. "', '" . $Domain . "'); \n";
          $tk .= "ga('send', 'pageview'); \n";

          $tk .= "</script> \n";
          
        }
      }else{
        update_option( "nkweb_Error", "There is a problem with your Google Analytics ID" );
      }
    }
    echo $tk;
  }
}
register_activation_hook(__FILE__, 'activate_NKgoogleanalytics');
register_deactivation_hook(__FILE__, 'deactive_NKgoogleanalytics');

if (is_admin()) {
  add_action('admin_init', 'admin_init_NKgoogleanalytics');
  add_action('admin_menu', 'admin_menu_NKgoogleanalytics');
}

if (!is_admin()) { 
  add_action('wp_head', 'NKgoogleanalytics'); 
}

?>
