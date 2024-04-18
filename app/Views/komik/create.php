<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Komik</h2>

            <form action="/komik/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!-- Judul -->
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" autofocus value="<?= old('judul'); ?>">

                        <div class="invalid-feedback">
                            <?= $validation->getError('judul') ?>
                        </div>
                    </div>
                </div>

                <!-- Penulis -->
                <div class="row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" required value="<?= old('penulis'); ?>">
                    </div>
                </div>

                <!-- Penerbit -->
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" required value="<?= old('penerbit'); ?>">
                    </div>
                </div>

                <!-- Sampul -->
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Sampul</label>

                    <div class="col-sm-2">
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                    </div>
                    
                    <div class="col-sm-8">
                        <div class="input-group mb-3">

                            <input type="file" class="form-control <?= ($validation->hasError('sampul')) ? 'is-invalid' : '' ?>" id="sampul" name="sampul" onchange="previewImg()">

                            <!-- invalid feedback -->
                            <div class="invalid-feedback">
                                <?= $validation->getError('sampul') ?>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>