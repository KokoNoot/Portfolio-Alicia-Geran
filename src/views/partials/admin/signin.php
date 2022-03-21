<body class="text-center">
  <main class="form-signin">
    <form method="POST" action="/admin/signin.php">
      <h1 class="h3 mb-3 fw-normal">Portfolio</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
        <label for="floatingInput">Nom d'utilisateur</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
        <label for="floatingPassword">Mot de passe</label>
      </div>

      <button class="w-100 btn btn-lg btn-secondary" type="submit">Se connecter</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
  </main>
</body>
