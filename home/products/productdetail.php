<?php
function getProductById($id)
{
    $productsJson = file_get_contents('static/data/product.json');
    $products = json_decode($productsJson, true);

    foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }
    return null;
}

$productId = isset($_GET['id']) ? $_GET['id'] : null;
$product = $productId ? getProductById($productId) : null;

if (!$product) {
    echo "Product not found!";
    exit;
}

?>

<div class="single-product-container">
    <figure class="product-card">
        <img src="<?php echo htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Software Image" onerror="this.src='static/img/errorimg.png'; this.alt='Error Logo image';">
        <figcaption>
            <h2 class="product-name"><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p class="product-description">
                <?php echo htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'); ?>
            </p>
            <div class="actionbtn">
                <p class="product-price"><?php echo htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?></p>
                <button class="enquire-btn">Enquire</button>
            </div>
        </figcaption>
    </figure>
</div>