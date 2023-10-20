<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/profile.css'); ?>">
</head>
<body>
    <center>
    <table>
        <tr>
            <td><img class="foto" src="<?= $user['foto'] ?? '<default-foto>' ?>" alt="Foto"></td>
        </tr>
        <tr>
            <td><p class="text"><?= $user['nama'] ?></p></td>
        </tr>
        <tr>
            <td><p class="text"><?= $user['npm'] ?></p></td>
        </tr>
        <tr>
            <td><p class="text"><?= $user['nama_kelas'] ?></p></td>
        </tr>
    </table>
    </center>
</body>
</html>
