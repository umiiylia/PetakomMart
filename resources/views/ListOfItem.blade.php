<!DOCTYPE html>
<html>
<head>
  <title>Website Heading with Picture and Menu</title>
  <style>
    /* CSS styles for the heading */
    header {
      background-color: #0057B9;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      margin: 0;
      padding: 10px;
    }
    
    img {
      width: 800px;
      height: 800px;
      border-radius: 0%;
      border-radius: 50%;
        
    }
    
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      background-color: #333;
      overflow: hidden;
    }

    li {
      float: left;
    }

    mi {
      float: right;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    mi a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    
    li a:hover {
      background-color: #111;
    }

    mi a:hover {
      background-color: #111;
    }

    /*search css*/

    .search-container {
      float: right;
    }

    .search-container {
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
    }
    
    .search-container input[type="text"] {
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
    }
    
    .search-container button {
      padding: 10px;
      border: none;
      background-color: #333;
      color: white;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    /*css for table*/
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #f2f2f2;
    }

  </style>
</head>
<body>
  <header>
    <h1>Website Heading</h1>
    <img src="petakomLogo.png" alt="Logo petakom">
  </header>
  
  <ul>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">Inventory</a></li>
    <li><a href="#">Payment</a></li>
    <li><a href="#">Report</a></li>
    <li><a href="#">Duty Roster</a></li>
    <mi><a href="#">Logout</a></mi>
    <mi><a href="#">Profile</a></mi>
  </ul>
  
  <h2>Payment</h2>
  <table>
  <tr>
    <th>List of Item</th>
    <th></th>
    <th></th>
    <th></th>
    <th>Search for Item:<input type="text" placeholder="Search..." >
      <button type="submit">Search</button></th>
  </tr>
  <tr>
    <th>Item ID</th>
    <th>Item Name</th>
    <th>Quantity</th>
    <th>Price (RM)</th>
    <th>Search Result</th>
  </tr>

</table>
  
</body>
</html>
