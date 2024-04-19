<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-3">
    <div class="row ">
        <div class="col">
            <a href="komik/create" class="btn btn-primary my-3">Tambah Komik</a>
            <h1 class>Daftar Komik</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
            <table id="data-table" class="table table-responsive table-hover table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($komik as $k) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/<?= $k['sampul']; ?>" class="sampul"></td>
                        <td><?= $k['judul']; ?></td>
                        <td><?= $k['penulis']; ?></td>
                        <td><?= $k['penerbit']; ?></td>
                        <td>
                            <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>