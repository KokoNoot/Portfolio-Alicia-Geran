<form action="/admin/add.php" method="POST">
  <label for="name" class="fw-bold">Titre</label><br>
  <input type="text" name="name"><br>

  <span class="fw-bold">Description</span><br>
  <textarea name="description"></textarea><br>

  <input type="hidden" name="type" value="project">
  <input type="submit" value="Ajouter">
</form>
<hr>

<?php
  for ($i = 0; $i < count($projects); $i++) {
    echo (
      '<form action="/admin/edit.php" method="POST">'
      . '<label for="name" class="fw-bold">Titre</label><br>'
      . '<input type="text" name="name" value="'
      . $projects[$i]['name']
      . '"><br>'

      . '<span class="fw-bold">Description</span><br>'
      . '<textarea name="description">'
      . $projects[$i]['description']
      . '</textarea><br>'

      . '<span>Date de création : '
      . date('d/m/Y H:i:s', $projects[$i]['created_at'])
      . '</span><br>'

      . '<span>Date de modification : '
      . date('d/m/Y H:i:s', $projects[$i]['updated_at'])
      . '</span><br>'
      
      . '<input type="hidden" name="type" value="project">'
      . '<input type="hidden" name="id" value="'
      . $projects[$i]['id']
      . '">'
      . '<input type="submit" value="Modifier">'
      . '</form><br>'
      . '<form action="/admin/delete.php" method="POST">'
      . '<input type="hidden" name="type" value="project">'
      . '<input type="hidden" name="id" value="'
      . $projects[$i]['id']
      . '">'
      . '<input type="submit" value="Supprimer">'
      . '</form><hr>'
    );
  }
?>
