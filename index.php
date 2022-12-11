<?php
include 'config.php';

$sql = "SELECT * FROM `userlist` WHERE 1";
$result1 = mysqli_query($conn, $sql);
$userids=array();
$usertime=array();
$warning="Warning";
while ($row = mysqli_fetch_array($result1) ) { 
  
       echo $row['userId'];
	   array_push($userids,$row['userId']);
	   array_push($usertime,$row['Time']);
}

$soundsensorVal1=0;
$soundsensorVal2=90;
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">
	

	<title>MICRO LAB</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="chip">
			<i class='bx bxs-microchip'></i>
			<span class="text">MICRO LAB</span>
		</a>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>

					<span class="text">
						<h3>FAN</h3>
						<button type="submit" style="cursor: pointer; background-color:greenyellow ; width:8vh;">OFF</button>
						<button  type="submit" style=" cursor: pointer; background-color:greenyellow ;width:8vh;">ON</button>
					</span>

				</li>
				<li>
					<span class="text">

						<h3>LIGHT</h3>

						<button type="submit" style="cursor: pointer; background-color:greenyellow ; width:8vh;">OFF</button>
						<button  type="submit" style=" cursor: pointer; background-color:greenyellow ;width:8vh;">ON</button>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>User List</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>UserID</th>
								<!-- <th>Date</th> -->
								<th>Time</th>
								<!-- <th>Take Time</th> -->
							</tr>
						</thead>
						<tbody>
							
								<?php

                         for($i=0;$i<count($userids);$i++){

								echo '<tr>
								  
								<td>
									<img src="img/people.png">
									<p>'.$userids[$i].'</p>
								</td>
								<td>'.$usertime[$i].'</td>	
							</tr>';

						 }

							?>

							
						</tbody>
					</table>
				</div>
				<d iv class="todo">
					<div class="head">
						<h3>Talking Signal</h3>

					</div>
					<ul class="todo-list">
						<li class="completed">
						

							<p>Table           <?php if($soundsensorVal1>=25) echo '<p style="color:red">Making noise</p>'; 
							                                      else echo '<p style="color:green">OK</p>'; ?></p>
						</li>
						<!-- <li class="completed">
							<p>Table-2           <?php if($soundsensorVal2>=25) echo '<p style="color:red">Making noise</p>'; 
							                                      else echo '<p style="color:green">OK</p>'; ?></p>
						</li> -->
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>