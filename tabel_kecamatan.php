<html>
<head>
    <title>Daftar Kecamatan di Kabupaten Sleman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        table {
            border-collapse: separate;
            border: 3px double black; /* garis luar ganda */
            margin: auto;
            width: 40%;
        }
        th, td {
            border: 1px solid black; /* garis dalam tunggal */
            padding: 6px;
        }
        th {
            background-color: #f2f2f2;
        }
        td:first-child, th:first-child {
            text-align: center;
            width: 50px;
        }
    </style>
</head>
<body>
    <h3>Daftar Kecamatan di Kabupaten Sleman</h3>

    <?php
    // Array daftar nama kecamatan di Kabupaten Sleman
    $kecamatan = array(
        "Gamping",
        "Godean",
        "Moyudan",
        "Minggir",
        "Seyegan",
        "Mlati",
        "Depok",
        "Berbah",
        "Prambanan",
        "Kalasan",
        "Ngemplak",
        "Ngaglik",
        "Sleman",
        "Tempel",
        "Turi",
        "Pakem",
        "Cangkringan"
    );

    // Menampilkan tabel
    echo "<table>";
    echo "<tr><th>Nomor</th><th>Kecamatan</th></tr>";

    $no = 1;
    foreach ($kecamatan as $nama) {
        echo "<tr>";
        echo "<td>$no</td>";
        echo "<td>$nama</td>";
        echo "</tr>";
        $no++;
    }

    echo "</table>";
    ?>
</body>
</html>