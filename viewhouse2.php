<!DOCTYPE html>
<html lang="en">
<head>
  <title>House Rental</title>
  <meta charset="utf-8">
   <!--<link rel="stylesheet" type="text/css" href="table.css">-->
  <link rel="stylesheet" type="text/css" href="m.css">
  <link rel="icon" href="image/favicon.png" type="image/png">
  <link rel="stylesheet" type="text/css" href="view2.css">
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
      <a class="navbar-brand" href="index.html">House Rental</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">View Houses <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="viewhouse.php">Houses</a></li>
            <li><a href="viewrating.php">Rating</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.html"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<section class="house-listing">
  <a href="viewhouse.php" class="btn btn-primary">Hide Ratings</a>

  <div class="container">
    <table class="house-table">
      <thead>
        <tr>
          <th>House ID</th>
          <th>Owner ID</th>
          <th>Quantity</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Country</th>
          <th>Description</th>
          <th>Prices</th>
          <th>Image</th>
          <th>Rating</th>
          <th>Comments</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("connection.php");
        $query = "SELECT h.*, r.rating, r.comment FROM house h JOIN rating r ON h.id = r.id"; // Improved query
        $data = mysqli_query($conn, $query);

        while ($result = mysqli_fetch_assoc($data)) {
          echo "<tr>";
          echo "<td>" . $result['id'] . "</td>";
          echo "<td>" . $result['owner_id'] . "</td>";
          echo "<td>" . $result['no_of_rooms'] . "</td>";
          echo "<td>" . $result['address'] . "</td>";
          echo "<td>" . $result['city'] . "</td>";
          echo "<td>" . $result['state'] . "</td>";
          echo "<td>" . $result['country'] . "</td>";
          echo "<td>" . $result['description'] . "</td>";
          echo "<td>$" . $result['rate'] . "/night</td>";
          echo "<td><img src='data:image/jpeg;base64," . base64_encode($result['pics']) . "' alt='House Image'></td>";
          echo "<td>" . $result['rating'] . "</td>";
          echo "<td>" . $result['comment'] . "</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</section>

</body>
</html>
