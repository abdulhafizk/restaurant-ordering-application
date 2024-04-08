<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Decafe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="3000px">
  <!-- Header Start -->
  <?php include "header.php"; ?>
  <!-- Header End -->
  <div class="container-lg">
    <div class="row">
      <!-- Sidebar Start -->
      <?php include "sidebar.php"; ?>
      <!-- Sidebar End -->

      <!-- Content Start -->
      <?php
      if (isset($_GET['x']) && $_GET['x'] == 'home') {
        include "home.php";
      } elseif (isset($_GET['x']) && $_GET['x'] == 'order') {
        include 'order.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'customer') {
        include 'customer.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'product') {
        include 'product.php';
      } elseif (isset($_GET['x']) && $_GET['x'] == 'report') {
        include 'report.php';
      }
      ?>
      <!-- Content End -->

      <div class="fixed-buottom text-center mb-3">
        Copyright 2024 Trio Squad For Portofolio Easometric and Programmers March
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>