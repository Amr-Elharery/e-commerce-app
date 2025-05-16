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
        <?php
            include __DIR__ . '/../../config/db.php';
            include __DIR__ . '/../models/Product.php';
            $connection = Database::connect();
            $productModel = new Product($connection);
            $products = $productModel->getAllProducts(6);
            foreach ($products as $product) {
                echo '<div class="col-md-3 mb-4">';
                echo '<div class="card">';
                echo '<img src="/public/images/' . $product['image_url'] . '" class="card-img-top" alt="' . $product['name'] . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product['name'] . '</h5>';
                echo '<p class="card-text">$' . number_format($product['price'], 2) . '</p>';
                echo '<a href="/product.php?id=' . $product['id'] . '" class="btn btn-primary">View Product</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        ?>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>