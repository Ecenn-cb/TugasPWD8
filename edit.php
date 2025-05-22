<?php
require_once 'Database.php';

if (!isset($_GET['nik'])) {
    die("NIK tidak tersedia.");
}

$nik = $_GET['nik'];
$db = new Database();

$query = $db->prepare('SELECT * FROM koruptor WHERE nik = ?');
$query->bind_param('s', $nik);
$query->execute();
$result = $query->get_result();
$koruptor = $result->fetch_assoc();
?>

<html>
<head>
    <title>Edit Data Koruptor</title>
</head>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="nik" value="<?php echo htmlspecialchars($koruptor['nik']); ?>">
        <div>
            <label>NAMA</label>
            <input type="text" name="nama" value="<?php echo htmlspecialchars($koruptor['nama']); ?>">
        </div>
        <div>
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="<?php echo $koruptor['tanggal_lahir']; ?>">
        </div>
        <div>
            <label>Uang Korupsi</label>
            <input type="text" name="uang" value="<?php echo $koruptor['uang']; ?>">
        </div>
        <div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
