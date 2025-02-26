<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Store</title>
    <link rel="stylesheet" href="/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/assets/css/all.min.css">
    <link rel="stylesheet" href="/public/assets/css/main.css">
  </head>
  <body>
    <?php
      include __DIR__ . '/../config/db.php';
      include __DIR__ . '/../src/layout/header.php';
      include __DIR__ . '/../src/pages/home.php';
      include __DIR__ . '/../src/layout/footer.php';
    ?>
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>
  </body>
</html>