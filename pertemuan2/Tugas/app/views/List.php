<!DOCTYPE html>
<html>
<head><title>Daftar User</title></head>
<body>
<h2>Daftar User</h2>

<a href="?action=tambah">Tambah User</a>
<table border="1" cellpadding="6">
<tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>

<?php foreach ($users as $user): ?>
<tr>
    <td><?= $user['id'] ?></td>
    <td><?= $user['name'] ?></td>
    <td><?= $user['email'] ?></td>
    <td>
        <a href="?action=detail&id=<?= $user['id'] ?>">Lihat</a> | 
        <a href="?action=hapus&id=<?= $user['id'] ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
