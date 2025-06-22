<?= view('customer/partials/header') ?>

<div class="container py-4 px-5">
    <div class="container bg-white shadow-lg rounded-4 p-4">
        <div class="container-fluid justify-content-between mb-3">
            <h4>Form ID Customer</h4>
            <?php if (session()->has('errors')): ?>
                <div class="alert alert-danger">
                    <?php foreach (session('errors') as $error): ?>
                        <p><?= $error ?></p>
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            
            <form action="<?= isset($customer) ? base_url('customer/save/' . $customer['id']) : base_url('customer/save') ?>" method="post" class="row g-3 p-3">
    <div class="col-md-6">
        <label for="customer_id" class="form-label">ID Customer</label>
        <input type="text" class="form-control" id="customer_id" name="customer_id" 
               value="<?= $customer['customer_id'] ?? $customer_id ?? '' ?>" readonly>
    </div>
                <div class="col-md-6">
        <label for="district" class="form-label">Kecamatan</label>
        <input type="text" class="form-control" id="district" name="district" 
               value="<?= old('district') ?? $customer['district'] ?? '' ?>">
    </div>
                <div class="col-md-6">
                    <label for="full_name" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="full_name" name="full_name"
                           value="<?= old('full_name') ?? '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="city" class="form-label">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="city" name="city"
                           value="<?= old('city') ?? '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="phone_number" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number"
                           value="<?= old('phone_number') ?? '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="province" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="province" name="province"
                           value="<?= old('province') ?? '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"
                           value="<?= old('email') ?? '' ?>">
                </div>
                <div class="col-md-6">
                    <label for="postal_code" class="form-label">Kode Pos</label>
                    <input type="text" class="form-control" id="postal_code" name="postal_code"
                           value="<?= old('postal_code') ?? '' ?>">
                </div>
                <div class="col-md-12">
                    <label for="full_address" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="full_address" name="full_address"><?= old('full_address') ?? '' ?></textarea>
                </div>
                <div class="d-flex align-items-center justify-content-start">
                    <button type="submit" class="btn bg-first text-white">Simpan</button>
                    <button type="reset" class="btn bg-warning text-white mx-2">Reset</button>
                    <a href="<?= base_url('customer') ?>" class="btn bg-danger text-white">Cancel</a>
                </div>
            </form>
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