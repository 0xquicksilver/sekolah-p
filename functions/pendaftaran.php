<?php

function pendaftaran_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "pendaftaran";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "CREATE TABLE $table_name (
        id int(11) NOT NULL AUTO_INCREMENT,
        status_anak_dalam_keluarga varchar(50) DEFAULT NULL,
        nama_lengkap_siswa varchar(50) DEFAULT NULL,
        nama_panggilan_siswa varchar(50) DEFAULT NULL,
        nomor_induk_asal varchar(50) DEFAULT NULL,
        nisn varchar(50) DEFAULT NULL,
        jenis_kelamin varchar(20) DEFAULT NULL,
        agama varchar(20) DEFAULT NULL,
        tempat_tanggal_lahir varchar(50) DEFAULT NULL,
        anak_ke int(11) DEFAULT NULL,
        alamat_siswa varchar(255) DEFAULT NULL,
        ra_tk_asal_nama_sekolah varchar(100) DEFAULT NULL,
        ra_tk_asal_alamat_sekolah varchar(255) DEFAULT NULL,
        nama_lengkap_ayah_kandung varchar(50) DEFAULT NULL,
        nama_lengkap_ibu_kandung varchar(50) DEFAULT NULL,
        alamat_ayah_kandung varchar(255) DEFAULT NULL,
        alamat_ibu_kandung varchar(255) DEFAULT NULL,
        pekerjaan_ayah_kandung varchar(50) DEFAULT NULL,
        pekerjaan_ibu_kandung varchar(50) DEFAULT NULL,
        pendidikan_ayah_kandung varchar(50) DEFAULT NULL,
        pendidikan_ibu_kandung varchar(50) DEFAULT NULL,
        penghasilan_ayah_kandung varchar(50) DEFAULT NULL,
        penghasilan_ibu_kandung varchar(50) DEFAULT NULL,
        telp_kandung varchar(20) DEFAULT NULL,
        nama_lengkap_ayah_wali varchar(50) DEFAULT NULL,
        nama_lengkap_ibu_wali varchar(50) DEFAULT NULL,
        alamat_ayah_wali varchar(255) DEFAULT NULL,
        alamat_ibu_wali varchar(255) DEFAULT NULL,
        pekerjaan_ayah_wali varchar(50) DEFAULT NULL,
        pekerjaan_ibu_wali varchar(50) DEFAULT NULL,
        pendidikan_ayah_wali varchar(50) DEFAULT NULL,
        pendidikan_ibu_wali varchar(50) DEFAULT NULL,
        penghasilan_ayah_wali varchar(50) DEFAULT NULL,
        penghasilan_ibu_wali varchar(50) DEFAULT NULL,
        telp_wali varchar(20) DEFAULT NULL,
        created_at timestamp NOT NULL DEFAULT current_timestamp(),
        updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once ABSPATH . "wp-admin/includes/upgrade.php";
    dbDelta($sql);
}

function register_pendaftaran_table()
{
    pendaftaran_table();
}

function unregister_pendaftaran_table()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "pendaftaran";

    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
}

function pendaftaran_page()
{
    $pendaftaran_list = new Pendaftaran_List_Table();
    $pendaftaran_list->prepare_items();
    // var_dump($pendaftaran_list->current_action());
    if ("view" === $pendaftaran_list->current_action()) {
        // wp_die( 'Items view (or they would be if we had items to delete)!' );
        include dirname(__DIR__) . "/templates/detail-pendaftaran.php";
    } else {
        include dirname(__DIR__) . "/templates/pendaftaran.php";
    }
}
