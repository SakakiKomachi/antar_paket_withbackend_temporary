<?= $this->extend('templates/main'); ?>

<?= $this->section('content'); ?>
<div class="container py-4 px-5">
    <div class="container bg-white shadow-lg rounded-4 p-4">
        <div class="d-flex justify-content-between mb-3">
            <h4>Data Pengiriman</h4>
            <a class="btn btn-success" href="<?= base_url('pengiriman/create') ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    Tambah
</a>
        </div>
        <table class="table table-hover table-bordered">
            <thead>
                <tr class="table-secondary">
                    <th>No</th>
                    <th>ID Pengirim</th>
                    <th>No. Resi</th>
                    <th>Tanggal</th>
                    <th>Nama Pengirim</th>
                    <th>Nama Penerima</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($pengiriman as $item): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $item['id_pengiriman']; ?></td>
                    <td><?= $item['id_pengiriman']; ?></td>
                    <td><?= date('d-m-Y', strtotime($item['tanggal'])); ?></td>
                    <?php 
                        $pengirim = $this->pengirimModel->getPengirimByIdPengiriman($item['id_pengiriman']);
                        $penerima = $this->penerimaModel->getPenerimaByIdPengiriman($item['id_pengiriman']);
                    ?>
                    <td><?= $pengirim['nama_lengkap']; ?></td>
                    <td><?= $penerima['nama_lengkap']; ?></td>
                    <td class="d-flex gap-2">
                        <a href="/pengiriman/view/<?= $item['id_pengiriman']; ?>" class="action-btn btn-detail">
                            <img src="https://img.icons8.com/ios-filled/50/ffffff/visible.png" alt="Detail Icon" width="16" height="16">
                        </a>
                        <a href="/pengiriman/edit/<?= $item['id_pengiriman']; ?>" class="action-btn btn-edit">
                            <img src="https://img.icons8.com/ios-filled/50/ffffff/edit.png" alt="Edit Icon" width="16" height="16">
                        </a>
                        <form action="/pengiriman/delete/<?= $item['id_pengiriman']; ?>" method="post" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="action-btn btn-delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                <img src="https://img.icons8.com/ios-filled/50/ffffff/trash.png" alt="Delete Icon" width="16" height="16">
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection(); ?>