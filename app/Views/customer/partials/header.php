<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Antar Paket - <?= $title ?></title>

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
        #nav .right img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid white;
}

        /* Tambahkan semua style CSS dari file asli Anda di sini */
        /* ... */
    </style>
</head>

<body>
    <div class="d-flex">
        <?= view('customer/partials/sidebar') ?>
        
        <div class="d-flex flex-column flex-fill" id="main">
            <div class="container-fluid bg-first py-3 px-4 d-flex justify-content-between align-items-center shadow-lg" id="nav">
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