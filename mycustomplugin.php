<?php

/*
 * Plugin Name:       My custom Plugin
 * Plugin URI:        https://www.github.com/bhawnam193
 * Description:       custom plugin
 * Version:           1.0.0
 * Author:            Bhawna
 * Author URI:        https://www.github.com/bhawnam193
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

function create_table(){
	
	global $wpdb;
    $table_name   = $wpdb->prefix .'testplugin';
    $sql = 'CREATE TABLE ' . $table_name . ' (
	    id int(11) NOT NULL AUTO_INCREMENT,
	    engine text NOT NULL,
	    PRIMARY KEY (id))';
	$wpdb->query($sql);
}

function drop_table(){
	
	global $wpdb;
    $table_name = $wpdb->prefix .'testplugin';
    $sql = "DROP TABLE IF EXISTS ". $table_name;
    $wpdb->query($sql);
    
}


register_activation_hook(__FILE__, 'create_table');
register_deactivation_hook(__FILE__, 'drop_table');

?>
