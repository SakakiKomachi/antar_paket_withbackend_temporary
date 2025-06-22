<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --third: #E3ECF3;
            --first: #289ED8;
            --second: #41C9FF;
            --fourth: #BCBBBB;
        }

        body {
            min-width: 1200px;
        }

        .bg-first {
            background-color: var(--first) !important;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .main-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 50vw;
            height: 100vh;
            object-fit: cover;
        }

        .inner-image {
            position: absolute;
            top: 35%;
            left: 10%;
            width: 20vw;
            height: auto;
        }

        .top-right {
            position: absolute;
            top: 50px;
            right: 80px;
            display: flex;
            align-items: center;
        }

        .top-right button {
            margin-left: 10px;
        }

        .bg-first {
            background-color: var(--first) !important;
        }

        .logo {
            position: absolute;
            top: 35px;
            left: 30px;
            width: 100px;
            height: auto;
        }

        .welcome-text {
            position: absolute;
            top: 70%;
            left: 10%;
            width: 20vw;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
        }

        .welcome-text h2 {
            margin: 0;
            font-size: 1.7rem;
        }

        .full-height {
            height: 100vh;
        }

        .forgot-password {
            margin-left: 100px;
        }

        .position-relative {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .toggle-icon {
            width: 20px;
            height: 20px;
            opacity: 0.7;
            transition: opacity 0.2s ease;
        }

        .toggle-icon:hover {
            opacity: 1;
        }

        .password-wrapper {
            position: relative;
        }

        .form-control {
            padding-right: 40px;
        }
    </style>
</head>

<body>
    <div class="top-right">
        <p class="mb-0 container-fluid">Mau Bergabung Menjadi Agen?</p>
        <a type="button" class="btn bg-first text-white" href="<?= base_url('register') ?>">Daftar</a>
    </div>
    
    <!-- Gambar utama -->
    <img src="<?= base_url('/assets/img/login.png') ?>" alt="Gambar Utama" class="main-image">

    <!-- Gambar di dalam gambar utama -->
    <img src="<?= base_url('/assets/img/login2.png') ?>" alt="Gambar di Dalam" class="inner-image">

    <!-- Logo di kiri atas -->
    <img src="<?= base_url('/assets/img/logo-white.png') ?>" alt="Logo" class="logo">
    
    <!-- Teks di bawah gambar inner -->
    <div class="welcome-text">
        <h2>Selamat Datang!</h2>
        <h2>Di Website Antar Paket</h2>
    </div>
    
    <div class="container">
        <div class="container full-height d-flex justify-content-end align-items-center">
            <form action="<?= base_url('login') ?>" method="post" style="width: 300px; margin-right: 100px;">
                <h2 style="width: 500px" class="mb-5">Halo! Selamat Datang</h2>
                
                <!-- Tampilkan error jika ada -->
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('errors')): ?>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="username" class="form-label">Username/Email</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= old('username') ?>" required>
                </div>
                <div class="mb-3 position-relative">
                    <label for="password" class="form-label">Password</label>
                    <a href="<?= base_url('forgot-password') ?>" class="text-decoration-none forgot-password">Lupa Password?</a>
                    <div class="password-wrapper">
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Tetap Masuk</label>
                    </div>
                    <button type="submit" class="btn bg-first text-white d-grid gap-2 col-12 mx-auto">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SweetAlert untuk popup -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("password");
            const toggleIcon = document.getElementById("toggleIcon");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleIcon.src = "<?= base_url('assets/img/hide.png') ?>";
            } else {
                passwordInput.type = "password";
                toggleIcon.src = "<?= base_url('assets/img/show.png') ?>";
            }
        }

        // Tampilkan popup error jika ada
        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal',
                text: '<?= session()->getFlashdata('error') ?>',
                confirmButtonColor: '#289ED8'
            });
        <?php endif; ?>
    </script>
</body>
</html>