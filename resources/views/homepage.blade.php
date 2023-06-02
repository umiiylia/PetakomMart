<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!DOCTYPE html>

  <style>
    /* Add your CSS styling here */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    header img {
      height: 50px;
      width: auto;
    }
    
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }
    
    nav ul li {
      float: left;
    }
    
    nav ul li a {
      display: block;
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    nav ul li a:hover {
      background-color: #111;
    }
    
    section {
      padding: 20px;
    }
    
    .container {
      max-width: 1200px;
      margin: 0 auto;
    }
    
    .summary {
      background-color: #f4f4f4;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .charts {
      background-color: #f4f4f4;
      padding: 20px;
    }
    
    h2 {
      margin-top: 0;
    }
    
    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
    
    footer p {
      margin: 0;
    }

    /* Create three equal columns that float next to each other */
.column {
  float: left;
  width: 33.33%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other on smaller screens (600px wide or less) */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
  </style>
</head>
<body>
  <header>
    <img src="logo.png" alt="Logo">
    <nav>
      <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>
  </header>

  <section id="main">
    <div class="container">
      <div class="summary">
        <h2>Summary</h2>
        <!-- Add summary information here -->
      </div>
  </section>

  <section id="products">
    <div class="container">
        <div class="summary">
      <h2>Products</h2>
      <!-- Add product information and table here -->
      <div class="column">
    <h2>Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
  
  <!-- First product -->
  <div class="column">
    <h2>Column</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies, eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros, eget luctus quam orci in velit. Praesent scelerisque tortor sed accumsan convallis.</p>
  </div>
</div>
    </div>
    </div>
  </section>

  <section id="orders">
    <div class="container">
        <!-- Add order information and table here -->
      
  </section>
<br>
  <section id="customers">
    <div class="container">
      <h2>Customers</h2>
      <!-- Add customer information and table here -->
    </div>
  </section>

  <section id="settings">
    <div class="container">
      <h2>Settings</h2>
      <!-- Add settings options and form here -->
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Your Ecommerce Company. All rights reserved
</footer>
</body>
</html>
