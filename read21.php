<!DOCTYPE HTML>
<html>
	<head>
		<title>IMT | View Student</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
<a href="index.html">
		<img src="images/home.png" style="position: fixed;height: 60px;widows: 60px;bottom: 100px;right:90px"></a>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="logo"><strong>STUDENT DETAILS</strong></a>
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
			<section id="three" class="wrapper" style="text-align: center">
				<div class="inner">
					<header class="align-center">
						<h2>Student Details</h2>
					</header>

	<a href="index.html"><li><a href="read.html" class="button special" style="position: fixed;
			bottom: 30px;right: 30px;">Continue</a></li></a>
	<h1 style="position: fixed;top: 150px;left: 30px;font-family: cursive;font-size: 100px;text-align: center;opacity: 0.5">I<br>M<br>T</h1>
	<h2>
	<?php
	$adm=$_POST['adm'];
			$servername = "localhost";
			$username = "uname";
			$password = "passwd";
			$dbname = "fee";
			$conn=new mysqli($servername, $username, $password,$dbname);
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql="SELECT name,adm,admt,phno,email,fn,fno,mname,mno,rel,cas,addr FROM student WHERE student.adm='$adm'";
			$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						if($row['admt']=='r')
							{ $temp="Reservation";}
						else{$temp="Management";}
						echo "<br>Name : ".$row["name"]."<br>Admission Number : ".$row["adm"]."<br>Admission Type : ".$temp."<br>Contact : ".$row["phno"]."<br>e-mail : ".$row["email"]."<br>Father : ".$row["fn"].". .  Contact : ".$row["fno"]."<br>Mother : ".$row["mname"].". .  Contact : ".$row["mno"]."<br>Relegion : ".$row["rel"]." - : ".$row["cas"]."<br>Address : ".$row["addr"];
					}
				}
				else
				{
					die("Invalid Admission Number<br>Click Continue");
				}
			$conn->close();
	?>
	</h2>
	<h2 style="display:block;width:1000px;margin:0 auto;"><br><br><br><fieldset style="width: 1000px">
		<legend>Fee Detials</legend><fieldset>
		<?php
			$myfile = fopen("jihk.txt", "r") or die("Unable to open file!");
			$myfilf = fopen("jhij.txt", "r") or die("Unable to open file!");
			if ($temp=='Reservation') 
			{
				$s11=(int)fgets($myfile);
				$s12=(int)fgets($myfile);
				$s13=(int)fgets($myfile);
				$s14=(int)fgets($myfile);
			}
			else
			{
				$s11=(int)fgets($myfilf);
				$s12=(int)fgets($myfilf);
				$s13=(int)fgets($myfilf);
				$s14=(int)fgets($myfilf);
			}
			fclose($myfile);
			fclose($myfilf);


			$adm=$_POST['adm'];
			$servername = "localhost";
			$username = "Admin@IMT";
			$password = "IMTadmin123";
			$dbname = "fee";
			$conn = new mysqli($servername, $username, $password,$dbname);
			if ($conn->connect_error) 
			{
    			die("Connection failed: " . $conn->connect_error);
			}
			$sql="SELECT i.sem,i.dat,i.rno,i.amt FROM record AS i INNER JOIN inter ON i.rno=inter.rno WHERE inter.adm ='$adm'";
			$s1=0;
			$s2=0;
			$s3=0;
			$s4=0;
				$result = $conn->query($sql);
				if($result->num_rows > 0)
				{
					echo "_ _ _ __SEM_ _ __ _ DATE_ __ _ __ _RECEIPT NO_ __ _AMOUNT_ _ _<br>";
					while($row = $result->fetch_assoc())
					{
						if($row["sem"]=='1')
						{
							$s1=$s1+(int)$row["amt"];
						}
						elseif ($row["sem"]=='2') 
						{
							$s2=$s2+(int)$row["amt"];
						}
						elseif ($row["sem"]=='3') 
						{
							$s3=$s3+(int)$row["amt"];
						}
						else
						{
							$s4=$s4+(int)$row["amt"];
						}
						echo "<br>. . . . .".$row["sem"].". . . .. . .".$row["dat"].". .. . .. .".$row["rno"].". . .. . .".$row["amt"].". . . . .";
					}
				}
				$conn->close();
				$s21=$s11-$s1;
				$s22=$s12-$s2;
				$s23=$s13-$s3;
				$s24=$s14-$s4;
		?>
	</h2>
	<?php
				if (s21==0 and $s1!=0) 
				{
					echo '<img src="images/green.png" style="position: fixed;top:48px;right: 30px;width:30px;height:30px">';
				}
				else 
				{
					echo '<img src="images/red.png" style="position: fixed;top:48px;right: 30px;width:30px;height:30px">';
				}

				if (s22==0 and $s2!=0) 
				{
					echo '<img src="images/green.png" style="position: fixed;top:81px;right: 30px;width:30px;height:30px">';
				}
				else 
				{
					echo '<img src="images/red.png" style="position: fixed;top:81px;right: 30px;width:30px;height:30px">';
				}

				if (s23==0 and $s3!=0) 
				{
					echo '<img src="images/green.png" style="position: fixed;top:114px;right: 30px;width:30px;height:30px">';
				}
				else 
				{
					echo '<img src="images/red.png" style="position: fixed;top:114px;right: 30px;width:30px;height:30px">';
				}

				if (s24==0 and $s4!=0) 
				{
					echo '<img src="images/green.png" style="position: fixed;top:147px;right: 30px;width:30px;height:30px">';
				}
				else 
				{
					echo '<img src="images/red.png" style="position: fixed;top:147px;right: 30px;width:30px;height:30px">';
				}

		?>

	
	<h3>
		
	</h3>

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
