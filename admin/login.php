<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>::. Login Administrator .::</title>

    <!-- Google Font: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/font-awesome/css/all.min.css">
    <!-- Animate.css -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
      crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" crossorigin="anonymous"></script>

    <style>
      /* ===== Color Palette & Base ===== */
      * { box-sizing: border-box; margin: 0; padding: 0; }
      html, body {
        height: 100%;
        font-family: 'Poppins', sans-serif;
        background: #222831;
        color: #EEEEEE;
      }
      .wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
      }

      /* ===== Card ===== */
      .login-card {
        background: #393E46;
        border-radius: 12px;
        padding: 2rem;
        width: 100%;
        max-width: 400px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.3);
        animation: fadeInUp 0.8s ease-out;
      }
      @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(40px); }
        to   { opacity: 1; transform: translateY(0); }
      }
      .login-card h3 {
        text-align: center;
        margin-bottom: 1.5rem;
        font-weight: 600;
      }

      /* ===== Form Controls ===== */
      .form-control {
        background: #EEEEEE;
        border: none;
        border-radius: 8px;
        padding: 0.75rem 1rem;
        font-size: 0.9rem;
        color: #222831;
        transition: transform 0.2s, box-shadow 0.2s;
      }
      .form-control:focus {
        outline: none;
        box-shadow: 0 4px 12px rgba(0,173,181,0.4);
        transform: translateY(-2px);
      }
      label {
        font-weight: 500;
        font-size: 0.85rem;
        margin-bottom: 0.3rem;
      }

      /* ===== Buttons ===== */
      .btn-custom {
        background: #00ADB5;
        border: none;
        border-radius: 8px;
        color: #EEEEEE;
        font-weight: 500;
        padding: 0.65rem 1.2rem;
        transition: background 0.3s, transform 0.2s;
      }
      .btn-custom:hover {
        background: #00cbd3;
        transform: translateY(-2px);
      }
      .btn-reset {
        background: transparent;
        border: 2px solid #EEEEEE;
        color: #EEEEEE;
        margin-left: 1.2rem;
        border-radius: 8px;
      }
      .btn-reset:hover {
        background: rgba(255,255,255,0.1);
      }

      /* ===== SweetAlert2 Custom ===== */
      .swal2-popup {
        font-family: 'Poppins', sans-serif !important;
        background: #393E46 !important;
        color: #EEEEEE !important;
        border-radius: 12px !important;
        padding: 2rem !important;
      }
      .swal2-title {
        font-weight: 600;
        font-size: 1.4rem;
      }
      .swal2-content {
        font-size: 1rem;
        margin-top: 0.5rem;
      }
      .swal2-styled.swal2-confirm {
        background: #00ADB5 !important;
        color: #222831 !important;
        border-radius: 8px !important;
        padding: 0.65rem 1.2rem !important;
        font-weight: 500;
        transition: transform 0.2s;
      }
      .swal2-styled.swal2-confirm:hover {
        background: #00cbd3 !important;
        transform: translateY(-2px);
      }
      .swal2-styled.swal2-cancel {
        background: transparent !important;
        color: #EEEEEE !important;
        border: 2px solid #EEEEEE !important;
        border-radius: 8px !important;
        padding: 0.65rem 1.2rem !important;
      }
      .swal2-styled.swal2-cancel:hover {
        background: rgba(255,255,255,0.1) !important;
      }
    </style>
  </head>

  <body>
    <div class="wrapper">
      <div class="login-card">
        <h3><i class="fas fa-user-lock"></i> Administrator Login</h3>
        <form id="loginForm" method="post" action="proses-login.php">
          <div class="form-group mb-3">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Masukan Email" required>
          </div>
          <div class="form-group mb-4">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" class="form-control" placeholder="Masukan Password" required>
          </div>
          <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-custom"><i class="fas fa-sign-in-alt"></i> Login</button>
            <button type="button" class="btn btn-reset" onclick="window.location.href='../index.php'">
            <i class="fas fa-undo"></i> Batal
            </button>

          </div>
        </form>
      </div>
    </div>

    <!-- JS Dependencies -->
    <script src="../assets/js/jquery-3.4.1.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/font-awesome/js/all.min.js"></script>
      <script>
document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const email = this.email.value.trim();
  const pass  = this.password.value.trim();

  if (!email || !pass) {
    return Swal.fire({
      title: 'Oops...',
      text: 'Email dan Password tidak boleh kosong!',
      icon: 'warning',
      customClass: { popup: 'animate__animated animate__fadeInDown' }
    });
  }

  const body = new URLSearchParams({ email, password: pass });

  fetch(this.action, {
    method: this.method.toUpperCase(),
    body
  })
  .then(res => {
    if (!res.ok) throw new Error('HTTP ' + res.status);
    return res.json();
  })
  .then(data => {
    if (data.success) {
      return Swal.fire({
        icon: 'success',
        title: 'Login Berhasil',
        showConfirmButton: false,
        timer: 1200
      }).then(() => {
        window.location.href = data.redirect_to;
      });
    }
    return Swal.fire({
      title: '<strong>Login <u>Gagal</u></strong>',
      html: data.message || 'Email atau password salah.',
      icon: 'error',
      showCancelButton: true,
      confirmButtonText: 'Coba Lagi',
      cancelButtonText: 'Batal',
      customClass: {
        popup: 'animate__animated animate__shakeX',
        confirmButton: 'swal2-confirm',
        cancelButton: 'swal2-cancel'
      },
      backdrop: 'rgba(34,40,49,0.8) no-repeat'
    }).then(result => {
      if (result.isConfirmed) this.reset();
    });
  })
  .catch(err => {
    Swal.fire({
      icon: 'error',
      title: err.message.includes('HTTP') ? 'Error' : 'Timeout!',
      text: err.message,
      confirmButtonText: 'OK',
      customClass: { popup: 'animate__animated animate__fadeInDown' }
    });
  });
});
</script>

  </body>
</html>
