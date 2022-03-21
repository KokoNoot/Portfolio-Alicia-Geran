<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alicia Geran | Backoffice</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <?php
    if (isset($_SESSION['auth'])) {
      echo('<link rel="stylesheet" href="/public/css/dashboard.css">');
    } else {
      echo('<link rel="stylesheet" href="/public/css/signin.css">');
    }
  ?>
</head>

<?php
  if (isset($_SESSION['auth'])) {
    include('partials/admin/dashboard.php');
  } else {
    include('partials/admin/signin.php');
  }
?>
</html>
