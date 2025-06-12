<?php 
session_start();

if (isset($_POST['clear_Cart'])) {
    unset($_SESSION['Cart']);
    header("Location: Cart.php");
    exit;
}


if (!isset($_SESSION['Cart'])) {
    $_SESSION['Cart'] = [];
}

    if (isset($_GET['action']) && $_GET['action'] == 'add' && isset($_GET['name']) && isset($_GET['price'])&& isset($_GET['image'])) {
    $name = $_GET['name'];
    $price = floatval($_GET['price']);
    $image = $_GET['image'];

    if (isset($_SESSION['Cart'][$name])) {
        $_SESSION['Cart'][$name]['quantity']++;
    } else {
        $_SESSION['Cart'][$name] = [
            'price' => $price,
            'quantity' => 1,
            'image' => $image
        ];
    }
}




include('includes/header.php')?>
<section class="cartSection">
<section id="cartHead">
    <h2>Shopping cart</h2>
</section>
<section id = "productSection">
<?php if (empty($_SESSION['Cart'])): ?>
        <h2>Cart is empty.</h2>
<?php else: ?> 

    <section class = "productsCart">
        <div class = "productImages">
            <h3 class = "productDesc">Product</h3>
                <?php foreach ($_SESSION['Cart'] as $name => $item): ?>
                    <div class = "productImage">
                        <img src="<?php echo($item['image'])?>" alt="">
                    </div>
                <?php endforeach; ?>
        </div>
        <div class = "productNames">
            <h3 class = "productDesc">Product name</h3>
                <?php foreach ($_SESSION['Cart'] as $name => $item): ?>
                    <div class = "productName">
                        <h4><?php echo($name)?></h4>
                    </div>
                <?php endforeach; ?>
        </div>
        <div class = "productQuantities">
            <h3 class = "productDesc">Amount</h3>
                <?php foreach ($_SESSION['Cart'] as $name => $item): ?>
                    <div class = "productQuantity">
                        <h4><?php echo($item['quantity'])?></h4>
                    </div>
                <?php endforeach; ?>
        </div>
        <div class = "productPrices">
            <h3 class = "productDesc">Price</h3>
                <?php foreach ($_SESSION['Cart'] as $name => $item): ?>
                    <div class = "productPrice">
                        <h4>$ <?php echo($item['price'] * $item['quantity'])?></h4>
                    </div>
                <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
    <div id = "cartButtons">
        <a href="index.php#Store" class = "blackButton">Continue shopping</a>
        <form method="post">
            <button type="submit" name="clear_Cart" class="purpleButton">Proceed to checkout</button>
        </form>
    </div>
</section>
</section>
<?php include('includes/footer.php')?>