<?php
if(!isset($_SESSION))
  session_start();

require_once('../config/db.php');

if (isset($_POST['username']) && isset($_POST['password'])) {
  $q = $pdo->prepare('
    SELECT *
    FROM authors
    WHERE username = :username
    ');
  $q->bindParam(':username', strtolower($_POST['username']));
  $q->execute();
  $auth = $q->fetch();

  if (hash('sha256', $_POST['password']) === $auth['password']) {
    $_SESSION['auth'] = $auth;
  }
}

header('Location: /admin');
