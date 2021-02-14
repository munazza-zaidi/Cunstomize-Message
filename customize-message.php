<?php
/**
* Plugin Name: Customize Message
* Plugin URI: https://www.mywebsite.com/
* Description: The first plugin I have created.
* Version: 1.0
* Author: Munazza Zaidi
* Author URI: http://yourwebsite.com/
**/
//check for the messagr
function cm_no_wordpress_errors(){
return 'Something went wrong!';
}
add_filter( 'login_errors', 'cm_no_wordpress_errors' );
?>