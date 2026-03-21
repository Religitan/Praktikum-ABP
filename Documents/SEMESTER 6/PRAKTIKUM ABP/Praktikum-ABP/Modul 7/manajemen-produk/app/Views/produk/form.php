<?= $this->extend('produk/layout') ?>

<?= $this->section('content') ?>
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">
            <i class="bi bi-<?= isset($produk) ? 'pencil' : 'plus-circle' ?>"></i>
            <?= isset($produk) ? 'Edit Produk' : 'Tambah Produk' ?>
        </h5>
    </div>
    <div class="card-body">
        <form action="<?= isset($produk) ? '/produk/update/'.$produk['id'] : '/produk/store' ?>" method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Produk</label>
                <input type="text" name="nama" class="form-control" 
                    value="<?= isset($produk) ? $produk['nama'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Kategori</label>
                <input type="text" name="kategori" class="form-control" 
                    value="<?= isset($produk) ? $produk['kategori'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" 
                    value="<?= isset($produk) ? $produk['harga'] : '' ?>" required>
            </div>
            <a href="/produk" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
<?= $this->endSection() ?>