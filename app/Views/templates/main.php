<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Antar Paket - <?= $title ?? '' ?></title>

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

        .bg-second {
            background-color: var(--second) !important;
        }

        .bg-third {
            background-color: var(--third) !important;
        }

        .bg-fourth {
            background-color: var(--fourth) !important;
        }

        .text-first {
            color: var(--first) !important;
        }

        .text-second {
            color: var(--second) !important;
        }

        .text-third {
            color: var(--third) !important;
        }

        .text-fourth {
            color: var(--fourth) !important;
        }

        .border-first {
            border-color: var(--first) !important;
        }

        .border-third {
            border-color: var(--third) !important;
        }

        .border-second {
            border-color: var(--second) !important;
        }

        .border-fourth {
            border-color: var(--fourth) !important;
        }

        .font-bold {
            font-weight: bold;
        }

        .font-semibold {
            font-weight: 600;
        }

        .font-normal {
            font-weight: 400 !important;
        }

        .img-auto {
            width: 100%;
            object-fit: contain;
        }

        .absolute {
            position: absolute;
        }

        .relative {
            position: relative;
        }

        .gradient {
            background: rgb(40, 158, 216);
            background: linear-gradient(360deg, rgba(40, 158, 216, 1) 0%, rgba(0, 212, 255, 0) 100%);
        }

        .w-fit {
            width: fit-content;
            width: --moz-fit-content;
        }

        .shadow-first {
            box-shadow: 0px 0px 14px 4px rgba(65, 201, 255, 0.75);
            -webkit-box-shadow: 0px 0px 14px 4px rgba(65, 201, 255, 0.75);
            -moz-box-shadow: 0px 0px 14px 4px rgba(65, 201, 255, 0.75);
        }

        .shadow-second {
            box-shadow: 0px 0px 10px 0px rgba(65, 201, 255, 0.75);
            -webkit-box-shadow: 0px 0px 10px 0px rgba(65, 201, 255, 0.75);
            -moz-box-shadow: 0px 0px 10px 0px rgba(65, 201, 255, 0.75);
        }

        #side {
            width: 250px;
            min-height: 100vh;
            position: relative;
            z-index: 999;
        }

        #side img.logo {
            max-width: 150px;
            width: 100%;
        }

        #side .link {
            border-radius: 20px 0 0 20px;
        }

        #side .link img {
            width: 30px;
        }

        #main {
            min-width: calc(1200px - 250px);
            width: calc(100vw - 250px);
        }

        #main #nav .left input {
            outline: none !important;
            border: 0 !important;
            box-shadow: none !important;
        }

        #main #nav .left>button {
            margin-top: -5px;
        }

        #main #nav .left>button .red {
            background-color: red;
            width: 7px;
            height: 7px;
            border-radius: 50%;
            top: 4px;
            right: 8px;
        }

        #main #nav .right img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            object-position: center;
        }

        #main #header .date label {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
        }

        #main #content .card-sm img {
            height: 30px;
        }

        .action-btn {
            border-radius: 50%;
            color: white;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-detail {
            background-color: blue;
        }

        .btn-edit {
            background-color: orange;
        }

        .btn-delete {
            background-color: red;
        }

        .btn-add {
            background-color: green;
            color: white;
            padding: 0.5em 1em;
            border: none;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-add svg {
            margin-right: 5px;
        }

        .search-container {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        th {
            background-color: var(--fourth);
        }

        .dropdown-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }
        .small-card {
            width: 95px;
            height: 45px;
        }
        
        .btn-bordered {
            border: 2px solid #000;
        }
        .btn-modal-custom {
            background-color: white;
            text-align: center;
            color: black;
            border: 1px solid #000;
            border-radius: 6px;
            padding: 10px;
        }
        .btn-modal-custom:hover {
            background-color: #BCBBBB;
            border-color: #000;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="d-flex">
        <div class="bg-first px-3 py-4 d-flex flex-column gap-4" id="side">
            <div class="container-fluid p-0 m-0 d-flex justify-content-center">
                <img src="/assets/img/logo-white.png" alt="" class="logo">
            </div>
            <hr class="border-white border-2">
            <div class="container-fluid m-0 px-3 py-2 link">
                <a href="/dashboard"
                    class="lead text-decoration-none m-0 font-bold text-white d-flex gap-3 align-items-center">
                    <img src="/assets/img/dashboard-white.png" alt=""> 
                    <small>Dashboard</small>
                </a>
            </div>
            <div class="container-fluid m-0 px-3 py-2 link bg-white dropdown">
                <a data-bs-toggle="collapse" href="#collapseExample" role="button"
                    class="lead text-decoration-none m-0 font-bold text-first d-flex gap-3 align-items-center">
                    <img src="/assets/img/user-blue.png" alt=""> 
                    <small>Customer</small>
                </a>
                <div class="collapse" id="collapseExample">
                    <hr class="mt-3">
                    <div class="d-flex flex-column gap-3 align-items-center py-3">
                        <a href="/pengiriman" class="text-decoration-none text-first">Pengiriman</a>
                        <a href="/customer" class="text-decoration-none text-fourth">ID Customer</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid m-0 px-3 py-2 link">
                <a href="/settings"
                    class="lead text-decoration-none m-0 font-bold text-white d-flex gap-3 align-items-center">
                    <img src="/assets/img/setting.png" alt=""> 
                    <small>Pengaturan</small>
                </a>
            </div>
            <div class="container-fluid m-0 px-3 py-2 link">
                <a type="button" data-bs-toggle="modal" data-bs-target="#keluar"
                    class="lead text-decoration-none m-0 font-bold text-white d-flex gap-3 align-items-center">
                    <img src="/assets/img/logout.png" alt=""> 
                    <small>Keluar</small>
                </a>
            </div>
        </div>

        <!-- Modal Keluar -->
        <div class="modal fade" id="keluar" tabindex="-1" aria-labelledby="keluarLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center py-4">
                        <img src="/assets/img/keluar.png" alt="ingin hapus" class="img-fluid" style="max-width: 300px;">
                        <div class="gap-2 col-6 mx-auto mt-3">
                            <a href="/login" type="button" class="btn btn-modal-custom" onclick="handleYa()">Ya</a>
                            <button type="button" class="btn btn-modal-custom" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column" id="main">
            <div class="container-fluid bg-first py-3 px-4 d-flex justify-content-between align-items-center shadow-lg"
                id="nav">
                <div class="left d-flex gap-3 align-items-center">
                    <div class="bg-white py-2 px-3 d-flex align-items-center rounded gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search text-fourth" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                        <input type="text" placeholder="Cari di sini...">
                    </div>
                    <button class="bg-transparent border-0 outline-0 relative" data-bs-toggle="modal" data-bs-target="#notifikasi">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="text-white bi bi-bell" viewBox="0 0 16 16">
                            <path
                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
                        </svg>
                        <div class="red absolute"></div>
                    </button>
                </div>
                <div class="right d-flex align-items-center gap-3">
                    <h6 class="text-white m-0 font-bold">Hansen</h6>
                    <img class="border border-2 border-white"
                        src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                </div>
            </div>

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

            <!-- Konten Utama -->
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gybBogGzOg/exQbsT/fpSKZ/Qp1pZp6UJjmS5sEyu1mB0iItsL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-q2y+NKVK74KGrz4uIRH+KYtfQ6BZNZQ2bM6FxaPjf2iM34zG1JEVhE03EFp4OHRw"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function handleYa() {
            // Logout logic here
            console.log('Logging out...');
        }
    </script>
</body>
</html>