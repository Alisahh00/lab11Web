<?php
// module/artikel/tambah.php
$db = new Database();

// 1. Logika simpan: Gunakan $_POST saja agar lebih fleksibel 
// atau pastikan name-nya sesuai dengan tombol di class Form
if ($_POST) {
    $data = [
        'judul' => $_POST['judul'],
        'isi' => $_POST['isi'],
        'tanggal' => date("Y-m-d H:i:s") 
    ];

    $simpan = $db->insert('artikel', $data);

    if ($simpan) {
        // Gunakan path lengkap agar tidak error saat pindah halaman
        header("Location: /lab11_php_oop/index.php/artikel");
        exit();
    } else {
        echo "<div class='alert alert-danger'>Gagal menyimpan ke database!</div>";
    }
}

// 2. Form Builder
// Gunakan kata "submit" agar sinkron dengan pengecekan di atas jika perlu
$form = new Form("", "submit"); 
$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel", "textarea");
?>

<div class="main">
    <h3>Tambah Artikel Baru</h3>
    <hr>
    <?php $form->displayForm(); ?>
</div>