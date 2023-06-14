<?php
// Insert default WordPress page

function insert_Fasilitas_page() {
    $page_title = 'Fasilitas';
    $page_content = '<!-- wp:paragraph --><p>Fasilitas belajar adalah salah satu hal yang penting dalam menunjang kegiatan pembelajaran di sekolah. Fasilitas belajar meliputi berbagai macam sarana dan prasarana yang diperlukan untuk mendukung proses belajar mengajar. Dalam sebuah sekolah, fasilitas belajar haruslah memadai dan lengkap agar proses pembelajaran dapat berjalan dengan efektif dan efisien.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Beberapa fasilitas belajar yang perlu ada di sebuah sekolah antara lain ruang kelas yang nyaman dan dilengkapi dengan fasilitas belajar seperti whiteboard, proyektor, dan sound system. Selain itu, perpustakaan yang lengkap dan nyaman juga perlu ada sebagai sarana untuk mendukung kegiatan belajar siswa. Fasilitas laboratorium juga menjadi penting dalam mendukung pembelajaran di bidang sains, seperti laboratorium fisika, kimia, dan biologi.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Selain itu, fasilitas olahraga seperti lapangan bola, lapangan basket, dan lapangan voli juga penting dalam menunjang kegiatan pembelajaran siswa. Fasilitas komputer dan internet juga perlu ada untuk mendukung pembelajaran di era digital saat ini. Terakhir, kebersihan lingkungan sekolah juga menjadi faktor penting dalam menunjang kegiatan belajar mengajar.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Dengan fasilitas belajar yang memadai dan lengkap, diharapkan siswa dapat belajar dengan nyaman dan lebih mudah dalam mencapai tujuan pembelajaran. Selain itu, fasilitas belajar juga dapat menjadi daya tarik bagi calon siswa yang ingin bergabung dengan sekolah.</p><!-- /wp:paragraph --><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">Sarana Prasarana Fasilitas Belajar yang dimiliki UPT SD NEGERI 060931:</h3><!-- /wp:heading --><!-- wp:list {"ordered":true} --><ol><!-- wp:list-item --><li>Ruang kelas</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Laboratorium</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Perpustakaan</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Praktik</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Pimpinan</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Ibadah</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Guru</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang UKS</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Toilet</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Gudang</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Sirkulasi</li><!-- /wp:list-item --><!-- wp:list-item --><li>Tempat Bermain &amp; Olahraga</li><!-- /wp:list-item --><!-- wp:list-item --><li>Koperasi siswa dan sekolah</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Konseling</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang OSIS</li><!-- /wp:list-item --><!-- wp:list-item --><li>Ruang Bangunan</li><!-- /wp:list-item --><!-- wp:list-item --><li>Instalasi air, Listrik</li><!-- /wp:list-item --></ol><!-- /wp:list -->';
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
    $page_content = '<!-- wp:paragraph --><p><strong>Pengertian</strong> sekolah secara umum adalah lembaga pendidikan yang menyelenggarakan kegiatan belajar dan mengajar sesuai dengan tingkatan, jurusan dan sebagainya, yang memiliki unsur pendukung seperti sarana dan prasarana serta sesuai aturan yang berlaku. Sekolah dirancang sebagai tempat pengajaran kepada siswa dengan bimbingan guru menggunakan sistem pendidikan formal yang telah ditentukan.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Secara etimologi, istilah sekolah dalam bahasa Indonesia berasal dari bahasa latin, yaitu schola yang secara harfiah bermakna “waktu lapang” atau “waktu senggang”. Bahasa Inggris mengadopsi schola menjadi school.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Sejarah asal-usul sekolah dan istilahnya dimulai pada zaman Yunani Kuno. Dahulu, orang lelaki Yunani dalam mengisi waktu luang mereka dengan cara mengunjungi sesuatu tempat atau seseorang yang bijaksana untuk bertanya atau mempelajari hal-hal maupun perkara yang mereka rasa perlu diketahui. Mereka menyebut kegiatan itu dengan istilah scola, skhole, scolae atau schola. Keempat-empatnya memiliki arti yang sama, yaitu “waktu luang yang digunakan secara khusus untuk belajar.”</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lama-kelamaan, kebiasaan mengisi waktu luang untuk mempelajari sesuatu itu akhimya tidak lagi semata-mata menjadi kebiasaan dalam lelaki di masyarakat Yunani Kuno. Kebiasaan itu akhirnya diikuti oleh kaum perempuan dan anak-anak.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Disebabkan desakan perkembangan kehidupan yang kian beragam dan mengambil waktu orang tua, maka si ayah dan si ibu merasa tidak punya waktu lagi untuk mengajarkan banyak hal kepada anak-anak mereka. Oleh karena itu, mereka kemudian mengisi waktu luang kepada anak-anak mereka dengan cara menyerahkannya kepada seseorang yang dianggap bijaksana di suatu tempat tertentu.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Di tempat itulah, anak-anak boleh bermain, belajar atau berlatih melakukan sesuatu apa saja yang mereka anggap patut dipelajari dan sampai saatnya kelak mereka harus kembali ke rumah menjalankan kehidupan orang dewasa sebagaimana lazimnya.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Sejak itulah, terjadi pengalihan sebagian dari fungsi scola matterna (pengasuhan itu sampai usia tertentu), yang merupakan proses dan lembaga sosialisasi tertua umat manusia, menjadi scola in loco parentis (lembaga pengasuhan anak-anak pada waktu senggang di luar rumah sebagai pengganti ayah dan ibu).</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Akhirnya, lembaga pengasuhan atau pendidikan sebagai tempat pengasuhan dan pembelajaran anak-anak pada waktu senggang di luar rumah sebagai pengganti orang tua disebut almamater (alma mater) yang memiliki makan “ibu yang mengasuh” atau “ibu yang memberikan ilmu”.</p><!-- /wp:paragraph -->';
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
    $page_content = '<!-- wp:paragraph --><p><strong>Visi misi</strong> sekolah adalah pernyataan yang menggambarkan tujuan utama dan arah yang diinginkan oleh sebuah sekolah dalam melaksanakan tugas dan fungsinya sebagai lembaga pendidikan. Berikut adalah contoh visi misi sekolah:</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><strong>Visi</strong>: "Menjadi sekolah yang unggul dalam bidang pendidikan dan memberikan kontribusi nyata bagi kemajuan bangsa."</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><strong>Misi</strong>:</p><!-- /wp:paragraph --><!-- wp:list {"ordered":true} --><ol><!-- wp:list-item --><li>Meningkatkan kualitas pendidikan dengan mengembangkan kurikulum yang berorientasi pada hasil belajar yang berkualitas.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Menyediakan lingkungan belajar yang kondusif dan mendukung proses pembelajaran yang efektif.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Mengembangkan keterampilan siswa dalam berbagai bidang, seperti seni, olahraga, dan sains.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Meningkatkan kualitas staf pengajar dengan memberikan pelatihan dan pengembangan profesional yang terus-menerus.</li><!-- /wp:list-item --><!-- wp:list-item --><li>Mendorong partisipasi aktif orangtua dan masyarakat dalam pendidikan dan pengembangan siswa.</li><!-- /wp:list-item --></ol><!-- /wp:list -->';
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