<?= view('customer/partials/header') ?>

<div class="container py-4 px-5">
    <div class="container bg-white shadow-lg rounded-4 p-4">
        <?php if (session()->has('message')): ?>
            <div class="alert alert-success">
                <?= session('message') ?>
            </div>
        <?php endif ?>
        
        <div class="d-flex justify-content-between mb-3">
            <h4>Customer / ID Customer</h4>
            <div class="d-flex justify-content-between mb-3">
                <div class="d-flex">
                    <input type="text" class="form-control" placeholder="Pilih/Scan ID Customer">
                    <button class="btn btn-light border">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                        </svg>
                    </button>
                </div>
                <a class="btn btn-success" href="<?= base_url('customer/create') ?>">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
    Tambah
</a>
            </div>   
        </div>
        
        <table class="table table-hover table-bordered">
            <thead>
                <tr class="table-secondary">
                    <th>No</th>
                    <th>ID Customer</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Alamat Lengkap</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $customer['customer_id'] ?></td>
                    <td><?= $customer['full_name'] ?></td>
                    <td><?= $customer['phone_number'] ?></td>
                    <td><?= $customer['email'] ?></td>
                    <td><?= $customer['full_address'] ?></td>
                    <td class="d-flex gap-2 mt-2 align-items-center justify-content-center">
                        <a href="<?= base_url('customer/edit/' . $customer['id']) ?>" class="action-btn btn-edit">
    <img src="https://img.icons8.com/ios-filled/50/ffffff/edit.png"
        alt="Edit Icon" width="16" height="16">
</a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?= $customer['id'] ?>" class="action-btn btn-delete">
                            <img src="https://img.icons8.com/ios-filled/50/ffffff/trash.png"
                                alt="Delete Icon" width="16" height="16">
                        </button>
                        
                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapus<?= $customer['id'] ?>" tabindex="-1" aria-labelledby="hapusLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body text-center py-4">
                                        <img src="<?= base_url('assets/img/yakininginhapus.png') ?>" alt="ingin hapus" class="img-fluid" style="max-width: 300px;">
                                        <div class="gap-2 col-6 mx-auto mt-3">
                                            <a href="<?= base_url('customer/delete/' . $customer['id']) ?>" type="button" class="btn btn-modal-custom">Ya</a>
                                            <button type="button" class="btn btn-modal-custom" data-bs-dismiss="modal">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <hr class="border-dark" style="border-style: dashed;">
        <div class="d-flex justify-content-between align-items-center gap-5">
            <small class="fw-bold">Menampilkan Data dari 1 hingga <?= count($customers) ?> dari <?= count($customers) ?></small>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?= view('customer/partials/modals') ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg/exQbsT/fpSKZ/Qp1pZp6UJjmS5sEyu1mB0iItsL"
    crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-q2y+NKVK74KGrz4uIRH+KYtfQ6BZNZQ2bM6FxaPjf2iM34zG1JEVhE03EFp4OHRw"
    crossorigin="anonymous">
</script>
</body>
</html>