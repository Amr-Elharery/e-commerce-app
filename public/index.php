<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
  </head>
  <body>
    <?php
      include __DIR__ . '/../config/db.php';
      include __DIR__ . '/../src/layout/header.php';
      include __DIR__ . '/../src/pages/home.php';
      include __DIR__ . '/../src/layout/footer.php';
    ?>
  </body>
</html>