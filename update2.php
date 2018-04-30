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
					<a href="#" class="logo"><strong>FEE DETAILS</strong></a>
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
						<h3>Select</h3>
					</header>
<a href="index.html"><img src="images/home.png" style="position: fixed;height: 60px;widows: 60px;bottom: 70px;right:60px"></a>
	
	<h2>
	<?php
	$adm=$_POST['adm'];
			$servername = "localhost";
			$username = "Admin@IMT";
			$password = "IMTadmin123";
			$dbname = "fee";
			$conn=new mysqli($servername, $username, $password,$dbname);
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql="SELECT name,adm,admt FROM student WHERE student.adm='$adm'";
			$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						if($row['admt']=='m')
						{ 
							$temp="Management";
						}
						else
						{
							$temp="Reservation";
						}
						$name=$row["name"];
						$adm=$row["adm"];
					}
				}
				else
				{
					die("Invalid Admission Number");
				}
			$conn->close();
	?>
	<fieldset style="width: 300px;position: fixed;top: 300px;left: 30px">
		<legend style="font-family: cursive;text-align: center;">STUDENT DETAILS</legend>
		<fieldset style="text-align: center;">
			<?php
				echo "<br>".$name."<br>".$adm."<br>".$temp;
			?>
		</fieldset>
	</fieldset>

	<h2 style="text-align: center">
		<?php
			if(isset($_POST['rno']))
			{
				$servername = "localhost";
				$username = "Admin@IMT";
				$password = "IMTadmin123";
				$dbname = "fee";

				$conn = new mysqli($servername, $username, $password,$dbname);
				if ($conn->connect_error) 
				{
    				die("Connection failed: " . $conn->connect_error);
				}
				$sem=$_POST['sem'];
				$dat=$_POST['date'];
				$rno=$_POST['rno'];
				$amt=$_POST['amt'];
				$sql="INSERT INTO record (sem,dat,rno,amt) VALUES ('$sem','$dat','$rno','$amt')";
				if($conn->query($sql)===TRUE)
				{
					echo "<img src=\"check.png\" style=\"height: 50px;width: 50px;position: fixed;top: 30px;right: 30px\">";
				}
				else
				{
					echo "<img src=\"checka.png\" style=\"height: 50px;width: 50px;position: fixed;top: 30px;right: 30px\">";
				}
				$conn->close();






				$conn = new mysqli($servername, $username, $password,$dbname);
				if ($conn->connect_error) 
				{
    				die("Connection failed: " . $conn->connect_error);
				}
				$adm=$_POST['adm'];
				$sql="INSERT INTO inter (adm,rno) VALUES ('$adm','$rno')";
				if($conn->query($sql)===TRUE)
				{
					echo "<img src=\"check.png\" style=\"height: 50px;width: 50px;position: fixed;top: 30px;right: 60px\">";				}
				else
				{
					echo "<img src=\"checka.png\" style=\"height: 50px;width: 50px;position: fixed;top: 30px;right: 60px\">";	
				}
				$conn->close();






				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) 
				{
    				die("Connection failed: " . $conn->connect_error);
				}
				$sql="SELECT i.sem,i.dat,i.rno,i.amt FROM record AS i INNER JOIN inter ON i.rno=inter.rno WHERE inter.adm ='$adm'";
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					echo "SEM ........ DATE ........ RECEIPT NO ........ AMOUNT<br>";
					while($row = $result->fetch_assoc())
					{
						echo "<br>".$row["sem"]."__________".$row["dat"]."__________".$row["rno"]."__________".$row["amt"];
					}
				}
				$conn->close();
			}
		?>
	</h2>
		<form action="" method="post" style="display:block;width:550px;margin:0 auto;">
			<table>
				<tr>
					<td><input type="hidden" style="opacity: 0" name="name" value="<?php echo $_POST['name'];?>" readonly></td>
					<td></td>
				</tr>
				<tr>
					<td><input type="hidden" style="opacity: 0" name="adm" value="<?php echo $_POST['adm'];?>" readonly></td>
				</tr>
				<tr>
					<td>Semester :</td>
					<td>
						<select name="sem" style="width: 180px;height: 40px" required>
							<option value="1">Sem 1</option>
							<option value="2">Sem 2</option>
							<option value="3">Sem 3</option>
							<option value="4">Sem 4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Date :</td>
					<td><input type="Date" name="date" style="height: 40px;width: 180px" required></td>
				</tr>
				<tr>
					<td>Receipt Number :</td>
					<td><input type="text" name="rno" style="height: 40px;width: 180px" required></td>
				</tr>
				<tr>
					<td>Amount</td>
					<td><input type="Number" name="amt" style="height: 40px;width: 180px" required=""></td>
				</tr>
			</table>
			<br><br>

				<li>
					<input type="submit" name="submit" value="Submit" class="button special small" type="submits" style="position: fixed;top: 350px;right:30px"></li>



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
						<a href="http://www.github.com/vishnuchandrappan"><img src="images/git.png" width="32px" height="32px"></a>
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