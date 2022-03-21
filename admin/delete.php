<?php
if(!isset($_SESSION))
  session_start();

require_once('../config/db.php');

if (isset($_POST['type']) && isset($_POST['id'])) {
  switch ($_POST['type']) {
    case 'experience':
      $q = $pdo->prepare('DELETE from experiences WHERE id = :id');
      $q->bindParam(':id', $_POST['id']);
      $q->execute();
      $q->closeCursor();

      header('Location: /admin/experiences.php');
      break;
    case 'project' :
      $q = $pdo->prepare('DELETE from projects WHERE id = :id');
      $q->bindParam(':id', $_POST['id']);
      $q->execute();
      $q->closeCursor();

      header('Location: /admin/projects.php');
      break;
  }
} else {
  header('Location: /admin');
}
