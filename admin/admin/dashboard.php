<!DOCTYPE html>
<html>

<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- filepath: d:\xampp\htdocs\Namkeen\admin\admin\dashboard.php -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" />


	<link rel="stylesheet" href="./css/dashboard.css">

</head>

<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name"><b>BALAJI</b> NAMKEEN
			<label for="checkbox">
				<i id="navbtn" class="fa-solid fa-bars"></i>
				<!-- <i class="fa-solid fa-user"></i> -->
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>

	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="../png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png">
				<h4>Admin</h4>
			</div>

			<ul>
				<li>
					<a href="dashboard.php">
						<i class="fa-solid fa-desktop"></i>
						<span>Dashboard</span>
					</a>
				</li>

				<li>
					<a href="products.php">
						<i class="fa-brands fa-product-hunt"></i>
						<span>Products</span>
					</a>
				</li>
				<li>
					<a href="orders.php">
						<i class="fa-solid fa-basket-shopping"></i>
						<span>Orders</span>
					</a>
				</li>
				<li>
					<a href="manage_users.php">
						<i class="fa-solid fa-users"></i>
						<span>users</span>
					</a>
				</li>
				<li>
					<a href="view_enquiries.php">
						<i class="fa-regular fa-comment"></i>
						<span>Enquiries</span>
					</a>
				</li>
				<li>
					<a href="view_admin.php">
						<i class="fa-solid fa-user-tie"></i>
						<span>Admin</span>
					</a>
				</li>

				<li>
					<a href="logout.php">
						<i class="fa-solid fa-power-off"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
			<h1>WELCOME</h1>
			<p>#Namkeen</p>
			<img src="./all-product-img/image.jpg" alt="Namkeen"
				style="max-width:1350px; width:100%; border-radius:24px; box-shadow:0 6px 24px rgba(0,0,0,0.12);">
		</section>
	</div>

</body>

</html>