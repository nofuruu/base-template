<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?= base_url('src/output.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/nprogress.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/css/notiflix.min.css') ?>">
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center antialiased">
    <div class="w-full max-w-sm bg-white p-6 shadow-lg rounded-xl">

        <h2 class="text-3xl font-semibold text-teal-600 mb-1 text-center tracking-tight">
            TOFULAB
        </h2>

        <p class="text-sm text-gray-400 font-medium text-center mb-6">
            Sign in to your account
        </p>

        <form id="loginForm">

            <label for="email" class="block mb-1 text-gray-700 text-sm font-medium">
                Email
            </label>

            <input type="email" id="email"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-800 placeholder-gray-400
                       focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500
                       transition shadow-sm mb-4"
                placeholder="user@gmail.com" required>

            <label for="password" class="block mb-1 text-gray-700 text-sm font-medium">
                Password
            </label>

            <input type="password" id="password"
                class="w-full px-4 py-2.5 border border-gray-300 rounded-xl text-gray-800 placeholder-gray-400
                       focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-teal-400
                       transition shadow-sm"
                placeholder="Masukkan password anda" required>

            <div class="flex items-center justify-between my-4">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" class="mr-2 accent-emerald-600">
                    <span class="text-sm text-gray-600">Show Password</span>
                </label>

                <a href="#" class="text-sm text-teal-600 hover:underline font-medium">
                    Lupa password?
                </a>
            </div>

            <button type="submit"
                class="w-full bg-emerald-600 text-white py-2.5 rounded-xl font-medium tracking-wide
                       hover:bg-emerald-700 transition duration-200 shadow-sm">
                Login
            </button>
        </form>
    </div>
</body>
<script src="<?= base_url('public/js/jquery.js') ?>"></script>
<script src="<?= base_url('public/js/notiflix.min.js') ?>"></script>
<script src="<?= base_url('public/js/nprogress.js') ?>"></script>
<script>
    $('#loginForm').on('submit', function(e) {
        e.preventDefault();

        var email = $('#email').val();
        var password = $('#password').val();

        if (!email) {
            Notiflix.Notify.failure('Harap isi email');
            return;
        }

        if (!password) {
            Notiflix.Notify.failure('Harap isi password');
            return;
        }

        $.ajax({
            url: '<?= base_url('auth/login') ?>',
            method: 'POST',
            data: {
                email: email,
                password: password
            },
            dataType: 'json',

            success: function(response) {
                if (response.status === true) {
                    Notiflix.Notify.success('Login sukses');

                    setTimeout(() => {
                        window.location = response.redirect;
                    }, 1500);
                } else {
                    Notiflix.Notify.failure('Terjadi Kesalahan : ' + response.message);
                }
            },

            error: function(xhr) {
                Notiflix.Notify.failure('Terjadi kesalahan pada saat login: ' + response.message);
            }
        });
    });
</script>

</html>