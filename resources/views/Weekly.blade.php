<!-- reprt weekly-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reportWeekly </title>
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

      .sidenav 
      {
        height: 70%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 10;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
        padding-left: 20px;
        padding-right: 20px;
        margin-left: 10;
        opacity: 0.4;
        display: block;
        border-radius: 20px;
      }

      .sidenav a 
      {
        padding: 50px 50px 50px 50px;
        text-decoration: none;
        font-size: 25px;
        color: white;
        display: block;
        border-radius: 20px;
      }

      .sidenav a:hover 
      {
        color: black;
        background-color: #e8ead3
      }

      @media screen and (max-height: 300px) 
      {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 1px;}
      }

      #top_x_div {
  margin-left: 20%;
  margin-right: 30%;
  ;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  margin-left:1000px;
  margin-top:50px;
}


.button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
<!-- chart style-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript"  >
  google.charts.load('current', {'packages':['bar']});//chart type
  google.charts.setOnLoadCallback(drawStuff);

  function drawStuff() {//chart for weekly
    var data = new google.visualization.arrayToDataTable([
      ['Week', 'Sales'],
      ["Monday", 13],
      ["Tuesday", 24],
      ["Wedneday", 37],
      ["Thurday", 40],
      ['Friday', 46],
      ['Saturday', 56],
      ['Sunday', 56],
    ]);

    var options = {
      width: 1000,
     
      legend: { position: 'none' },
      chart: {
        },
      axes: {
        x: {
          0: { side: 'top', } // Top x-axis.
        }
      },
      bar: { groupWidth: "100%" }
    };

    var chart = new google.charts.Bar(document.getElementById('top_x_div'));
    // Convert the Classic options to Material options.
    chart.draw(data, google.charts.Bar.convertOptions(options));
  };
</script>

</head> 

<body>
    <!-- navigation bar -->
    <nav id="navbar">
        
        <div id="logo">
            <img src="{{ URL('assets/images/UMP.png')}}" alt="UMP.com" width="130px" height="100px">
            
        </div>
        <ul id="tab">
        <li class="item" style="float: right;"><a href="CoordinatorDashboard">Dashboard</a></li><!--dashboard page-->
				<li class="item" style="float: right;"><a href="CoordinatorDashboard">Profile</a></li><!--profile page-->
        <!--<li class="item"><a href="View_Inventory">Inventory</a></li>
				<li class="item"><a href="ListOfItem">Payment</a></li>-->
				<li class="item"><a href="reportMainPage">Report</a></li> <!--report page-->
        <div><img src="{{ URL('assets/images/logo.png')}}" alt="UMP.com" height="100px"></div>

        <li><a href="dashboard">As Admin</a></li> <!--admin page-->
        <li><a href="CashierDashboard">As Cashier</a></li> <!--cashier page-->
        </div>
			</ul>
    </nav>

    <div class="sidenav">
        <a href="reportMainPage">Daily</a> <!--view daily chart-->
        <a href="Weekly">Weekly</a> <!--//view weekly chart-->
       <a href="Monthly">Monthly</a> <!--//view monthly chart-->
    </div>

    <div id="top_x_div" style="width: 800px; "></div>
    

    <div ><!--button fucntion-->
        <button class="button button2" ><a a href="print">PRINT</button>
            <button class="button button2" ><a a href="print">DOWNLOAD</button>
    </div>


</body>