<?php

//Incule The functions Of Form Validation
include plugin_dir_path(__FILE__) . 'validation\'s Functions.php';

//Include The Function that build the blugin
include plugin_dir_path(__FILE__) . 'Functions.php';

/*
 * Plugin Name: ContactTheWorld
 * Description: Alpha01 un plugin personnalisé qui permettra d'ajouter des fonctionnalités d'un formulaire de contact, dans la page Contact Us.
 * Author: Saad Meddiche
 * Author URI: https://author.example.com/
 * Version: 1.0.0
*/

//Hide the nave bare
add_filter('show_admin_bar', '__return_false');

//Create table of messgaes
create_messages_table();

//Add the contact menu to the dashboard
add_action('admin_menu', 'contact_admin_menu');

//Create A  shortcode for the Contact Form
add_shortcode('contactTheWorld', 'insert_content_user');

//Create A ShortCode For The PoP-Up
add_shortcode('ContactPoPUp', 'insert_content_popup');

//Delete The Table message when the plugin is desactivated
add_action('deactivated_plugin', 'delete_messages_table');


?>


<style>
    <?php include plugin_dir_path(__FILE__) . 'css/errors.css' ?><?php include plugin_dir_path(__FILE__) . 'css/adminview.css' ?>
</style>