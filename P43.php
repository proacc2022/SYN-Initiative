<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SYN | Registeration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pstyle2.css">
  </head>
  <body>
    <div id="logowe">
      <a href="index.html"><img src="pl1.png" alt="Logo" style="max-width: 100%"></a>
    </div>
    <br>
     <?php
      $city=$_GET['city'];
      ?>

    <div class="container border" id="abc">
      <div class="row" id="panel_m" >
        <div class="col-xs-7">
          <div class="polaroid rotate_right">
            <img src="plo1.png" alt="im2" class="ihg">
            <p class="caption">Volcanic Erruptions have increased majorly in past few years.</p>
          </div>

          <div class="polaroid rotate_left">
            <img src="plo2.png" alt="im1" class="ihg">
            <p class="caption">The purifying rate of rivers is decreasing.</p>
          </div>
        </div>
        <div class="col-xs-5">
          <div class="panel pancon2" >
            <div class="panel pancon">
              <h4>REGISTRATION</h4>
            </div>

            <div class="panel-body">
              <form action="P5.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Firstname Lastname" name="name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="e-mail" required>
                  </div>
                <div class="form-group">
                    <input type="tel" class="form-control" placeholder="Mobile No." name="mobile" required>
                </div>
                <div class="form-group">
                   <input type="text" class="form-control" id="date" name="dob" placeholder="Date Of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" required>
                </div>

                <div class="form-group">
                  <select id="events" name="event"class="form-control" >
                      <option value="Choose event">Choose event</option>
                    <?php
                      function OpenCon()
                      {
                       $dbhost = "localhost";
                       $dbuser = "id1root";
                       $dbpass = "Wp8";
                       $db = "id1p";
                       
                       $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
               
                       return $conn;
                      }
               
                      function CloseCon($conn)
                      {
                       $conn -> close();
                      }
                       
                      $conn = OpenCon();
                      if($conn === false)
                      {
                        die("ERROR: Could not connect. " . $conn->connect_error);
                      }

                        $sql3 = "SELECT * FROM Events_add where City='$city'";  
                        $result = $conn->query($sql3);
                        if ($result->num_rows> 0) {
                        
                          while($row = $result->fetch_assoc()) {
                           $en=$row["Event_Name"];
                          
                           ?>
                            <option value="<?php echo $en; ?>"><?php echo "$en"; ?></option>
                            <?php

                          }
                        }
                         CloseCon($conn);
                    ?>
                  </select>
                </div>
                <br>
                <input type="hidden" name="city" value="<?php echo $city ;?> ">
                <center>
                  <button type="submit" name="submit" class="btn btn-primary button2">Register</button><br>
                </center>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div id="sec1">
        <div id="sec11">
          <div>
              <a href="P61.html" target="_blank" class="navmar3"><span class="glyphicon glyphicon-phone"><p class="nsi"> Contact us</p></a>
          </div>
          <div>
              <a href="P71.html" target="_blank" class="navmar3"><span class="glyphicon glyphicon-book"><p class="nsi"> Legal</p> </a>
          </div>
        </div >
        <div id="sec12">
          <div id="sec121" class="nav navbar-nav">
              <a href="P33.html" target="_blank"><span><i class="fa fa-inr" id="gnm"></i></span></a><br>
              <a href="P33.html" target="_blank"><p class="nsi1">DONATE</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P41.html" target="_blank"><span class="glyphicon glyphicon-calendar"></span></a><br>
              <a href="P41.html" target="_blank"><p class="nsi1">EVENTS</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="index.html" target="_blank"><span class="glyphicon glyphicon-home"></span></a><br>
              <a href="idex.html" target="_blank"><p class="nsi1">HOME</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav ">
              <a href="P8.html" target="_blank"><span class="glyphicon glyphicon-heart"></span></a><br>
              <a href="P8.html" target="_blank"><p class="nsi1">ABOUT US</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P2.html" target="_blank"><span class="glyphicon glyphicon-picture"></span></a><br>
              <a href="P2.html" target="_blank"><p class="nsi1">GALLERY</p></a>
          </div>
        </div>
        <div id="sec13">
          <div>
              <p id="npad">Connect On-</p>
          </div>
          <div class="sec131">
              <a href="https://www.facebook.com/" target="_blank" alt="FB"><img src="pic1.png" style="max-width: 100%"></a>
          </div>
          <div class="sec131">
              <a href="https://www.instagram.com/?hl=en" target="_blank" alt="insta"><img src="pic3.png" style="max-width: 100%"></a>
          </div>
          <div class="sec131">
              <a href="https://twitter.com/login?lang=en" target="_blank" alt="twitter"><img src="pic2.png" style="max-width: 100%"></a>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>
