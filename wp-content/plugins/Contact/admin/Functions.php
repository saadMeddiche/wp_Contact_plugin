<?php
function fetche_data_message()
{
    global $wpdb;

    $table = 'wp_messages';

    $request = "SELECT * FROM $table";

    $data = $wpdb->get_results($request);

    return $data;
}
