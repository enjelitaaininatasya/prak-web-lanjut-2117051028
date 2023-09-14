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
            <td><img src="<?= base_url('assets/img/foto.jpg'); ?>"></td>
        </tr>
        <tr>
            <td><p class="text"><?= $nama ?></p></td>
        </tr>
        <tr>
            <td><p class="text"><?= $kelas ?></p></td>
        </tr>
        <tr>
            <td><p class="text"><?= $npm ?></p></td>
        </tr>
    </table>
    </center>
</body>
</html>
