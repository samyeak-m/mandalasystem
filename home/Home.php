<link rel="stylesheet" href="static/css/index.css">

<?php
$controller = new Controller();
$controller->header('Home');
$controller->slider();
$controller->mdmessage();
?>
<section class="products">
<h1 class="animate">Our Products</h1>
<?php
$controller->products();
?>
</section>
<?php
$controller->footer();
?>

<script src="static/js/index.js">

</script>