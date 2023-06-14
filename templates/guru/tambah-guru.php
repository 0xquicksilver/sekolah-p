<?php
if (isset($_POST["submit"])) {
    $name = sanitize_text_field($_POST["name"]);
    $description = sanitize_text_field($_POST["description"]);
    $mapel = sanitize_text_field($_POST["mapel"]);
    $image_url = sanitize_text_field($_POST["image_url"]);
    $result = $wpdb->insert(
        $table_name,
        [
            "name" => $name,
            "mapel" => $mapel,
            "description" => $description,
            "image_url" => $image_url,
        ],
        ["%s", "%s", "%s", "%s"]
    );
    if ($result === false) {
        echo "Terjadi error saat melakukan operasi delete: " .
            $wpdb->last_error;
    } else {
        echo '<div class="notice notice-success is-dismissible"><p>' .
            __("Data berhasil dihapus", "textdomain") .
            "</p></div>";
    }
} ?>

<h1 class="title">
    Tambah Data Guru
</h1>


<div class="wrap action-hidden" id="page-guru">
    <form method="post" enctype="multipart/form-data">
        <table class="form-table">
            <tr>
                <th><label for="name">Name</label></th>
                <td><input type="text" name="name" id="name" class="regular-text"></td>
            </tr>
            <th><label for="mapel">Mengajar</label></th>
            <td><input type="text" name="mapel" id="mapel" class="regular-text"></td>
            </tr>
            <tr>
                <th><label for="description">Deskripsi</label></th>
                <td><textarea name="description" id="description" class="regular-text"></textarea></td>
            </tr>
            <tr>
                <th><label for="image">Profil:</label></th>
                <td>
                    <input type="text" name="image_url" id="image" class="regular-text">
                    <input type="button" name="profile_image_button" id="profile_image_button" class="button"
                        value="Pilih Gambar">
                </td>
            </tr>
        </table>
        <p>rekomendasi ukuran gambar 1:1</p>
        <div style="margin-top:20px;margin-bottom:10px;border-radius:5px;" class="actions bulkactions">
            <input type="submit" name="submit" id="submit" class="button button-primary" value="Add Data">
            <a class="button button-danger" href="<?php echo admin_url(
                "admin.php?page=guru-page"
            ); ?>">close</a>
        </div>
    </form>
</div>


<script>
    jQuery(document).ready(function ($) {
        $('#profile_image_button').click(function () {
            var custom_uploader = wp.media({
                title: 'Pilih Gambar',
                button: {
                    text: 'Pilih'
                },
                multiple: false
            });
            custom_uploader.on('select', function () {
                var attachment = custom_uploader.state().get('selection').first().toJSON();
                $('#image').val(attachment.url);
            });
            custom_uploader.open();
        });
    }); 
</script>