<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum omnis dolore obcaecati ea, soluta, necessitatibus magnam hic error ad fugit vitae sit in aliquid odio maxime alias ducimus consectetur tempore.</p>
            <?php foreach ($alamat as $row) : ?>
                <ul>
                    <li><?= $row['tipe'] ?> : <?= $row['alamat'] ?>, <?= $row['kota'] ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>