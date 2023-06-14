<?php
/**
 * WP List Table Example admin page view
 *
 * @package   WPListTableExample
 * @author    Matt van Andel
 * @copyright 2016 Matthew van Andel
 * @license   GPL-2.0+
 */

if (count($results) > 0) {
    $result = $results[0];
} else {
    $result = [
        "id" => "null",
        "telepon_sekolah" => "",
        "email_sekolah" => "",
        "alamat_sekolah" => "",
        "pendaftaran" => 1,
    ];
}

// Check if the form is submitted
if (isset($_POST["submit"])) {
    // Replace 'custom_table' with your table name
    // Retrieve data from the form
    // var_dump($_POST);
    $id = sanitize_text_field($_POST["id"]);
    $telepon_sekolah = sanitize_text_field($_POST["telepon_sekolah"]);
    $email_sekolah = sanitize_email($_POST["email_sekolah"]);
    $alamat_sekolah = sanitize_text_field($_POST["alamat_sekolah"]);

    if (empty($_POST["pendaftaran"])) {
        $pendaftaran = 0;
    } else {
        $pendaftaran = sanitize_text_field($_POST["pendaftaran"]);
    }

    if ($result["id"] !== "null") {
        // Update the data in the database
        $res = $wpdb->update(
            $table_name, // Table name
            [
                // Data to update
                "telepon_sekolah" => $telepon_sekolah,
                "email_sekolah" => $email_sekolah,
                "alamat_sekolah" => $alamat_sekolah,
                "pendaftaran" => $pendaftaran,
            ],
            [
                // Where clause
                "id" => $id,
            ],
            [
                // Data type for data to update
                "%s",
                "%s",
                "%s",
                "%s",
            ]
        );
        if ($res === false) {
            echo "Terjadi error saat melakukan operasi insert: " .
                $wpdb->last_error;
        } else {
            echo '<div class="notice notice-success is-dismissible"><p>' .
                __("Data berhasil diedit", "textdomain") .
                "</p></div>";
        }
    } else {
        $res = $wpdb->insert(
            $table_name, // Table name
            [
                // Data to update
                "telepon_sekolah" => $telepon_sekolah,
                "email_sekolah" => $email_sekolah,
                "alamat_sekolah" => $alamat_sekolah,
                "pendaftaran" => $pendaftaran,
            ]
        );
        if ($res === false) {
            echo "Terjadi error saat melakukan operasi insert: " .
                $wpdb->last_error;
        } else {
            echo '<div class="notice notice-success is-dismissible"><p>' .
                __("Data berhasil diedit", "textdomain") .
                "</p></div>";
        }
    }
}

// Display form to add data
?>


<h1 class="title">
    <?php echo esc_html(get_admin_page_title()); ?>
</h1>

<div class="">
    <style>
        .action-view {
            display: block;
        }

        .action-hidden {
            display: none;
        }
    </style>

    <div class="wrap action-view">
        <form method="post" enctype="multipart/form-data">
            <input type="number" name="id" id="id" value="<?php if (
                $result["id"] !== "null"
            ) {
                echo $result["id"];
            } ?>"
                hidden>
            <table class="form-table">
                <tr>
                    <th><label for="telepon_sekolah">Telepon Sekolah</label></th>
                    <td><input type="text" name="telepon_sekolah" id="telepon_sekolah" class="regular-text"
                            value="<?php echo $result[
                                "telepon_sekolah"
                            ]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="email_sekolah">Email Sekolah</label></th>
                    <td><input type="text" name="email_sekolah" id="email_sekolah" class="regular-text"
                            value="<?php echo $result[
                                "email_sekolah"
                            ]; ?>"></td>
                </tr>
                <tr>
                    <th><label for="alamat_sekolah">Alamat Sekolah</label></th>
                    <td><input type="text" name="alamat_sekolah" id="alamat_sekolah" class="regular-text"
                            value="<?php echo $result[
                                "alamat_sekolah"
                            ]; ?>"></input></td>
                </tr>
                <tr>
                    <th><label for="pendaftaran">Buka Pendaftaran</label></th>
                    <td><input type="checkbox" name="pendaftaran" id="pendaftaran" class="regular-text"
                            value="<?php echo $result[
                                "pendaftaran"
                            ]; ?>" <?php if ($result["pendaftaran"] == 1) {
    echo "checked";
} ?>></td>
                </tr>
            </table>
            <div style="margin-top:20px;margin-bottom:10px;border-radius:5px;" class="actions bulkactions">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Simpan Perubahan">
            </div>
        </form>
    </div>

</div>