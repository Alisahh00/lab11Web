<?php
$db = new Database();
// Pastikan ID ditangkap dengan aman
$id = isset($_GET['id']) ? $_GET['id'] : null;

if (!$id) {
    header("Location: /lab11_php_oop/index.php/artikel");
    exit();
}

// Logika update data
if (isset($_POST['submit'])) {
    $data = [
        'judul' => $_POST['judul'],
        'isi' => $_POST['isi']
    ];
    
    // Gunakan kutipan pada ID untuk keamanan SQL
    $db->update('artikel', $data, "id='{$id}'");
    
    // PERBAIKAN: Gunakan path absolut agar tidak error saat redirect
    header("Location: /lab11_php_oop/index.php/artikel");
    exit();
}

// Ambil data lama berdasarkan ID
$result = $db->query("SELECT * FROM artikel WHERE id='{$id}'");
$data = $result->fetch_assoc();

// Jika data tidak ditemukan
if (!$data) {
    echo "Data tidak ditemukan!";
    return;
}

// PERBAIKAN: Form builder biasanya butuh input value yang benar
$form = new Form("", "submit"); // Gunakan "submit" agar sinkron dengan isset($_POST['submit'])
$form->addField("judul", "Judul Artikel", "text", $data['judul']);
$form->addField("isi", "Isi Artikel", "textarea", $data['isi']);
?>

<div class="main">
    <h2>Ubah Artikel</h2>
    <hr>
    <?php $form->displayForm(); ?>
</div>