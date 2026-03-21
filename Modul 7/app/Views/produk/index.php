<?= $this->extend('produk/layout') ?>

<?= $this->section('content') ?>
<div class="card shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-table"></i> Data Produk</h5>
    </div>
    <div class="card-body">
        <table id="tabelProduk" class="table table-striped table-bordered" width="100%">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
$(document).ready(function() {
    var table = $('#tabelProduk').DataTable({
        ajax: {
            url: '/produk/data',
            dataSrc: ''
        },
        columns: [
            { data: null, render: function(data, type, row, meta) {
                return meta.row + 1;
            }},
            { data: 'nama' },
            { data: 'kategori' },
            { data: 'harga', render: function(data) {
                return 'Rp ' + parseInt(data).toLocaleString('id-ID');
            }},
            { data: 'id', render: function(data) {
                return `
                    <a href="/produk/edit/${data}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil"></i> Edit
                    </a>
                    <button onclick="hapus(${data})" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i> Hapus
                    </button>
                `;
            }}
        ]
    });

    function hapus(id) {
        Swal.fire({
            title: 'Yakin hapus?',
            text: 'Data tidak bisa dikembalikan!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/produk/delete/' + id,
                    type: 'DELETE',
                    success: function() {
                        table.ajax.reload();
                        Swal.fire('Terhapus!', 'Data berhasil dihapus.', 'success');
                    }
                });
            }
        });
    }

    window.hapus = hapus;
});
</script>
<?= $this->endSection() ?>