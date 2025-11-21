<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="<?= base_url('src/output.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/notiflix.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nprogress.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/fontawesome/css/all.min.css') ?>">
</head>


<body class="bg-gray-100 flex">

    <!-- === SIDEBAR === -->
    <?= view('partials/sidebar') ?>

    <!-- === MAIN CONTENT WRAPPER === -->
    <div class="flex-1 ml-64 flex flex-col min-h-screen">

        <header class="bg-white shadow p-4 sticky top-0 z-30">
            <?= view('partials/header') ?>
        </header>

        <main class="flex-1 p-4">
            <?= view($content) ?>
        </main>

        <footer class="p-4">
            <?= view('partials/footer') ?>
        </footer>

    </div>

</body>


<script src="<?= base_url('public/js/jquery.js') ?>"></script>
<script src="<?= base_url('public/js/notiflix.min.js') ?>"></script>
<script src="<?= base_url('public/js/nprogress.js') ?>"></script>

<script>
    // =============================================
    // ======= Configuration Loading Nprogress =====
    // =============================================
    Nprogress.configure({
        showSpinner: false,
        trickleSpeed: 100,
    });

    window.addEventListener('beforeunload', function() {
        Nprogress.start();
    });

    window.addEventListener('load', function() {
        Nprogress.done();
    });

    $(document).on("click", "a", function(e) {
        let href = $(this).attr("href");

        if (href && href !== "#" && !href.startsWith("javascript")) {
            NProgress.start();
        }
    });

    $(document).ajaxStart(function() {
        NProgress.start();
    });

    $(document).ajaxStop(function() {
        NProgress.done();
    });

    $(document).on("submit", "form", function() {
        NProgress.start();
    });



    // =============================================
    // ======= Configuration Toggle Sidebar ========
    // =============================================
</script>

</html>