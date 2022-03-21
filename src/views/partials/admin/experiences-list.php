<form action="/admin/add.php" method="POST">
  <label for="name" class="fw-bold">Titre</label><br>
  <input type="text" name="name"><br>

  <label for="date" class="fw-bold">Date</label><br>
  <input type="text" name="date"><br>

  <span class="fw-bold">Description</span><br>
  <textarea name="description"></textarea><br>

  <input type="hidden" name="type" value="experience">
  <input type="submit" value="Ajouter">
</form>
<hr>

<?php
  for ($i = 0; $i < count($experiences); $i++) {
    echo (
      '<form action="/admin/edit.php" method="POST">'
      . '<label for="name" class="fw-bold">Titre</label><br>'
      . '<input type="text" name="name" value="'
      . $experiences[$i]['name']
      . '"><br>'

      . '<label for="name" class="fw-bold">Date</label><br>'
      . '<input type="text" name="date" value="'
      . $experiences[$i]['date']
      . '"><br>'

      . '<span class="fw-bold">Description</span><br>'
      . '<textarea name="description">'
      . $experiences[$i]['description']
      . '</textarea><br>'

      . '<span>Date de création : '
      . date('d/m/Y H:i:s', $experiences[$i]['created_at'])
      . '</span><br>'

      . '<span>Date de modification : '
      . date('d/m/Y H:i:s', $experiences[$i]['updated_at'])
      . '</span><br>'

      . '<input type="hidden" name="type" value="experience">'
      . '<input type="hidden" name="id" value="'
      . $experiences[$i]['id']
      . '">'
      . '<input type="submit" value="Modifier">'
      . '</form><br>'
      . '<form action="/admin/delete.php" method="POST">'
      . '<input type="hidden" name="type" value="experience">'
      . '<input type="hidden" name="id" value="'
      . $experiences[$i]['id']
      . '">'
      . '<input type="submit" value="Supprimer">'
      . '</form><hr>'
    );
  }
?>
