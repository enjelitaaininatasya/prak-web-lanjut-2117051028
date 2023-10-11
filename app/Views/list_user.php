<?=$this->extend('layouts/app')?>

<?=$this->section('content')?>
<a href="<?= base_url('/user/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NPM</th>
            <th scope="col">Kelas</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
    <?php
    $no=1;
    foreach ($users as $user){
    ?>
        <tr>
            <td><?=$no++?></td>
            <td><?=$user['nama'] ?></td>
            <td><?=$user['npm'] ?></td>
            <td><?=$user['nama_kelas'] ?></td>
            <td>
                <a href="<?= base_url('user/' . $user['id']) ?>" class="btn btn-primary">Detail</a>
                <a href="" class="btn btn-warning">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?=$this->endSection()?>