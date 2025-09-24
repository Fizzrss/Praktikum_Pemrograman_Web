<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styleArray.css">
</head>
<body>
    <?php
        $Dosen = [
            'nama' => 'Fiza Rahmatus Sholikha',
            'domisili' => 'Lamongan',
            'jenis_kelamin' => 'Perempuan'
        ];
    ?>
    
    <table>
        <caption>Data Dosen</caption>
        <tr>
            <th>Nama</th>
            <td><?php echo $Dosen['nama']; ?></td>
        </tr>
        <tr>
            <th>Domisili</th>
            <td><?php echo $Dosen['domisili']; ?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?php echo $Dosen['jenis_kelamin']; ?></td>
        </tr>
    </table>
</body>
</html>
