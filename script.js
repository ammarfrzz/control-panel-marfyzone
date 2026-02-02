let btnLogin = document.getElementById('btnLogin');
let btnRegister = document.getElementById('btnRegister');
let loginForm = document.getElementById('loginForm');
let registerForm = document.getElementById('registerForm');

  btnLogin.addEventListener('click', function() {
    btnLogin.classList.add('active');
    btnRegister.classList.remove('active');
    loginForm.classList.add('active');
    registerForm.classList.remove('active');
  });

  btnRegister.addEventListener('click', function() {
    btnRegister.classList.add('active');
    btnLogin.classList.remove('active');
    registerForm.classList.add('active');
    loginForm.classList.remove('active');
  });