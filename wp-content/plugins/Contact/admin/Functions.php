<?php
function fetche_data_message()
{
    global $wpdb;

    $table_name = 'wp_messages';

    $request = "SELECT * FROM $table_name";

    $data = $wpdb->get_results($request);

    return $data;
}
