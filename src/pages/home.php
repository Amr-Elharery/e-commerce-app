<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h1>Welcome to My Store</h1>
            <p>Your one-stop shop for all your needs!</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12 text-center">
            <h2>Featured Products</h2>
            <p>Check out our latest products!</p>
        </div>
    </div>

    <div class="row mt-5">
        <!-- Product cards will go here -->
        <?php
          include __DIR__ . '/../../config/db.php';
          $db = Database::connect();
          $products_query = "SELECT * FROM products LIMIT 6";
          $result = $db->query($products_query);
          if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){
                  echo '<div class="col-md-4 mb-4">';
                  echo '<div class="card">';
                  echo '<img src="' . $row['image_url'] . '" class="card-img-top" alt="' . $row['name'] . '">';
                  echo '<div class="card-body">';
                  echo '<h5 class="card-title">' . $row['name'] . '</h5>';
                  echo '<p class="card-text">$' . $row['price'] . '</p>';
                  echo '<a href="#" class="btn btn-primary">Add to Cart</a>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
              }
          } else {
              echo '<p>No products found.</p>';
          }
        ?>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>