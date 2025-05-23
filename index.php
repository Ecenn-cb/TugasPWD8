<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koruptor</title>
    <style>
        .judul {
            text-align: center;
        }

        .tabeltabel {
            margin: auto;
            border-collapse: collapse;
        }

        .container {
            border: 1px solid black;
            width: fit-content;
            margin: 20px auto;
            padding: 10px;
        }

        .tambah-link {
            display: block;
            margin: 10px auto;
            text-align: center;
        }

        .aksi a {
            margin-right: 5px;
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="judul">Data Koruptor-Koruptor</h1>
        <table class="tabeltabel" border="1">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>Tanggal Lahir</th>
                    <th>Uang Korupsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "Koruptor.php";
                $mhs = new Koruptor();
                $datas = $mhs->getDataKoruptor();

                if ($datas->num_rows > 0) {
                    while ($data = $datas->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($data['nik']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($data['tanggal_lahir']) . "</td>";
                        echo "<td>Rp " . number_format((int)$data['uang'], 0, ',', '.') . "</td>";
                        echo "<td class='aksi'>
                                <a href='hapus.php?nik=" . urlencode($data['nik']) . "' onclick=\"return confirm('Yakin ingin hapus data ini?')\">Hapus</a> |
                                <a href='edit.php?nik=" . urlencode($data['nik']) . "'>Edit</a>
                            </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' style='text-align:center;'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="tambah-link">
            <a href="tambah.php">Tambah Data Koruptor</a>
        </div>
    </div>
</body>
</html>
