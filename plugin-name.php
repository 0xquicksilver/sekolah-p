<?php
/*
Plugin Name: Sekolah
Plugin URI: https://example.com/sekolah
Description: Plugin
Version: 1.0
Author: hidden
Author URI: https://
License: GPL2
*/

if (!defined("ABSPATH")) {
    exit(); // Exit jika file ini dipanggil langsung
}

if (!class_exists("WP_List_Table")) {
    require_once ABSPATH . "wp-admin/includes/class-wp-list-table.php";
}

// require class
require dirname(__FILE__) . "/includes/admin/class-guru-list-table.php";
require dirname(__FILE__) . "/includes/admin/class-pendaftaran-list-table.php";

// require functions
require dirname(__FILE__) . "/functions/pendaftaran.php";
require dirname(__FILE__) . "/functions/guru.php";
require dirname(__FILE__) . "/functions/sekolah.php";
require dirname(__FILE__) . "/functions/page.php";

// enable api cors to all url
add_action(
    "rest_api_init",
    function () {
        remove_filter("rest_pre_serve_request", "rest_send_cors_headers");
        add_filter("rest_pre_serve_request", function ($value) {
            header("Access-Control-Allow-Origin: *");
            header(
                "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE"
            );
            header("Access-Control-Allow-Credentials: true");
            header("Access-Control-Allow-Headers: Authorization, Content-Type");
            return $value;
        });
    },
    15
);

add_action("admin_menu", "Sekolah");

// admin menu
function Sekolah()
{
    add_menu_page(
        __("Sekolah", "sekolah"),
        __("Sekolah", "sekolah"),
        "manage_options",
        "sekolah-page",
        "sekolah_page",
        "dashicons-schedule",
        3
    );

    add_submenu_page(
        "sekolah-page",
        __("Guru List", "sekolah"),
        __("Guru List", "sekolah"),
        "manage_options",
        "guru-page",
        "guru_page"
    );

    add_submenu_page(
        "sekolah-page",
        __("Tambah Guru", "sekolah"),
        __("Tambah Guru", "sekolah"),
        "manage_options",
        "tambah-guru",
        "tambah_guru"
    );

    add_submenu_page(
        "sekolah-page",
        __("Pendaftaran List", "sekolah"),
        __("Pendaftaran List", "sekolah"),
        "manage_options",
        "pendaftaran-page",
        "pendaftaran_page"
    );
}

register_activation_hook(__FILE__, "register_sekolah_table");
register_activation_hook(__FILE__, "register_page_table");
register_activation_hook(__FILE__, "register_guru_table");
register_deactivation_hook(__FILE__, "unregister_sekolah_table");
register_deactivation_hook(__FILE__, "unregister_guru_table");
register_deactivation_hook(__FILE__, "unregister_pendaftaran_table");
register_deactivation_hook(__FILE__, "unregister_page_table");
register_activation_hook(__FILE__, "register_pendaftaran_table");

// Menambahkan script dan style untuk form
function custom_admin_scripts()
{
    wp_enqueue_media();
}
add_action("admin_menu", "custom_admin_scripts");
