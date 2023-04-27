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
              <li class="selected"><a href="makebooking.php">Make Booking</a></li>
              <li><a href="listbookings.php">Current Bookings</a></li>
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
                <h1>Make a Booking</h1>
                <form>
                  <label for="room">Room (name,type,beds): </label>
                  
                  <select name="room" id="roomID" required>
                    <option></option>
                    <option value="1">Kellie, S, 5 </option>
                    <option value="2">Herman, D, 5 </option>
                    <option value="3">Scarlett, D, 2 </option>
                    <option value="4">Jelani, S, 2 </option>
                    <option value="5">Sonya, S, 5 </option>
                    <option value="6">Miranda, S, 4 </option>
                    <option value="7">Helen, S, 2 </option>
                    <option value="8">Octavia, D, 3 </option>
                    <option value="9">Gretchen, D, 3 </option>
                    <option value="10">Bernard, S, 5 </option>
                    <option value="11">Dacey, D, 2 </option>
                    <option value="12">Preston, D, 2 </option>
                    <option value="13">Dane, S, 4 </option>
                    <option value="14">Cole, S, 1 </option>
                  </select>
                
                  <br><br>
                
                  <label for="checkindate">Checkin date:</label>
                  <input type="date" id="checkindate" name="checkindate" required>
                
                  <br><br>
                
                  <label for="checkoutdate">Checkout date:</label>
                  <input type="date" id="checkoutdate" name="checkoutdate" required>
                         
                  <br><br>
                  
                  <label for="contactnumber">Contact number: </label>
                  <input id="contactnumber" type="text" size="20" minlength="9" maxlength="15" required 
                         placeholder="(###) ### ####">
                         
                  <br><br>
                
                  <label for="bookingextras">Booking Extras: </label>
                  <textarea id="bookingextras" name="bookingextras" rows="4" cols="30">
                  </textarea>
                
                  <br><br>
                
                  <input type="submit" name="submit" value="Add" aria-label="Add">  <a href="makebooking.php">[Cancel]</a>
                
                </form>
                
                <br><br>
                <hr>
                <br>
                
                <h2>Search for room availability</h2>
                
                <br>
                
                <form>
                  <label for="startdate">Start date:</label>
                  <input type="date" id="startdate" name="startdate" required>
                  <label for="enddate">End date:</label>
                  <input type="date" id="enddate" name="enddate" required>
                  <input type="submit" name="search" value="Search availability" aria-label="Search">
                </form>
                
                <br>
                
                <table border="1">
                  <tr>
                    <th>Room #</th>
                    <th>Roomname</th>
                    <th>Room Type</th>
                    <th>Beds</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Kellie</td>
                    <td>S</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Herman</td>
                    <td>D</td>
                    <td>5</td>
                  </tr>
                </table>
                </div>

            </div>
            <div id="footer">
              Copyright &copy; black_white | <a href="privacy.php">Privacy Statement</a> | <a href="index.php">Home</a>
            </div>

        </div>
    </div>
    
</body>

</php>