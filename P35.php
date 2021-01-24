<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SYN | Payment Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pstyle.css">
    <style>          
      .button2{
        float: center;
        background-image: none;
        background-color: green;
        color: white;
      }
      .panel > .panel-heading {
  	    background-image: none;
  	    background-color: green;
  	    color: white;
  	    text-align: center;
  	    border-color: green;
		  }
      .container{
        margin-top: 60px;
      }
      #para{
        margin-top: 200px;
        text-align: center;
        color: green;
      }
    </style>
  </head>
  <body>
    <div id="logowe">
      <a href="index.html"><img src="pl1.png" alt="Logo" style="max-width: 100%"></a>
    </div>
    <br>

    <?php
    if(isset($_POST["submit"]))
    {
        $amount=$_POST["amount"];

    $mobile=$_POST["mob"];
    $method=$_POST["met"];
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "i7_root";
     $dbpass = "Wp28";
     $db = "id15p";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
     
    $conn = OpenCon();
     if($conn === false){
        die("ERROR: Could not connect. " . $conn->connect_error);
    }
    $sql1 = "SELECT amount FROM donation WHERE mobile='$mobile'";

    $sql1 = "SELECT amount FROM donation WHERE mobile='$mobile'";
    $result = $conn->query($sql1);
     if($result)
    {
    if ($result->num_rows >0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $amount1=$row["amount"];
      }
    }
    }
    $amount=$amount + $amount1;

     $sql4 = "UPDATE donation SET amount='$amount' where mobile='$mobile' ";
      $conn->query($sql4) ;
           $sql5 = "UPDATE donation SET method='$method' where mobile='$mobile' ";
      $conn->query($sql5) ;

    $sql = "SELECT name FROM donation WHERE mobile='$mobile'";
    $result = $conn->query($sql);
     if($result)
    {
    if ($result->num_rows >0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $name=$row["name"];
      }
    }
  }
   if($amount==0)

         echo "<p class='abc'>"."Your payment is unsuccessful".$name."</p>";

     else

         echo "<p class='abc'>"."Payment has been successful. Thank you ".$name." for your Donation."."</p>";

     CloseCon($conn);
    }
    ?>
    
    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div id="sec1">
        <div id="sec11">
          <div>
              <a href="P61.html"   class="navmar3"><span class="glyphicon glyphicon-phone"><p class="nsi"> Contact us</p></a>
          </div>
          <div>
              <a href="P71.html"   class="navmar3"><span class="glyphicon glyphicon-book"><p class="nsi"> Legal</p> </a>
          </div>
        </div >
        <div id="sec12">
          <div id="sec121" class="nav navbar-nav">
              <a href="P33.html"  ><span><i class="fa fa-inr" id="gnm"></i></span></a><br>
              <a href="P33.html"  ><p class="nsi1">DONATE</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P41.html"  ><span class="glyphicon glyphicon-calendar"></span></a><br>
              <a href="P41.html"  ><p class="nsi1">EVENTS</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="index.html"  ><span class="glyphicon glyphicon-home"></span></a><br>
              <a href="index.html"  ><p class="nsi1">HOME</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav ">
              <a href="P8.html"  ><span class="glyphicon glyphicon-heart"></span></a><br>
              <a href="P8.html"  ><p class="nsi1">ABOUT US</p></a>
          </div>
          <div id="sec121" class="nav navbar-nav">
              <a href="P2.html"  ><span class="glyphicon glyphicon-picture"></span></a><br>
              <a href="P2.html"  ><p class="nsi1">GALLERY</p></a>
          </div>
        </div>
        <div id="sec13">
          <div>
              <p id="npad">Connect On-</p>
          </div>
          <div class="sec131">
              <a href="https://www.facebook.com/"  target="_blank" alt="FB"><img src="pic1.png" style="max-width: 100%"></a>
          </div>
          <div class="sec131">
              <a href="https://www.instagram.com/?hl=en"  target="_blank" alt="insta"><img src="pic3.png" style="max-width: 100%"></a>
          </div>
          <div class="sec131">
              <a href="https://twitter.com/login?lang=en" target="_blank"  alt="twitter"><img src="pic2.png" style="max-width: 100%"></a>
          </div>
        </div>
      </div>
    </nav>
  </body>
</html>
    
