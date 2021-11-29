<html>
<head><title>contact us</title></head>
<link rel="stylesheet" type="text/css" href="style2.css">
<center>
	<body>
    <div class="menu-bar">
        <ul>
        <li><a href="index.php">home</a></li>
            <li><a href="aboutusss.html">about us</a></li>
            <li><a href="tesmonails.html">testmonials</a></li>
            <li><a href="gallery.html">gallery</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="login.html">View</a></li>
        </ul>
        </div>
        <section class="contact">
            
                <h2>Contact us</h2> 
                <div class="container">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"><i class="fa fa-map" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Adress</h3>
                            <p>320 Neharu nagar<br>Mundgod<br>tq:Mundgod dist:UK</p>
</div>
</div>
            <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>phone</h3>
                            <p>5467975456</p>
</div>
</div>
                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>email</h3>
                            <p>abcxyz@gmail.com</p>
</div>
</div>
</div>
</div>
	
	<form action="contactus.php" method="post">
		<table border="1" width="300" height="150">
			
			<tr>
				<td> name</td>
				<td><input type="text" name="name" required></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="email" name="email" required></td>
			</tr>
			<tr>
				<td>type message</td>
				<td><input type="text" name="msg" required></td>
			</tr>
			<tr>                
			 <td colspan="5" align="center">   <input type="submit" name="signup" value="signup"></td>
		</tr>
		
		</table>
	</form>
<!-- Code injected by live-server -->
<script type="text/javascript">
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script></body>
</html>

<?php
session_start();
$conn=mysqli_connect('localhost','root','','registration');
if(!$conn){
	die('could not connect mysql:' .mysql_error());
}

  if(isset($_POST['signup']))
  {
  	 
     $name=$_POST['name'];
     $email=$_POST['email'];
     $msg=$_POST['msg'];	

     $sql="insert into contactus (name,email,msg) values ('$name','$email','$msg')";
     if(mysqli_query($conn,$sql)){
     		echo "<h3>Thank you for contacting us</h3>";
     }
     else{
     	echo "error:".$sql ."<br>".mysqli_error($conn);
     }
  }

?>		