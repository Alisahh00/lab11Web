<?php
$title = 'Daftar Artikel';
$db = new Database();
$result = $db->query("SELECT * FROM artikel");
?>
<div class="main">
    <h3>Daftar Artikel</h3>
    <a href="artikel/tambah" class="btn btn-primary mb-3">Tambah Artikel</a>
    <table class="table">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $row['judul']; ?></td>
                <td><?= $row['tanggal']; ?></td>
                <td>
                    <a href="artikel/ubah?id=<?= $row['id']; ?>">Ubah</a> | 
                    <a href="artikel/hapus?id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>