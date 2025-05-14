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

use Soap\Url;

      $url = $_SERVER['REQUEST_URI'];
      if (strpos($url, '?') !== false) {
          $url = substr($url, 0, strpos($url, '?'));
      }
      switch ($url) {
        case '/public':
            include __DIR__ . '/../src/pages/home.php';
            break;
        case '/public/products':
            include __DIR__ . '/../src/pages/products/products.php';
            break;
        default:
            include __DIR__ . '/../src/pages/404.php';
            break;
      }
    ?>
    <script src="/public/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/public/assets/js/bootstrap.min.js"></script>
  </body>
</html>