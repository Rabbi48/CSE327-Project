<!DOCTYPE html>
<html>

<head>
	<title>Add Representatives</title>

	<link rel="stylesheet" type="text/css" href="addForm.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		* {
			font-family: Arial;
			margin: 0px;
			padding: 0px;
		}

		.topnav {
			overflow: hidden;
			text-align: center;
			margin-top: 10px;
			margin-bottom: 10px;
		}

		.topnav p {
			color: #750b49;
			font-size: 50px;
		}


		.navbar {
			width: 100%;
			position: sticky;
			z-index: 1;
			top: 0;
			left: 0;
			display: flex;
			flex-direction: row;
			background-color: #534c4c;
			overflow-y: auto;
		}

		.navbutton {
			width: 150px;
			height: 40px;
			text-align: center;
			line-height: 40px;
			background: #383838;
			color: #fff;
			border-radius: 25px;
			text-transform: capitalize;
			border: none;
			cursor: pointer;
			display: block;
			margin: -2px auto;

			box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-moz-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-webkit-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-o-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-ms-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
		}

		.form {
			width: 100%;
			max-width: 450px;
			background: rgb(255, 255, 255);
			border-radius: 20px;
			display: flex;
			flex-direction: column;
			align-items: left;
			padding: 40px 50px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
			margin: 0 auto;
		}

		.navbar a {
			text-decoration: none;
			font-size: 25px;
			color: white;
			padding: 10px;
			margin-left: 20px;
			height: 10vh;
			width: 100%;
			margin-top: 20px;
			display: block;
		}

		.navbar p {
			font-size: 25px;
			color: white;
			margin-bottom: 0px;
			padding: 10px;
			margin-top: 30px;
			margin-left: 20px;
			margin-bottom: 0px;
		}

		.navbar a:hover {
			color: #778DA9;
		}

		.element1 {
			margin-top: 30px;
		}

		.topbar {
			margin-top: 20px;
			margin-left: 315px;
			margin-bottom: 20px;
			display: flex;
			flex-direction: row;
			align-items: center;
			align-content: center;
			justify-content: center;
		}

		.go {
			background-color: #0D1B2A;
			padding: 5px;
			font-size: 17px;
			background-color: #0D1B2A;
			border: 2px solid #0D1B2A;
			border-radius: 10px;
			color: white;
		}


		table {
			margin-top: 0px;
			margin-left: 350px;
			color: #0D1B2A;
			width: 70%;
			text-align: center;
		}

		td {
			border: 1px solid #ddd;
			padding: 5px;
		}

		tr:hover {
			background-color: #778DA9;
		}

		th {
			border: 1px solid #ddd;
			padding-top: 10px;
			padding-bottom: 10px;
			background-color: #0D1B2A;
			color: white;
		}

		table button {
			background-color: #fff;
			border: none;
			padding: 2px;
		}

		.quantity {
			padding: 1px;
			margin: 0;
		}

		input[type=text],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 200px;
			height: 40px;
			text-align: center;
			line-height: 40px;
			background: #e64d00;
			color: #fff;
			border-radius: 25px;
			text-transform: capitalize;
			border: none;
			cursor: pointer;
			display: block;
			margin: 20px auto;

			box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-moz-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-webkit-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-o-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
			-ms-box-shadow: 0 5px 30px 0px rgba(58, 58, 58, 0.2);
		}

		input[type=number],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=date],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=password],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
	</style>
</head>

<body>
	<div class="navbar">
		<a href="home"><button class=navbutton>Home</button></a>
		<a href="products"><button class=navbutton>Products</button></a>
		<a href="sale"><button class=navbutton>Sales</button></a>
		<a href="shortage"><button class=navbutton>Shortage</button></a>
		<a href="update"><button class=navbutton>Update</button></a>
		<a href="employees"><button class=navbutton>Employees</button></a>
		<a href="companies"><button class=navbutton>Companies</button></a>
		<a href="representatives"><button class=navbutton>Representatives</button></a>
		<a href="logout"><button class=navbutton>log out</button></a>
	</div>
	<div class="topnav">

		<p style="font-size: 50px;">Add a Representative</p>
	</div>



	<div class="form">
		<form action="addRepresentatives" method="post">
			<label for="first_name">First Name</label>
			<input type="text" name="first_name" required>

			<label for="last_name">Last Name</label>
			<input type="text" name="last_name" required>

			<label for="phone_number">Phone Number</label>
			<input type="text" name="phone_number" required>

			<label for="company_name">Company Name</label>
			<input type="text" name="company_name" required>

			<input type="submit" value="Submit">
		</form>
	</div>
</body>

</html>
