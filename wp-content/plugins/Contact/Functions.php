<?php

function contact_admin_menu()
{
    add_menu_page(
        'Contacts',
        'Contacts',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/contactView.php',
        null,
        'dashicons-buddicons-pm',
        2
    );
}

function insert_content_user()
{
    //Vlidation of the form
    if (isset($_POST["Send"])) {

        $errors = contact_form_validation(['Name', 'Email', 'Subject', 'Message']);

        if ($errors) {
            display_errors($errors);
        } else {

            insert_data_message();

            display_success_popup();
        }
    }


    $form = file_get_contents(plugin_dir_path(__FILE__) . 'user/contactView.php');

    return $form;
}

function insert_content_popup()
{

    $form = file_get_contents(plugin_dir_path(__FILE__) . 'user/popup.php');

    return $form;
}

function create_messages_table()
{
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();

    $requete = "CREATE TABLE wp_messages(
                id INT(11) NOT NULL AUTO_INCREMENT,
                name VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                subject VARCHAR(255) NOT NULL,
                message TEXT NOT NULL,
                PRIMARY KEY (id)
                ) $charset_collate;
                ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

    dbDelta($requete);
}

function delete_messages_table()
{
    global $wpdb;

    $table_name = 'wp_messages';

    $request = "DROP TABLE IF EXISTS $table_name";

    $wpdb->query($request);
}

function insert_data_message()
{
    global $wpdb;

    $table_name = 'wp_messages';

    $data = array(
        'name' =>  $_POST['Name'],
        'email' => $_POST['Email'],
        'subject' => $_POST['Subject'],
        'message' => $_POST['Message']
    );

    $wpdb->insert($table_name, $data);
}
