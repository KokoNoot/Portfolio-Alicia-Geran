<body>  
  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Alicia Geran</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="bg-dark w-100"></div>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="/admin/signout.php">Se déconnecter</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <?php include('aside.php'); ?>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <br>
        <?php
          if ($_SERVER['REQUEST_URI'] === '/admin/experiences.php') {
            include('experiences-list.php');
          } elseif ($_SERVER['REQUEST_URI'] === '/admin/projects.php') {
            include('projects-list.php');
          } elseif ($_SERVER['REQUEST_URI'] === '/admin/settings.php') {
            include('user.php');
          } else {
            include('home.php');
          }
        ?>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="/public/js/dashboard.js"></script>
</body>
