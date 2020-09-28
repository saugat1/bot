<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('SardarMKhan' => 'SardarMKhan','SardarMKhan' => 'SardarMKhan','SardarMKhan' => 'SardarMKhan');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Login page</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="placeholder.css">
</head>


<body style="background-color: #ccc;">
      <br><br>
      
  <div id="header"><script src=""></script><hr></div>
<center><marquee direction="left" width="80%"> XD-TOPPERS : Powered By <font color ="red">❤️</font>SARDAR MUHAMMAD KHAN<font color ="red">❤️</font> Contact For Any Help, Thanks</marquee></center></br>
<hr width="60%"></br>
<center>
<div class="CSS">
<center> <div class="SARDAR MUHAMMAD KHAN"><img <a href="https://www.facebook.com/sardarmuhammad.khan.528" alt="" target="_blank"><img src="https://graph.facebook.com/sardarmuhammad.khan.528/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="240" height="240"></a> <a href="https://www.facebook.com/sardarmuhammad.khan.528" alt="SARDAR MUHAMMAD KHAN" target="_blank"><img src="https://graph.facebook.com/sardarmuhammad.khan.528/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="120" height="120"></a> _ <a href="https://www.facebook.com/sardarmuhammad.khan.528" alt="abdlwafi" target="_blank"><img src="https://graph.facebook.com/sardarmuhammad.khan.528/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="120" height="120"></a> <a href="https://www.facebook.com/sardarmuhammad.khan.528" alt="SARDAR MUHAMMAD KHAN" target="_blank"><img src="https://graph.facebook.com/sardarmuhammad.khan.528/picture?type=large" alt="Designer_&amp;_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 7px rgb(255, 0, 0); padding: 8px;" width="240" height="240"></a></marquee><br><br><center><font face="Iceberg">
<font color="red" size="5"><marquee bgcolor="orange" direction="left" loop="infinite" width="20%">TOKEN  BY SARDAR MUHAMMAD KHAN </strong></marquee><br><br><center><a href="https://www.facebook.com/sardarmuhammad.khan.528" target="_blank">
<input class="button button1" type="button1" value="F A C E B O O K"> </a><a href="https://instagram.com/sardarmuhammad.khan.528" target="_blank">
<input class="button button1" type="button1" value=" I N S T A"> </a><a<br>

<center>
<div class="login">
  <marquee behavior="scroll" direction="right" scrollamount="8" scrolldelay="1"><strong><font style="login: 1px 1px black; color:;" size="4">SARDAR MUHAMMAD</font></strong></center></marquee>

<marquee behavior="right" direction="scroll" scrollamount="8" scrolldelay="1"><strong><font style="login: 1px 1px YELOWW; color:;" size="4">KHAN</font></strong></center></marquee>
  <center><font color="RED" size="+1"><marquee bgcolor="" direction="left"
loop="infinite" width="60%"><strong>DESIGNED BY SARDAR MUHAMMAD KHAN
</strong></marquee></font></center></div></div></font>

   
<div class="huss">
    
    <div class="huss">
        <div class="panel-heading"><center><h1 style="color: white;"><i><b>Login To Continue</b></i></h1></center></div>
        <div class="panel-body">
        	<center>
<form action="" method="post" name="Login_Form">
<div class="form-group">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    </div>
      <!-- UserName Field -->
    <div class="huss">
    	<label for="Username"><i>Username</i> : </label>
        <input style="color:no; background-color: #078edd; padding: 5px; text-align: center;" class="form-control" id="Username" type="text" name="Username" placeholder="Enter Username">
    </div>  <br>
    <!-- Password Field  -->
    <div class="form-group">
        <label for="Password"><i>Password </i>: </label>

        <input  style="color:none; background-color: #078edd; padding: 5px; text-align: center;" class="form-control" type="password" id="Password" name="Password" placeholder="Enter Password">
    </div> <br>
    <div class="form-group">
        <button class="button button1" type="submit" name="Submit" style="padding: 2px;">Login</button>
    </div>
    </div>
        </div>
            </div>
</form></center>
    
    </div></div>
</body>
</html>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="http://cdn.vietdesigner.net/data/codes/snowstorm.js"></script>
<script language="javascript" type="text/javascript" src="http://cc-lemon.yn.lt/lovemoon/Dpadhome.js"></script>
<div class="kddtop"> <div class="kddtut"> <p>