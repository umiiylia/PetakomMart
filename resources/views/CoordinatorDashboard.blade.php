<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&family=Bree+Serif&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    
    <style>
      /* CSS reset */
      * 
      {
        margin: 0;
        padding: 0;
      }

      /* CSS Variables */
      :root 
      {
        --navbar-height: 59px;
      }

      /* Navigation Bar */
      #navbar 
      {
        display: flex;
        position: sticky;
        top: 0px;
        right: 0px;
        align-items: center;
      }

      #navbar::before 
      {
        content: "";
        background-color: black;
        position: absolute;
        right: 0px;
        height: 90%;
        width: 100%;
        top: 0px;
        z-index: -1;
        opacity: 0.4;
      }

      /* Navigation Bar: Logo and Image */
      #logo 
      {
        margin: 10px 20px;
      }

      
      /* Navigation Bar: List Styling */
      #navbar ul 
      {
        display: flex;
        font-family: "Baloo Bhai 2", cursive;
      }

      #navbar ul li 
      {
        list-style: none;
        font-size: 1.3rem;
      }

      #navbar ul li a 
      {
        color: white;
        display: block;
        padding: 30px 50px;
        border-radius: 20px;
        text-decoration: none;
      }

      #navbar ul li a:hover 
      {
        color: black;
        background-color: #e8ead3;
      }

      /* Home Section */

      body
      {
        background-color: #e8ead3;
      }

      #home 
      {
        display: flex;
        flex-direction: column;
        padding: 3px 200px;
        height: 500px;
        justify-content: center;
        align-items: center;
      }

      #home::before 
      {
        content: "";
        position: absolute;
        background: URL('assets/images/bg.png') no-repeat center center/cover;
        height: 720px;
        width: 100%;
        top: 0px;
        left: 0px;
        z-index: -1;
        opacity: 0.89;
      }

      #home h1 
      {
        color: black;
        text-align: center;
        font-size: 5.5rem;
        font-family: 'Fredoka One', cursive;
      }

      #home p 
      {
        color: white;
        text-align: center;
        font-size: 2rem;
        font-family: 'Fredoka One', cursive;
      }
      /* Services Section */
      #services 
      {
        margin: 12px;
        display: flex;
      }

      #services .box 
      {
        border: 2px black;
        padding: 30px;
        margin: 3px 6px;
        border-radius: 23px;
        background-color: pink; 
        /* #F8C16A */
      }

      #services
      {
        margin-left: 300px;
        margin-right: auto;
      }

      #services .box img 
      {
        margin: auto;
        display: block;
      }

      #services .box p 
      {
        font-family: "Bree Serif", serif;
        padding: 10px;
      }

      /* Partners Section */
      #partners-section 
      {
        position: relative;
      }

      /* Footer */
      footer 
      {
        background-color: black;
        color: #e8ead3;
        padding: 9px 20px;
      }

      /* Utility Classes */
      .h-primary 
      {
        font-size: 6rem;
        padding: 12px;
        font-family: "Bree Serif", serif;
      }

      .h-primary-services 
      {
        font-size: 3.5rem;
        font-weight: 300;
        padding: 20px;
        font-family: 'Fredoka One', cursive;
      }

      .h-secondary 
      {
        font-size: 2.8rem;
        font-weight: 400;
        padding: 12px;
        font-family: "Bree Serif", serif;
      }

      .btn 
      {
        padding: 6px 20px;
        margin: 17px;
        border: 2px solid white;
        background-color: pink;
        color: white;
        font-size: 1.5rem;
        border-radius: 16px;
        cursor: pointer;
      }

      .btn:hover 
      {
        color: black;
        background-color: white;
      }

      .center 
      {
        text-align: center;
      }

      .service-font 
      {
        font-size: 1.5rem;
      }
      </style>
</head> 

<body>
    <!-- navigation bar -->
    <nav id="navbar">
        
        <div id="logo">
            <img src="{{ URL('assets/images/UMP.png')}}" alt="UMP.com" width="130px" height="100px">
            
        </div>
        <ul id="tab">
        <li class="item" style="float: right;"><a href="CoordinatorDashboard">Dashboard</a></li>
				<li class="item" style="float: right;"><a href="CoordinatorDashboard">Profile</a></li>
        <!--<li class="item"><a href="View_Inventory">Inventory</a></li>
				<li class="item"><a href="ListOfItem">Payment</a></li>-->
				<li class="item"><a href="reportMainPage">Report</a></li> 
        <div><img src="{{ URL('assets/images/logo.png')}}" alt="UMP.com" height="100px"></div>

        <li><a href="dashboard">Admin</a></li>
        <li><a href="CashierDashboard">Cashier</a></li>
        </div>
			</ul>
    </nav>

    <!-- Home Section -->
    <section id="home">
        <br>
        <h2 class="h-secondary" > Hi Coordinator!</h2>
        <h1 class="h-primary">Welcome to PETAKOM MINI MART</h1>
    </section><br><br><br><br>

    <!-- Service Container -->
    
  
    </section>
    <footer>
        <div class="center">
        <p> &copy; 2023 PETAKOM MINI MART. All right reserved. </p>
        </div>
    </footer>
</body>
</html>