<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental</title>
  <meta charset="utf-8">
  <link rel="icon" href="image/favicon.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="table.css">
  <link rel="stylesheet" type="text/css" href="books.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">House Rental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Houses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="houses.php">Houses</a></li>
            <li><a href="rating.php">Rating</a></li>
          </ul>
        </li>

        <li><a href="owner.php">Owners</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tenants<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tenant.php">Tenants</a></li>
            <li><a href="members.php">Members</a></li>
          </ul></li>
        <li><a href="booking.php">Booking</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">

         <li><a href="#"><span class="glyphicon glyphicon-user"></span>Hi <?php session_start();echo $_SESSION['uname'];?></a>
         </li>
        <li><a href="index.html"><span class="glyphicon glyphicon-user"></span> Sign Out</a></li>
      </ul>
    </div>
  </div>
</nav>

  
<div class="container">
    <a href="dobooking.html" class="btn btn-primary">Book House</a>

    <table class="booking-table">
      <thead>
        <tr>
          <th>Tenant ID</th>
          <th>House ID</th>
          <th>Booking Date</th>
          <th>Period</th>
          <th>Price</th>
          <th>Agreement</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("connection.php");
        $query = "SELECT * FROM booking";
        $data = mysqli_query($conn, $query);

        while ($result = mysqli_fetch_assoc($data)) {
          echo "<tr>";
          echo "<td>" . $result['t_id'] . "</td>";
          echo "<td>" . $result['h_id'] . "</td>";
          echo "<td>" . $result['booking_date'] . "</td>";
          echo "<td>" . $result['period'] . "</td>";
          echo "<td>$" . $result['price'] . "</td>";
          echo "<td><a href='v.php?tid=" . $result['t_id'] . "&hid=" . $result['h_id'] . "'>View File</a></td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
