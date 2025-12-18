<?php
$db = new Database();
$id = $_GET['id'];

// Logika hapus data
if ($db->query("DELETE FROM artikel WHERE id=$id")) {
    header("Location: ../artikel");
    exit();
} else {
    echo "Gagal menghapus data.";
}
?>