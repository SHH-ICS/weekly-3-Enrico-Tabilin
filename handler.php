<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Welcome Page</title>
</head>

<body>
  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Freddy Fazbear's Pizza Order Form</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content">
        <!-- Your content goes here -->
        <center>
          <h1>Thank you for ordering from Freddy Fazbear's Pizza!</h1>
          <?php
          $size = "";
          $topping = "";
          $tax = 0.13;
          if (isset($_POST['size'])) {
            $size = $_POST['size'];
          }
          if (isset($_POST['topping'])) {
            $topping = $_POST['topping'];
          }
          if ($size == 'large') {
            $size = 6;
          } else {
            $size = 10;
          }
          if ($topping == '1') {
            $topping = 1.00;
          } elseif ($topping == '2') {
            $topping = 1.75;
          } elseif ($topping == '3') {
            $topping = 2.50;
          } else {
            $topping = 3.35;
          }
          $st = (float)$size+(float)$topping;
          $cost = (float)$st*(1+(float)$tax);
          echo "<p>Subtotal: $" . $st . "</p>\n";
          echo "<p>Tax: " . (float)$tax*100 . "%</p>\n";
          echo "<p>Cost: $" . round($cost,2) . "</p>\n";
          ?>
          <a href="index.html"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
            Order another?
          </button></a>
        </center>
      </div>
    </main>
  </div>

</body>

</html>