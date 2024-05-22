<link rel="stylesheet" href="static/css/menubar/productPage.css">
<?php

$controller = new Controller();

$controller->header("Products");
?>

<section class="main">
<?php
$controller->products();
?>
</section>

<?php 
$controller->footer();

?>