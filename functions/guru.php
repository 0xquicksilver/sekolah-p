<?php

function guru_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "guru";
    $guru = new Guru_List_Table();
    $guru->prepare_items();
    if ("edit" === $guru->current_action()) {
        // wp_die( 'Items view (or they would be if we had items to delete)!' );
        if (isset($_GET["id"])) {
            $query = "SELECT * FROM {$table_name} WHERE id = {$_GET["id"]}";
            $result = $wpdb->get_results($query, ARRAY_A);
            edit_guru($result[0]["id"]);
        }
        include dirname(__DIR__) . "/templates/guru/edit-guru.php";
    } else {
        include dirname(__DIR__) . "/templates/guru/guru.php";
    }
}

function tambah_guru()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "guru";
    include dirname(__DIR__) . "/templates/guru/tambah-guru.php";
}

function edit_guru($id)
{
    global $wpdb;
    $table_name = $wpdb->prefix . "guru";
    if (isset($_POST["submit"])) {
        $name = sanitize_text_field($_POST["name"]);
        $description = sanitize_text_field($_POST["description"]);
        $mapel = sanitize_text_field($_POST["mapel"]);
        $image_url = sanitize_text_field($_POST["image_url"]);

        $res = $wpdb->update(
            $table_name,
            [
                "name" => $name,
                "mapel" => $mapel,
                "description" => $description,
                "image_url" => $image_url,
            ],
            [
                // Where clause
                "id" => $id,
            ],
            ["%s", "%s", "%s", "%s"]
        );
        if ($res === false) {
            echo "Terjadi error saat melakukan operasi insert: " .
                $wpdb->last_error;
        } else {
            echo '<div class="notice notice-success is-dismissible"><p>' .
                __("Data berhasil diedit", "textdomain") .
                "</p></div>";
        }
        // echo '<div class="notice notice-success is-dismissible"><p>' . __('Data berhasil diupdate', 'textdomain') . '</p></div>';
    }
}

function guru_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "guru";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        mapel varchar(255) NOT NULL,
        description text NOT NULL,
        image_url varchar(255) DEFAULT '',
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once ABSPATH . "wp-admin/includes/upgrade.php";
    dbDelta($sql);
}

function register_guru_table()
{
    guru_table();
}

function unregister_guru_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "guru";

    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
}
