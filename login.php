<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CMS-Panel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="auth-container">
    <div class="auth-header">
      <button id="btnLogin" class="active">Masuk</button>
      <button id="btnRegister">Daftar</button>
    </div>

    <div class="auth-body">
      <!-- LOGIN FORM -->
      <form id="loginForm" class="active">
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="Masukkan email" />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" placeholder="Masukkan password" />
        </div>
        <button class="btn" type="button">Masuk</button>
        <div class="hint">Developed by admin marfyzone</div>
      </form>

      <!-- REGISTER FORM -->
      <form id="registerForm">
        <div class="form-group">
          <label>Nama</label>
          <input type="text" placeholder="Masukkan nama" />
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" placeholder="Masukkan email" />
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" placeholder="Buat password" />
        </div>
        <button class="btn" type="button">Daftar</button>
        <div class="hint">Developed by admin marfyzone</div>
      </form>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
