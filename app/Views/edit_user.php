<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
    <h1 style="margin-top:30px;">Form Edit User</h1>

    <center><img src="<?= $user['foto']?>" alt="Foto" style="width : 200px; border-radius : 50%;"></center>
    <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" style="margin-top:50px;" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field() ?>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="inputPassword" name="nama" value="<?= $user['nama'] ?>">
                <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('nama'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">NPM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control <?= session('validation') && session('validation')->hasError('npm') ? 'is-invalid' : '' ?>" id="inputPassword" name="npm" value="<?= $user['npm'] ?>">
                <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
                    <div class="invalid-feedback">
                        <?= session('validation')->getError('npm'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Small select example" name="kelas" value="<?= old('kelas'); ?>">
                    <option selected>Pilih Kelas</option>
                        <?php
                        foreach ($kelas as $item) {?>
                            <option value="<?= $item['id'] ?>" <?=$user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php
                        }
                        ?>
                </select>
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="foto">
            </div>
        </div>

        <input type="submit" class="btn btn-success">
    </form>
<?= $this->endSection()?>