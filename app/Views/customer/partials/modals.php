<!-- Modal Notifikasi -->
<div class="modal fade" id="notifikasi" tabindex="-1" aria-labelledby="notifikasi" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 modal-text" id="notifikasi">Notifikasi</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column mb-2">
                    <div class="fw-bold">Amarullah Cafu Prabowo</div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <p class="mb-0 small">Pickup 30 barang</p>
                    <p class="mb-0 small text-end">Jl. Anggrek</p>
                </div>
                <div class="ms-auto col-4 d-flex justify-content-between align-items-center">
                    <div class="border p-2 rounded-3 bg-first text-light">
                        <p class="mb-0 small">1 menit yang lalu</p>
                    </div>
                </div>
                <hr class="border-primary">
                <div class="d-flex flex-column mb-2">
                    <div class="fw-bold">Febri</div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <p class="mb-0 small">Pickup 60 barang</p>
                    <p class="mb-0 small text-end">Jl. Mawar</p>
                </div>
                <div class="ms-auto col-4 d-flex justify-content-between align-items-center">
                    <div class="border p-2 bg-first rounded-3">
                        <p class="mb-0 small text-light">1 menit yang lalu</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal Keluar -->
<div class="modal fade" id="keluar" tabindex="-1" aria-labelledby="keluarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center py-4">
                <img src="<?= base_url('assets/img/keluar.png') ?>" alt="ingin hapus" class="img-fluid" style="max-width: 300px;">
                <div class="gap-2 col-6 mx-auto mt-3">
                    <a href="<?= base_url('login') ?>" type="button" class="btn btn-modal-custom">Ya</a>
                    <button type="button" class="btn btn-modal-custom" data-bs-dismiss="modal">Tidak</button>
                </div>
            </div>
        </div>
    </div>
</div>