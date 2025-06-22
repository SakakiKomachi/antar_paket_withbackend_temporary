<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        <?php include_once(APPPATH . 'Views/dashboard/css/styles.css') ?>
    </style>
</head>

<body>
    <div class="d-flex">
        <?= view('dashboard/partials/sidebar') ?>
        
        <div class="d-flex flex-column" id="main">
            <?= view('dashboard/partials/header', ['user' => $user]) ?>
            <?= view('dashboard/partials/content', ['stats' => $stats]) ?>
        </div>
    </div>

    <?= view('dashboard/partials/modals') ?>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        <?php include_once(APPPATH . 'Views/dashboard/js/scripts.js') ?>
    </script>
</body>

</html>