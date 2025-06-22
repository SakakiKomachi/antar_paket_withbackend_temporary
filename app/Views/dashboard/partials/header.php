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
        <button class="bg-transparent border-0 outline-0 relative"
        data-bs-toggle="modal" data-bs-target="#notifikasi">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="text-white bi bi-bell" viewBox="0 0 16 16">
                <path
                    d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6" />
            </svg>
            <div class="red absolute"></div>
        </button>
    </div>
    <div class="right d-flex align-items-center gap-3">
        <h6 class="text-white m-0 font-bold"><?= $user['name'] ?></h6>
        <img class="border border-2 border-white" src="<?= $user['avatar'] ?>" alt="">
    </div>
</div>

<div class="container-fluid px-4 d-flex justify-content-between align-items-center mt-5" id="header">
    <h3 class="font-bold">Hai, <?= $user['name'] ?>!</h3>
    <div class="input-group mb-3 w-fit relative date">
        <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-calendar" viewBox="0 0 16 16">
                <path
                    d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
            </svg>
        </span>
        <input type="date" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
</div>