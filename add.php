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
					<a href="#" class="logo"><strong>ADD STUDENT</strong></a>
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
						<h2>Add Student</h2>
					</header>
<h1 style="position: fixed;top: 150px;left: 30px;font-family: cursive;font-size: 100px;text-align: center;opacity: 0.5">I<br>M<br>T</h1>
	
	<h2 style="text-align: center;">
		<form action="add2.php" method="post"  style="display:block;width:775px;margin:0 auto;">
			<table>
				<tr>
					<td>Name : </td>
					<td><input type="text" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>" required></td>
				</tr>
				<tr>
					<td>Admission Number : </td>
					<td><input type="text" name="adm" value="<?php if(isset($_POST['adm'])){echo $_POST['adm'];}?>" required></td>
				</tr>
				<tr>
					<td>Admission Type : </td>
					<td>
						<div class="4u 12u$(small)">
							<input id="demo-priority-low" name="admt" type="radio" value="r">
								<label for="demo-priority-low">Reservation</label>
						</div>
						<div class="4u 12u$(small)">
							<input id="demo-priority-high" name="admt" type="radio" value="m">
												<label for="demo-priority-high">Management</label>

						</div>
					</td>
				</tr>
				<tr>
					<td>Contact : </td>
					<td><input type="tel" name="phno" maxlength="10" value="<?php if(isset($_POST['phno'])){echo $_POST['phno'];}?>" required></td>
				</tr>
				<tr>
					<td> e-mail : </td>
					<td><input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required></td>
				</tr>
				<tr>
					<td>Father : </td>
					<td><input type="text" name="fname" value="<?php if(isset($_POST['fname'])){echo $_POST['fname'];}?>" required></td>
				</tr>
				<tr>
					<td> Contact : </td>
					<td><input type="tel" name="fno" maxlength="10" value="<?php if(isset($_POST['fno'])){echo $_POST['fno'];}?>" required></td>
				</tr>
				<tr>
					<td>Mother : </td>
					<td><input type="text" name="mname" value="<?php if(isset($_POST['mname'])){echo $_POST['mname'];}?>" required></td>
				</tr>
				<tr>
					<td> Contact : </td>
					<td><input type="tel" name="mno" maxlength="10" value="<?php if(isset($_POST['mno'])){echo $_POST['mno'];}?>" required></td>
				</tr>
				<tr>
					<td>Religion : </td>
					<td><input type="text" name="rel" value="<?php if(isset($_POST['rel'])){echo $_POST['rel'];}?>"></td>
				</tr>
				<tr>
					<td>Caste : </td>
					<td><input type="text" name="cas" value="<?php if(isset($_POST['cas'])){echo $_POST['cas'];}?>"></td>
				</tr>
				<tr>
					<td>Address : </td>
					<td>
						<textarea name="addr" style="height: 150px;width: 375px" value="<?php if(isset($_POST['addr'])){echo $_POST['addr'];}?> "required></textarea></td>
				</tr>
			</table><br>
			<input type="submit" name="submit" value="SUBMIT" style="font-size: 20px;font-family: fantasy;position: fixed;top: 350px;right: 30px">
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