<?php
/**
 * WP List Table Example admin page view
 *
 * @package   WPListTableExample
 * @author    Matt van Andel
 * @copyright 2016 Matthew van Andel
 * @license   GPL-2.0+
 */
?>
<h1 class="title">
    Edit Data Guru
</h1>
    <div class="wrap action-hidden" id="page-guru">
        <form method="post" enctype="multipart/form-data">
            <table class="form-table">
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" name="name" id="name" value="<?php echo $result[0][
                        "name"
                    ]; ?>" class="regular-text"></td>
                </tr>
                <th><label for="mapel">Mengajar</label></th>
                <td><input type="text" name="mapel" id="mapel" value="<?php echo $result[0][
                    "mapel"
                ]; ?>"  class="regular-text"></td>
                </tr>
                <tr>
                    <th><label for="description">Deskripsi</label></th>
                    <td><textarea name="description" id="description" class="regular-text"><?php echo $result[0][
                        "description"
                    ]; ?></textarea></td>
                </tr>
                <tr>
                    <th><label for="image">Profil:</label></th>
                    <td>
                        <input type="text" name="image_url" id="image" class="regular-text" value="<?php echo $result[0][
                            "image_url"
                        ]; ?>">
                        <input type="button" name="profile_image_button" id="profile_image_button" class="button" value="Pilih Gambar">
                    </td>
                </tr>
            </table>
            <div style="margin-top:20px;margin-bottom:10px;border-radius:5px;" class="actions bulkactions">
                <input type="submit" name="submit" id="submit" class="button button-primary" value="Edit Data">
                <a class="button button-danger" href="<?php echo admin_url(
                    "admin.php?page=guru-page"
                ); ?>">close</a>
            </div>
        </form>
    </div>
<script>
    jQuery(document).ready(function($){
      $('#profile_image_button').click(function(){
        var custom_uploader = wp.media({
          title: 'Pilih Gambar',
          button: {
            text: 'Pilih'
          },
          multiple: false
        });
        custom_uploader.on('select', function(){
          var attachment = custom_uploader.state().get('selection').first().toJSON();
          $('#image').val(attachment.url);
        });
        custom_uploader.open();
      });
    });
</script>