<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SYN | Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="pstyle.css">
  </head>
  <body>
    <div id="logowe">
      <a href="index.html"><img src="pl1.png" alt="Logo" style="max-width: 100%"></a>
    </div>
    <br>

    <?php
    if(isset($_POST["submit"]))
    {
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $email=$_POST["e-mail"];
        $x=strlen($mobile);
        $query=null;
        $query=$_POST["query"];
        $query1=null;
        $query1=$_POST["query1"];
        if(empty($name))
        {
        echo "<p class='abc'>"."Name not entered"."</p>"; 
        }
        elseif (empty($email))
        {
        echo "<p class='abc'>"."Email is empty"."</p>"; 
        } 
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
        { 
        echo "<p class='abc'>"."Not valid email address"."</p>"; 
        } 
        elseif (empty($mobile)) 
        {
          echo  "<p class='abc'>"."Mobile Number not entered"."</p>";
        }
        elseif ($x<10)
        {
          echo "<p class='abc'>"."Mobile Number incorrect"."</p>";
        }
        elseif ($x>10)
        {
          echo  "<p class='abc'>"."Mobile Number incorrect"."</p>";
        }
        else
        {
            function OpenCon()
            {
               $dbhost = "localhost";
               $dbuser = "root";
               $dbpass = "-28";
               $db = "id1525";
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

            $sql = "CREATE TABLE if not exists Contact (
            Name VARCHAR(50) NOT NULL, 
            Email VARCHAR(70) NOT NULL,
            Mobile VARCHAR(10) NOT NULL Primary key,
            Query VARCHAR(100) NOT NULL)";
            $conn->query($sql);
            $query2="$query"."$query1";
            $sql1="INSERT INTO Contact SET Name='$name',Email='$email',Mobile='$mobile',Query='$query2'";
            if($conn->query($sql1)===true)
            {
                echo "<p class='abc'>" . "Your complaint is registered.Our executive will contact your shortly.." . "</p>";
            }
            else
            {
                echo "<p class='abc'>" . "You complaint is already registered." . "</p>";
            }
            CloseCon($conn);
            }

        }
    ?>
     <?php
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail= new PHPMailer;
	
	$mail->Host='smtp.gmail.com';
	$mail->Port=587;
	$mail->SMTPAuth=true;
	$mail->SMTPSecure='tls';
    error_reporting(E_ALL ^ E_WARNING); 
	$mail->Username='synive@gmail.com';
	$mail->Password='SYtive';

	$mail->setFrom('syninitiative@gmail.com','Ok');
	$mail->addAddress($email);
	$mail->addReplyTo('syninitiative@gmail.com');

	$mail->isHTML(true);
	$mail->Subject='Query Received';
	$mail->Body='<h1 align=center>We have received your Query.</h1><br><h4 align=center>Contact us at : +91 99988-99988 <br>Mail us at synintiative@gmail.com</h4>';

		if(!$mail->send()){
		echo  "<p class='abc3'>"."Mail is not sent. "."</p>";
	}
	else{
		echo  "<p class='abc3'>"."We have sent you a mail regarding the issue."."</p>";
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
