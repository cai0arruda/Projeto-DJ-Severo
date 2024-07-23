<body class="text-center">

  <main class="form-signin">
    <form action="auth.php" method="post">
      <img src="assets/img/severopreto.png" alt="Logo" width="200" class="pt-3 pb-4">

      <div class="form-floating">
        <input type="text" id="username" name="username" required class="form-control" placeholder="Usuário">
        <label for="floatingInput">Usuário</label>
      </div>
      <br>
      <div class="form-floating">
        <input type="password" id="password" name="password" required class="form-control" placeholder="Senha">
        <label for="floatingPassword">Senha</label>
      </div>
      <button class="w-100 btnentrar" type="submit">Entrar</button>
      <p class="mt-3 mb-3 text-muted">&copy; 2022–2024</p>
    </form>
  </main>
