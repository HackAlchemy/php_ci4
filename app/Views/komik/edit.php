<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Ubah Data Komik</h2>

            <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <!-- Slug -->
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">

                <!-- Judul -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (session('validation') && session('validation')->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" autofocus value="<?= (old('judul') ? old('judul') : $komik['judul']) ?>">

                        <?php if (session('validation') && session('validation')->hasError('judul')) : ?>
                            <div class="invalid-feedback">
                                <?= session('validation')->getError('judul') ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Penulis -->
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" required value="<?= (old('penulis') ? old('penulis') : $komik['penulis']) ?>">
                    </div>
                </div>

                <!-- Penerbit -->
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" required value="<?= old('penerbit', $komik['penerbit']) ?>">
                    </div>
                </div>

                <!-- Sampul -->
                <div class="form-group row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview">
                    </div>

                    <div class="col-sm-8">
                        <div class="input-group mb-3">
                            <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : '' ?>" id="sampul" name="sampul" onchange="previewImg()">

                            <label class="custom-file-label" for="sampul" style="margin-left:10px"><?= $komik['sampul']; ?></label>

                            <!-- invalid feedback -->
                            <div class="invalid-feedback">
                                <?= $validation->getError('sampul') ?>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>