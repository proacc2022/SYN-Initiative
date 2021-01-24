<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SYN | Events</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pstyle.css">
    <link rel="stylesheet" type="text/css" href="pstyle3.css">
  </head>
  <body>
    <div id="logowe">
      <a href="index.html"><img src="pl1.png" alt="Logo" style="max-width: 100%"></a>
    </div>
    <br>
    <main>
      <h2 id="evn"><u>UPCOMING EVENTS</u></h2>
      <div id=scroll>
        <?php
           if(isset($_POST["submit"]))
          {
            $city=$_POST["city"];
            function OpenCon()
            {
               $dbhost = "localhost";
               $dbuser = "id1oot";
               $dbpass = "Wpp8";
               $db = "id1wp";
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

           

            if ($result->num_rows> 0) 
            {
              while($row = $result->fetch_assoc()) 
              {
                $en=$row["Event_Name"];
                $en1=$row["Day"];
                $en2=$row["Dates"];
                $en3=$row["Tim_e"];
                $en4=$row["Description"];

              ?>

              <div id="div3">
                <a href='P43.php?city=<?php echo $city;?>' target="_blank"><p class="hing1"><b><?php echo $en;?></b></p></a>
                <div id="hin">
                  <p class="hing2"><?php echo $en1; ?> , <?php echo $en2; ?></p>
                  <p class="hing2"><?php echo $en3; ?></p>
                  </div>
                  <p class="hing3"><?php echo $en4; ?></p>

              </div>
              <?php
              }
            }
            CloseCon($conn);
          }
        ?>
      </div>
    </main>
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
              <a href="P33.html" ><span><i class="fa fa-inr" id="gnm"></i></span></a><br>
              <a href="P33.html" ><p class="nsi1">DONATE</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P41.html" ><span class="glyphicon glyphicon-calendar"></span></a><br>
              <a href="P41.html" ><p class="nsi1">EVENTS</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="index.html" ><span class="glyphicon glyphicon-home"></span></a><br>
              <a href="index.html" ><p class="nsi1">HOME</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav ">
              <a href="P8.html" ><span class="glyphicon glyphicon-heart"></span></a><br>
              <a href="P8.html" ><p class="nsi1">ABOUT US</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P2.html" ><span class="glyphicon glyphicon-picture"></span></a><br>
              <a href="P2.html" ><p class="nsi1">GALLERY</p></a>
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
