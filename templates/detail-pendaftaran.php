<?php

global $wpdb;
$table_name = $wpdb->prefix . "pendaftaran"; // ganti dengan nama tabel yang diinginkan
$query = "SELECT * FROM $table_name";
$results = $wpdb->get_results($query, ARRAY_A);
if (
    isset($_GET["action"]) &&
    $_GET["action"] === "view" &&
    isset($_GET["id"])
) {
    $id = $_GET["id"];
    $post = $wpdb->get_row("SELECT * FROM $table_name WHERE id = $id");
    if ($post) {
        echo '<div class="wrap">';
        echo "<h1>Detail Siswa Baru</h1>";
        echo '<table class="wp-list-table widefat fixed striped">';
        echo "<tbody>";
        // siswa
        echo "<tr>";
        echo "<td>Nama Lengkap Siswa</td>";
        echo "<td>" . $post->nama_lengkap_siswa . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Panggilan</td>";
        echo "<td>" . $post->nama_panggilan_siswa . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nomor Induk Asal</td>";
        echo "<td>" . $post->nomor_induk_asal . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nomor Induk Siswa Nasional</td>";
        echo "<td>" . $post->nisn . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Jenis Kelamin</td>";
        echo "<td>" . $post->jenis_kelamin . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Agama</td>";
        echo "<td>" . $post->agama . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Tempat Tanggal Lahir</td>";
        echo "<td>" . $post->tempat_tanggal_lahir . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Anak Ke</td>";
        echo "<td>" . $post->anak_ke . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Alamat Siswa</td>";
        echo "<td>" . $post->alamat_siswa . "</td>";
        echo "</tr>";

        // tk asal
        echo "<tr>";
        echo "<td>Ra/Tk Asal Nama Sekolah</td>";
        echo "<td>" . $post->ra_tk_asal_nama_sekolah . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Ra/Tk Asal Alamat Sekolah</td>";
        echo "<td>" . $post->ra_tk_asal_alamat_sekolah . "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</div>";

        echo '<div class="wrap">';
        echo '<table class="wp-list-table widefat fixed striped">';
        echo "<tbody>";
        // nama ortu kandung
        echo "<tr>";
        echo "<td>Nama Lengkap Ayah Kandung</td>";
        echo "<td>" . $post->nama_lengkap_ayah_kandung . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Lengkap Ibu Kandung</td>";
        echo "<td>" . $post->nama_lengkap_ibu_kandung . "</td>";
        echo "</tr>";
        // alamat ortu kandung
        echo "<tr>";
        echo "<td>Alamat Lengkap Ayah Kandung</td>";
        echo "<td>" . $post->alamat_ayah_kandung . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Alamat Lengkap Ibu Kandung</td>";
        echo "<td>" . $post->alamat_ibu_kandung . "</td>";
        echo "</tr>";
        // pekerjaan ortu kandung
        echo "<tr>";
        echo "<td>Pekerjaan Ayah Kandung</td>";
        echo "<td>" . $post->pekerjaan_ayah_kandung . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Pekerjaan Ibu Kandung</td>";
        echo "<td>" . $post->pekerjaan_ibu_kandung . "</td>";
        echo "</tr>";
        // Pendidikan ortu kandung
        echo "<tr>";
        echo "<td>Pendidikan Ayah Kandung</td>";
        echo "<td>" . $post->pendidikan_ayah_kandung . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Pendidikan Ibu Kandung</td>";
        echo "<td>" . $post->pendidikan_ibu_kandung . "</td>";
        echo "</tr>";
        // Penghasilan ortu kandung
        echo "<tr>";
        echo "<td>Penghasilan Ayah Kandung</td>";
        echo "<td>" . $post->penghasilan_ayah_kandung . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Penghasilan Ibu Kandung</td>";
        echo "<td>" . $post->penghasilan_ibu_kandung . "</td>";
        echo "</tr>";
        // telepon ortu Kandung
        echo "<tr>";
        echo "<td>Telepon Orang Tua kandung</td>";
        echo "<td>" . $post->telp_kandung . "</td>";
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo '<div class="wrap">';
        echo '<table class="wp-list-table widefat fixed striped">';
        echo "<tbody>";
        // nama ortu Wali
        echo "<tr>";
        echo "<td>Nama Lengkap Ayah Wali</td>";
        echo "<td>" . $post->nama_lengkap_ayah_wali . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Nama Lengkap Ibu Wali</td>";
        echo "<td>" . $post->nama_lengkap_ibu_wali . "</td>";
        echo "</tr>";
        // alamat ortu Wali
        echo "<tr>";
        echo "<td>Alamat Lengkap Ayah Wali</td>";
        echo "<td>" . $post->alamat_ayah_wali . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Alamat Lengkap Ibu Wali</td>";
        echo "<td>" . $post->alamat_ibu_wali . "</td>";
        echo "</tr>";
        // pekerjaan ortu Wali
        echo "<tr>";
        echo "<td>Pekerjaan Ayah Wali</td>";
        echo "<td>" . $post->pekerjaan_ayah_wali . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Pekerjaan Ibu Wali</td>";
        echo "<td>" . $post->pekerjaan_ibu_wali . "</td>";
        echo "</tr>";
        // Pendidikan ortu Wali
        echo "<tr>";
        echo "<td>Pendidikan Ayah Wali</td>";
        echo "<td>" . $post->pendidikan_ayah_wali . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Pendidikan Ibu Wali</td>";
        echo "<td>" . $post->pendidikan_ibu_wali . "</td>";
        echo "</tr>";
        // Penghasilan ortu Wali
        echo "<tr>";
        echo "<td>Penghasilan Ayah Wali</td>";
        echo "<td>" . $post->penghasilan_ayah_wali . "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>Penghasilan Ibu Wali</td>";
        echo "<td>" . $post->penghasilan_ibu_wali . "</td>";
        echo "</tr>";
        // telepon ortu Wali
        echo "<tr>";
        echo "<td>Telepon Orang Tua Wali</td>";
        echo "<td>" . $post->telp_wali . "</td>";
        echo "</tr>";

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "a";
    }
}
