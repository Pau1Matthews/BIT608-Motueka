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
              <li><a href="listbookings.php">Current Bookings</a></li>
              <li><a href="bookingdetails.php">Booking Details</a></li>
              <li><a href="editbooking.php">Edit Booking</a></li>
              <li class="selected"><a href="deletebooking.php">Delete a Booking</a></li>
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
                <h1>Booking preview before deletion</h1>

                <fieldset><legend>Room detail #2</legend><dl>
                  <dt>Room name:</dt><dd>Herman</dd>
                  <dt>Checkin date:</dt><dd>2022-10-10</dd>
                  <dt>Checkout date:</dt><dd>2022-12-10</dd>
               
               </fieldset>
               
               <h2>Are you sure you want to delete this Booking?</h2>
               
               
               <input type="submit" name="submit" value="Delete" aria-label="Delete">  <a href="deletebooking.php">[Cancel]</a>
               
                </div>

            </div>
            <div id="footer">
              Copyright &copy; black_white | <a href="privacy.php">Privacy Statement</a> | <a href="index.php">Home</a>
            </div>

        </div>
    </div>
    
</body>

</php>