<!DOCTYPE html>
<html>

<head>
    <title>Motueka Bed & Breakfast</title>
    <meta name="description" content="Motueka Bed & Breakfast" />
    <meta name="keywords" content="Bed & Breakfast" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>

<?php
include "config.php"; //load in any variables
$db_connection = mysqli_connect(DBHOST, DBUSER, DBPASSWORD, DBDATABASE);

//insert DB code from here onwards
//check if the connection was good
if (mysqli_connect_errno()) {
    echo "Error: Unable to connect to MySQL. ".mysqli_connect_error() ;
    exit; //stop processing the page further
}

//prepare a query and send it to the server
$query = 'SELECT bookingID,room.roomname,bookings.checkInDate,bookings.checkOutDate,customer.lastname,customer.firstname FROM ((bookings 
INNER JOIN room ON bookings.roomID = room.roomID)
INNER JOIN customer ON bookings.customerID = customer.customerID)';

$result = mysqli_query($db_connection, $query);
$rowcount = mysqli_num_rows($result); 
?>

    <div id="main">
        <div id="header">
          <div id="logo">
            <div id="logo_text">
              <h1><a href="index.php"><span class="logo_colour"></span>Motueka Bed & Breakfast</a></h1>
              <h2>Make yourself at home is our slogan. We offer some of the best beds on the west coast. Sleep well and rest well.</h2>
            </div>
          </div>
          <div id="menubar">
            <ul id="menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="makebooking.php">Make Booking</a></li>
              <li class="selected"><a href="listbookings.php">Current Bookings</a></li>
              <li><a href="bookingdetails.php">Booking Details</a></li>
              <li><a href="editbooking.php">Edit Booking</a></li>
              <li><a href="deletebooking.php">Delete a Booking</a></li>
              <li><a href="privacy.php">Privacy Statement</a></li>
              <li><a href="login.php">Login</a></li>
            </ul>
          </div>
        </div>

        <div id="site_content">
            <div class="sidebar">
              <!-- insert your sidebar items here -->
              <h3>Latest News</h3>
              <h4>New Website Launched</h4>
              <h5>July 1st, 2014</h5>
              <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
              <p></p>
              <h4>New Website Launched</h4>
              <h5>July 1st, 2014</h5>
              <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
              <h3>Useful Links</h3>
              <ul>
                <li><a href="#">link 1</a></li>
                <li><a href="#">link 2</a></li>
                <li><a href="#">link 3</a></li>
                <li><a href="#">link 4</a></li>
              </ul>
            </div>

            <div id="content">
            <h1>Bookings list</h1>
            <h2><a href='makebooking.php'>Make a Booking</a>   <a href="index.php">Return to Home page</a></h2>
            <table border="1">
            <thead><tr><th>Booking (Room, Dates)</th><th>Customer</th><th>Action</th></tr></thead>
            <?php

              //makes sure we have bookings
            if ($rowcount > 0) {  
            while ($row = mysqli_fetch_assoc($result)) {
	          $id = $row['bookingID'];	
	          echo '<tr><td>'.$row['roomname'].','.$row['checkInDate'].','.$row['checkOutDate'].'</td><td>'.$row['lastname'].','.$row['firstname'].'</td>';
	          echo '<td><a href="bookingdetails.php?id='.$id.'">[view]</a>';
	          echo '<a href="editbooking.php?id='.$id.'">[edit]</a>';
	          echo '<a href="deletebooking.php?id='.$id.'">[delete]</a></td>';
            echo '</tr>';
            }
            } else echo "<h2>No Bookings found!</h2>"; //suitable feedback

            mysqli_free_result($result); //free any memory used by the query
            mysqli_close($db_connection); //close the connection once done
            ?>
            </table>

            </div>
            <div id="footer">
              Copyright &copy; black_white | <a href="privacy.php">Privacy Statement</a> | <a href="index.php">Home</a>
            </div>

        </div>
    </div>
    
</body>

</php>