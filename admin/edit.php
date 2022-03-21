<?php
if(!isset($_SESSION))
  session_start();

require_once('../config/db.php');

if (isset($_POST['type']) && isset($_POST['id'])) {
  switch ($_POST['type']) {
    case 'experience':
      if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['date'])) {
        $timestamp = time();

        $q = $pdo->prepare('
            UPDATE experiences
            SET name = :name,
            description = :description,
            date = :date,
            updated_at = :updated_at
            WHERE id = :id
            ');
        $q->bindParam(':id', $_POST['id']);
        $q->bindParam(':name', $_POST['name']);
        $q->bindParam(':description', $_POST['description']);
        $q->bindParam(':date', $_POST['date']);
        $q->bindParam(':updated_at', $timestamp);
        $q->execute();
      }

      header('Location: /admin/experiences.php');
      break;
    case 'project' :
      if (isset($_POST['name']) && isset($_POST['description'])) {
        $timestamp = time();

        $q = $pdo->prepare('
            UPDATE projects
            SET name = :name,
            description = :description,
            updated_at = :updated_at
            WHERE id = :id
            ');
        $q->bindParam(':id', $_POST['id']);
        $q->bindParam(':name', $_POST['name']);
        $q->bindParam(':description', $_POST['description']);
        $q->bindParam(':updated_at', $timestamp);
        $q->execute();
      }

      header('Location: /admin/projects.php');
      break;
    case 'user' :
      if (isset($_POST['first_name']) 
        && isset($_POST['last_name'])
        && isset($_POST['email'])
        && isset($_POST['phone'])
        && isset($_POST['twitter'])
        && isset($_POST['instagram'])
        && isset($_POST['linkedin'])
        && isset($_POST['short_biography'])
        && isset($_POST['long_biography'])
        && isset($_POST['experiences_title'])
        && isset($_POST['projects_title'])
      ) {
        $timestamp = time();

        $q = $pdo->prepare('
            UPDATE authors
            SET first_name = :first_name,
            last_name = :last_name,
            email = :email,
            phone = :phone,
            twitter = :twitter,
            instagram = :instagram,
            linkedin = :linkedin,
            short_biography = :short_biography,
            long_biography = :long_biography,
            experiences_title = :experiences_title,
            projects_title = :projects_title,
            updated_at = :updated_at
            WHERE id = 1
            ');
        $q->bindParam(':first_name', $_POST['first_name']);
        $q->bindParam(':last_name', $_POST['last_name']);
        $q->bindParam(':email', $_POST['email']);
        $q->bindParam(':phone', $_POST['phone']);
        $q->bindParam(':twitter', $_POST['twitter']);
        $q->bindParam(':instagram', $_POST['instagram']);
        $q->bindParam(':linkedin', $_POST['linkedin']);
        $q->bindParam(':short_biography', $_POST['short_biography']);
        $q->bindParam(':long_biography', $_POST['long_biography']);
        $q->bindParam(':experiences_title', $_POST['experiences_title']);
        $q->bindParam(':projects_title', $_POST['projects_title']);
        $q->bindParam(':updated_at', $timestamp);
        $q->execute();
      }

      header('Location: /admin/settings.php');
      break;
  }
} else {
  header('Location: /admin');
}
