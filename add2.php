<!DOCTYPE HTML>
<html>
	<head>
		<title>IMT | View Student</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="logo"><strong>Confirm Details</strong></a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="read.html">View</a>
						<a href="update.php">Update</a>
						<a href="add.php">Add</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2>Confirm Details</h2>
					</header>

	<h1 style="position: fixed;top: 150px;left: 30px;font-family: cursive;font-size: 100px;text-align: center;opacity: 0.5">I<br>M<br>T</h1>
	<h2 style="text-align: center;">

		<br>
			<li><a href="update.php" class="button special" style="position: fixed;
			bottom: 30px;right: 30px">Continue</a></li>
		
			<?php
				$servername = "localhost";
				$username = "uname";
				$password = "passwd";
				$db="fee";
				$tablename="student";
				$conn = new mysqli($servername, $username, $password,$db);
				if ($conn->connect_error) 
				{
   		 			echo "Connection Error";
				}
				$name=$_POST['name'];
				$adm=$_POST['adm'];
				$admt=$_POST['admt'];
				$phno=$_POST['phno']; 
				$email=$_POST['email'];
				$fname=$_POST["fname"];
				$fno=$_POST['fno'];
				$mname=$_POST['mname'];
				$mno=$_POST['mno'];
				$rel=$_POST['rel'];
				$cas=$_POST['cas'];
				$addr=$_POST['addr'];
				$sql = "INSERT INTO student(name,adm,admt,phno,email,fn,fno,mname,mno,rel,cas,addr) 
				VALUES ('$name','$adm','$admt','$phno','$email','$fname','$fno','$mname','$mno','$rel','$cas','$addr')";
				if($name)
				{
					if($conn->query($sql)===TRUE)
					{

						echo "<img src=\"check.png\" style=\"height: 200px;width: 200px;position: fixed;top: 30px;right: 30px\">";
					}
					else
					{
						echo "<img src=\"checka.png\" style=\"height: 200px;width: 200px;position: fixed;top: 30px;right: 30px\">";
						die("Student Already Present in Database <br>Click Continue");
					}
				}
				$conn->close();
			?>
			<br>
		<form action="update2.php" method="post"  style="display:block;width:600px;margin:0 auto;">
			<table>
				<tr>
					<td>Name : </td>
					<td><input type="text" name="name" value="<?php echo $_POST['name'];?>" readonly></td>
				</tr>
				<tr>
					<td>Admission Number : </td>
					<td><input type="text" name="adm" value="<?php echo $_POST['adm'];?>" readonly></td>
				</tr>
				<tr>
					<td>Admission Type : </td>
					<td>
							<div class="4u 12u$(small)">
							<input id="demo-priority-low" name="admt" readonly checked="" type="radio" value="<?php echo $_POST['admt'];?>">
								<label for="demo-priority-low"><?php if($_POST['admt']=='r'){echo "Reservation";}else{echo "Management";} ?></label>
						</div>
					</td>
				</tr>
				<tr>
					<td>Contact : </td>
					<td><input type="tel" name="phno" value="<?php if(isset($_POST['phno'])){echo $_POST['phno'];}?>" readonly></td>
				</tr>
				<tr>
					<td> e-mail : </td>
					<td><input type="email" name="email" value="<?php echo $_POST['email'];?>" readonly></td>
				</tr>
				<tr>
					<td>Father : </td>
					<td><input type="text" name="fname" value="<?php echo $_POST['fname'];?>" readonly></td>
				</tr>
				<tr>
					<td> Contact : </td>
					<td><input type="tel" name="fno" maxlength="10" value="<?php echo $_POST['fno'];?>" readonly></td>
				</tr>
				<tr>
					<td>Mother : </td>
					<td><input type="text" name="mname" value="<?php echo $_POST['mname'];?>" readonly></td>
				</tr>
				<tr>
					<td> Contact : </td>
					<td><input type="tel" name="mno" maxlength="10" value="<?php echo $_POST['mno'];?>" readonly></td>
				</tr>
				<tr>
					<td>Religion : </td>
					<td><input type="text" name="rel" value="<?php echo $_POST['rel'];?> " readonly></td>
				</tr>
				<tr>
					<td>Caste : </td>
					<td><input type="text" name="cas" value="<?php echo $_POST['cas'];?>" readonly></td>
				</tr>
				<tr>
					<td>Address : </td>
					<td><input type="text" style="width: 190px;height: 150px" name="addr" value="<?php echo $_POST['addr'];?>" readonly></textarea></td>
				</tr>
			</table>
			
			<input type="submit" name="submit" value="Confirm" style="font-size: 20px;font-family: fantasy;position: fixed;top: 350px;right: 30px">
		</form>
	</h2>

				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<div class="copyright">
						&copy; Design: <a href="http://www.github.com/vishnuchandrappan"> Vishnu Chandrappan</a><br><a href="https://www.facebook.com/vishnu.chandrappan.92"><img src="images/fb.png " height="30px" width="30px"></a>
						<a href="https://www.t.me/vishnuchandrappan"><img src="images/tgm.png" width="32px" height="32px"></a>
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
