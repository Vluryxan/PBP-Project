<!DOCTYPE html>
<html>
<head>
    <title>Daftar Sayuran</title>
</head>
<body>
<h1>Welcome to <?php echo $Daftar; ?></h1>
    <h1>Daftar Sayuran</h1>
    <?php
    $url = base_url() . $Daftar . '/some-page';
    echo $url;
    ?>
    <a href="<?= site_url('sayuran/tambah') ?>">Tambah Sayuran</a>

    <table>
        <tr>
            <th>Nama Sayuran</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php foreach ($sayuran as $row) : ?>
            <tr>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['harga'] ?></td>
                <td><?= $row['stok'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
