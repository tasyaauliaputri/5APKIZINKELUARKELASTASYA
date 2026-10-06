<?php
// auth/loginuser.php
// Halaman Login User
?>

<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="login-box" style="width: 400px;">

        <div class="card card-outline card-primary shadow">

            <!-- Header -->
            <div class="card-header text-center">

                <a href="index.php?halaman=home" class="h1">
                    <b>CV</b> Digital
                </a>

            </div>

            <!-- Body -->
            <div class="card-body">

                <p class="login-box-msg">
                    Silakan masuk untuk memulai sesi
                </p>


                <!-- Pesan Error -->
                <?php if (isset($_GET['error'])): ?>

                    <div class="alert alert-danger py-2 small">
                        <?= htmlspecialchars($_GET['error']) ?>
                    </div>

                <?php endif; ?>


                <!-- Form Login -->
                <form action="proses/proseslogin.php" method="post">

                    <!-- Username -->
                    <div class="form-group">

                        <label for="username">
                            Username:
                        </label>

                        <div class="input-group">

                            <input
                                type="text"
                                id="username"
                                name="username"
                                class="form-control"
                                placeholder="Masukkan username Anda"
                                value="admin"
                                required
                            >

                            <div class="input-group-append">

                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>

                            </div>

                        </div>

                        <small class="text-muted">
                            Contoh: admin, guru
                        </small>

                    </div>


                    <!-- Password -->
                    <div class="form-group">

                        <label for="password">
                            Password:
                        </label>

                        <div class="input-group">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-control"
                                placeholder="Masukkan password Anda"
                                value="admin123"
                                required
                            >

                            <!-- Tombol Show/Hide Password -->
                            <div
                                class="input-group-append"
                                onclick="togglePassword()"
                                style="cursor: pointer;"
                            >

                                <div class="input-group-text">

                                    <span
                                        class="fas fa-eye"
                                        id="eyeIcon"
                                    ></span>

                                </div>

                            </div>

                            <div class="input-group-append">

                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>

                            </div>

                        </div>

                        <small class="text-muted">
                            Gunakan password yang terdaftar di JSON
                        </small>

                    </div>


                    <!-- Remember & Sign In -->
                    <div class="row mt-4">

                        <div class="col-8">

                            <div class="icheck-primary">

                                <input
                                    type="checkbox"
                                    id="remember"
                                >

                                <label for="remember">
                                    Remember Me
                                </label>

                            </div>

                        </div>

                        <div class="col-4">

                            <button
                                type="submit"
                                name="login"
                                class="btn btn-primary btn-block"
                            >
                                Sign In
                            </button>

                        </div>

                    </div>

                </form>


                <!-- Registrasi -->
                <p class="mb-0 mt-3 text-center">

                    <a href="index.php?halaman=registerpeserta">
                        Registrasi sebagai Peserta
                    </a>

                </p>


                <!-- Login Default -->
                <div class="alert alert-info mt-3 py-2 small">

                    <b>Login Default:</b>
                    <br>

                    Username:
                    <code>admin</code>

                    /
                    
                    Password:
                    <code>admin123</code>

                </div>

            </div>

        </div>

    </div>

</div>


<script>
function togglePassword() {

    const password = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    if (password.type === 'password') {

        password.type = 'text';

        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');

    } else {

        password.type = 'password';

        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');

    }
}
</script>