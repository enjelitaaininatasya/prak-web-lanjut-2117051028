<?= $this-> extend('layouts/app')?>
<?= $this-> section('content')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <h1 class="h3 mt-5 mb-3 fw-normal" style="margin-top : 30px; margin-left : 35px;">Tambah Data</h1>
    <form method="POST" action="<?= base_url('/user/store') ?>" enctype="multipart/form-data" style="margin-top : 30px; margin-left : 35px; margin-right : 35px;">
        <div class="form-floating">
            <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
            <label for="floatingName">Nama</label>
            <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                <div class="invalid-feedback">
                    <?= session('validation')->getError('nama'); ?>
                </div>
            <?php endif; ?>
        </div>
        </div>
        <div class="form-floating">
            <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
            <label for="floatingNpm">NPM</label>
            <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                <div class="invalid-feedback">
                    <?= session('validation')->getError('npm'); ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="form-floating">
            <select class="form-select mt-2" aria-label="Default select example" name="kelas">
                <option value="" selected disabled>Pilih Kelas</option>
                <?php
                foreach ($kelas as $item) {
                ?>
                    <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-floating">
            <input class="form-control mt-2" type="file" id="formFile" name="foto">
        </div>


        <center><button class="btn btn-primary" type="submit" style="margin-top : 35px">Tambah</button></center>
    </form>
<?= $this->endSection()?>