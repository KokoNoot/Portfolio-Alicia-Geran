<?php
if(!isset($_SESSION))
  session_start();

require_once('../config/db.php');

if (isset($_POST['type'])) {
  switch ($_POST['type']) {
    case 'experience':
      if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['date'])) {
        $timestamp = time();

        $q = $pdo->prepare('
            INSERT INTO experiences
            SET name = :name,
            description = :description,
            date = :date,
            created_at = :timestamp,
            updated_at = :timestamp,
            author_id = 1
            ');
        $q->bindParam(':name', $_POST['name']);
        $q->bindParam(':description', $_POST['description']);
        $q->bindParam(':date', $_POST['date']);
        $q->bindParam(':timestamp', $timestamp);
        $q->execute();
      }

      header('Location: /admin/experiences.php');
      break;
    case 'project' :
      if (isset($_POST['name']) && isset($_POST['description'])) {
        $timestamp = time();

        $q = $pdo->prepare('
            INSERT INTO projects
            SET name = :name,
            description = :description,
            created_at = :timestamp,
            updated_at = :timestamp,
            author_id = 1
            ');
        $q->bindParam(':name', $_POST['name']);
        $q->bindParam(':description', $_POST['description']);
        $q->bindParam(':timestamp', $timestamp);
        $q->execute();
      }
      
      header('Location: /admin/projects.php');
      break;
  }
} else {
  header('Location: /admin');
}
