<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sayuran</title>
</head>
<body>
    <h1>Tambah Sayuran</h1>

    <form action="<?= site_url('sayuran/simpan') ?>" method="post">
        <
        <label for="nama">Nama Sayuran:</label>
        <input type="text" name="nama" id="nama">

        <label for="harga">Harga:</label>
        <input type="text" name="harga" id="harga">

        <label for="stok">Stok:</label>
        <input type="text" name="stok" id="stok">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
