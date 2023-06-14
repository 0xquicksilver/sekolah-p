<?php

function sekolah_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "sekolah"; // ganti dengan nama tabel yang diinginkan
    $query = "SELECT * FROM $table_name";
    $results = $wpdb->get_results($query, ARRAY_A);
    include dirname(__DIR__) . "/templates/home.php";
}

// tabel sekolah
function sekolah_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "sekolah";
    $sql = "CREATE TABLE $table_name (
      id mediumint(9) NOT NULL AUTO_INCREMENT,
      telepon_sekolah VARCHAR(50) NOT NULL,
      email_sekolah VARCHAR(50) NOT NULL,
      alamat_sekolah VARCHAR(225) NOT NULL,
      pendaftaran BIT(1) DEFAULT 1,
      PRIMARY KEY (id)
    );";

    require_once ABSPATH . "wp-admin/includes/upgrade.php";
    dbDelta($sql);
}

// Insert example data into the sekolah table
function insert_sekolah_data()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "sekolah";

    $data = array(
        'telepon_sekolah' => '081234567890',
        'email_sekolah' => 'info@sekolah.com',
        'alamat_sekolah' => 'Jl. Raya Sekolah No. 123',
        'pendaftaran' => 1,
    );

    $wpdb->insert($table_name, $data);
}

// tambah tabel ke database setelah plugin di aktifkan
function register_sekolah_table()
{
    sekolah_table();
    insert_sekolah_data();
}

// hapus tabel ke database setelah plugin di nonaktifkan
function unregister_sekolah_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "sekolah";
    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
}
