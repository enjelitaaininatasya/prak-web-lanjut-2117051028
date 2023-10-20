<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url('/user') ?>" style="margin-left : 100px; font-size : 20px;">User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('/kelas') ?>" style="margin-left : 100px; font-size : 20px;">Kelas</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<center><a href="<?= base_url('/kelas/create') ?>"><Button class="btn btn-primary" style="margin-top : 20px; margin-left : 20px; margin-bottom : 30px;">Tambah Data</Button></a></center>
    <table class="table">
        <thead class="table-danger">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            $no = 1;
            foreach ($kelass as $kelas){
            ?>
            <tr  class="table-info">
                <td><?= $no++ ?></td>
                <td><?= $kelas['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('/kelas/' . $kelas['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                    <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="post" style="margin-top : 5px;">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button tupe="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
<?= $this->endSection()?>