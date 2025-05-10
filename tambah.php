<!DOCTYPE html>
<html>
<head>
    <title>Menambah Data Koruptor</title>
</head>
<body>
    <h2>Tambah Data Koruptor</h2>
    <form action="simpan.php" method="post">
        <div>
            <label>NIK</label>
            <input type="text" name="nik" required />
        </div>
        <div>
            <label>NAMA</label>
            <input type="text" name="nama" required />
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" required />
        </div>
        <div>
            <label>Uang Korupsi</label>
            <input type="number" name="uang" required />
        </div>
        <button type="submit">SIMPAN</button>
    </form>
</body>
</html>
