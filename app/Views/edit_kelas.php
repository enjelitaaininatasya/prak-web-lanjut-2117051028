<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
    <h1 style="margin-top:30px;">Form Edit Kelas</h1>

    <form action="<?= base_url('/kelas/' . $kelas['id']) ?>" method="POST" style="margin-top:50px;" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="inputPassword" name="nama_kelas" value="<?= $kelas['nama_kelas'] ?>">
                <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama_kelas'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <input type="submit" class="btn btn-success">
    </form>
<?= $this->endSection()?>