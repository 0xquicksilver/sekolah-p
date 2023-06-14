<?php
// Insert default WordPress page

function insert_Fasilitas_page() {
    $page_title = 'Fasilitas';
    $page_content = '';
    $page_slug = 'fasilitas';
    $page_template = ''; // Optional, leave blank for default template

    $page_data = array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_name'     => $page_slug,
        'post_type'     => 'page',
        'post_status'   => 'publish',
        'page_template' => $page_template,
    );

    // Insert the page into the database
    $page_id = wp_insert_post($page_data);
}

function insert_Tentang_Sekolah_page() {
    $page_title = 'Tentang Sekolah';
    $page_content = '';
    $page_slug = 'tentang-sekolah';
    $page_template = ''; // Optional, leave blank for default template

    $page_data = array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_name'     => $page_slug,
        'post_type'     => 'page',
        'post_status'   => 'publish',
        'page_template' => $page_template,
    );

    // Insert the page into the database
    $page_id = wp_insert_post($page_data);
}
function insert_VisiMisi_page() {
    $page_title = 'Visi & Misi';
    $page_content = '';
    $page_slug = 'visi-misi';
    $page_template = ''; // Optional, leave blank for default template

    $page_data = array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_name'     => $page_slug,
        'post_type'     => 'page',
        'post_status'   => 'publish',
        'page_template' => $page_template,
    );

    // Insert the page into the database
    $page_id = wp_insert_post($page_data);
}

function insert_Pendaftaran_page() {
    $page_title = 'Pendaftaran';
    $page_content = '';
    $page_slug = 'pendaftaran';
    $page_template = 'registration.php'; // Optional, leave blank for default template

    $page_data = array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_name'     => $page_slug,
        'post_type'     => 'page',
        'post_status'   => 'publish',
        'page_template' => $page_template,
    );

    // Insert the page into the database
    $page_id = wp_insert_post($page_data);
}

function insert_Galeri_page() {
    $page_title = 'Galeri';
    $page_content = '';
    $page_slug = 'galeri';
    $page_template = 'galery.php'; // Optional, leave blank for default template

    $page_data = array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_name'     => $page_slug,
        'post_type'     => 'page',
        'post_status'   => 'publish',
        'page_template' => $page_template,
    );

    // Insert the page into the database
    $page_id = wp_insert_post($page_data);
}

function insert_Kontak_page() {
    $page_title = 'Kontak';
    $page_content = '';
    $page_slug = 'kontak';
    $page_template = 'contact.php'; // Optional, leave blank for default template

    $page_data = array(
        'post_title'    => $page_title,
        'post_content'  => $page_content,
        'post_name'     => $page_slug,
        'post_type'     => 'page',
        'post_status'   => 'publish',
        'page_template' => $page_template,
    );

    // Insert the page into the database
    $page_id = wp_insert_post($page_data);
}

function delete_fasilitas_page_on_deactivation() {
    $page_slug = 'fasilitas';

    $page = get_page_by_path($page_slug);

    if ($page) {
        $result = wp_delete_post($page->ID, true);
    }
}

function delete_tentang_sekolah_page_on_deactivation() {
    $page_slug = 'tentang-sekolah';

    $page = get_page_by_path($page_slug);

    if ($page) {
        $result = wp_delete_post($page->ID, true);
    }
}

function delete_visi_misi_page_on_deactivation() {
    $page_slug = 'visi-misi';

    $page = get_page_by_path($page_slug);

    if ($page) {
        $result = wp_delete_post($page->ID, true);
    }
}

function delete_Pendaftaran_page_on_deactivation() {
    $page_slug = 'pendaftaran';

    $page = get_page_by_path($page_slug);

    if ($page) {
        $result = wp_delete_post($page->ID, true);
    }
}

function delete_Galeri_page_on_deactivation() {
    $page_slug = 'galeri';

    $page = get_page_by_path($page_slug);

    if ($page) {
        $result = wp_delete_post($page->ID, true);
    }
}

function delete_Kontak_page_on_deactivation() {
    $page_slug = 'kontak';

    $page = get_page_by_path($page_slug);

    if ($page) {
        $result = wp_delete_post($page->ID, true);
    }
}


function register_page_table()
{
    insert_Fasilitas_page();
    insert_Tentang_Sekolah_page();
    insert_VisiMisi_page();
    insert_Galeri_page();
    insert_Kontak_page();
    insert_Pendaftaran_page();
}

// hapus tabel ke database setelah plugin di nonaktifkan
function unregister_page_table()
{
    delete_fasilitas_page_on_deactivation();
    delete_tentang_sekolah_page_on_deactivation();
    delete_visi_misi_page_on_deactivation();
    delete_Galeri_page_on_deactivation();
    delete_Kontak_page_on_deactivation();
    delete_Pendaftaran_page_on_deactivation();
}