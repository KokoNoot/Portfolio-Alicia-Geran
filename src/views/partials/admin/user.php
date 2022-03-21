<form action="/admin/edit.php" method="POST">
  <label for="first_name">Prénom</label><br>
  <?php
    echo(
      '<input type="text" name="first_name" value="'
      . $user['first_name']
      . '"><br>'
    );
  ?>

  <label for="last_name">Nom</label><br>
  <?php
    echo(
      '<input type="text" name="last_name" value="'
      . $user['last_name']
      . '"><br>'
    );
  ?>

  <label for="email">Email</label><br>
  <?php
    echo(
      '<input type="email" name="email" value="'
      . $user['email']
      . '"><br>'
    );
  ?>

  <label for="phone">Téléphone</label><br>
  <?php
    echo(
      '<input type="phone" name="phone" value="'
      . $user['phone']
      . '"><br>'
    );
  ?>

  <label for="twitter">Twitter</label><br>
  <?php
    echo(
      '<input type="text" name="twitter" value="'
      . $user['twitter']
      . '"><br>'
    );
  ?>

  <label for="instagram">Instagram</label><br>
  <?php
    echo(
      '<input type="text" name="instagram" value="'
      . $user['instagram']
      . '"><br>'
    );
  ?>

<label for="linkedin">LinkedIn</label><br>
  <?php
    echo(
      '<input type="text" name="linkedin" value="'
      . $user['linkedin']
      . '"><br>'
    );
  ?>

  <label for="short_biography">Biographie courte</label><br>
  <?php
    echo(
      '<textarea name="short_biography">'
      . $user['short_biography']
      . '</textarea><br>'
    );
  ?>

  <label for="long_biography">Biographie longue</label><br>
  <?php
    echo(
      '<textarea name="long_biography">'
      . $user['long_biography']
      . '</textarea><br>'
    );
  ?>

  <label for="experiences_title">Titre pour les expériences</label><br>
  <?php
    echo(
      '<textarea name="experiences_title">'
      . $user['experiences_title']
      . '</textarea><br>'
    );
  ?>

  <label for="projects_title">Titre pour les projets</label><br>
  <?php
    echo(
      '<textarea name="projects_title">'
      . $user['projects_title']
      . '</textarea><br>'
    );
  ?>

  <br>
  <input type="hidden" name="type" value="user">
  <input type="hidden" name="id" value="1">
  <input type="submit" value="Modifier">
</form>