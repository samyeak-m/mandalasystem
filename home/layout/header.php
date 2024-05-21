<?php

define('cssBase', 'static/css/');
define('imgBase', 'static/img/');
define('jsbase', 'static/js/');
define('headercss', 'layout/header.css');
$css = cssBase . headercss;
$img = imgBase;

echo '<script>';
echo 'var page = "' . $page . '";';
echo '</script>';

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title><?php echo $page ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="<?= htmlspecialchars($css) ?>">
  <link rel="icon" type="image/png" href="static/img/logo.png">


</head>

<body>
  <header id="header">
    <navbar id="navbar">
      <div class="logo">
        <a href="/mandalasystem"><img class="logo-img" src="static/img/logo.png" alt="ACAI"></a>
      </div>

      <div class="menunav">

        <a class="anav <?php if ($page === 'Home')
          echo 'active'; ?>" href="/mandalasystem">Home</a>
        <div class="dropdown">
          <a class="anav dropbtn <?php if ($page === 'Abouts')
            echo 'active'; ?>" href="abouts">About Us</a>
          <div class="dropdown-content" id="dropdown-content">
            <a href="products" class="dropnav">Our Products</a>
            <a href="customers" class="dropnav">Our Customers</a>
          </div>
          </div>
          <a class="anav <?php if ($page === 'Event')
            echo 'active'; ?>" href="event">Event</a>
        </div>

        <div class="menuToggle">

          <input type="checkbox" />

          <span></span>
          <span></span>
          <span></span>

          <ul class="menu">

            <a href="/acai">
              <li>Home</li>
            </a>
            <a href="abouts">
              <li>About us</li>
            </a>
            <a href="products">
              <li>Our Product</li>
            </a>

          </ul>
        </div>
    </navbar>
  </header>
  <script src="static/js/layout/header.js"></script>