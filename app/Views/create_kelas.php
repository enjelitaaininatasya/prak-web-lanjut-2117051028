<?= $this-> extend('layouts/app')?>
<?= $this-> section('content')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1 class="h3 mt-5 mb-3 fw-normal" style="margin-top : 30px; margin-left : 35px;">Tambah Data Kelas</h1>
    <form method="POST" action="<?= base_url('/kelas/store') ?>" enctype="multipart/form-data" style="margin-top : 30px; margin-left : 35px; margin-right : 35px;">
        <div class="form-floating">
            <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama_kelas') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama_kelas" value="<?= old('nama_kelas') ?>">
            <label for="floatingName">Nama Kelas</label>
            <?php if (session('validation') && session('validation')->hasError('nama_kelas')) : ?>
                <div class="invalid-feedback">
                    <?= session('validation')->getError('nama_kelas'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <center><button class="btn btn-primary" type="submit" style="margin-top : 35px">Tambah</button></center>
    </form>
<?= $this->endSection()?>