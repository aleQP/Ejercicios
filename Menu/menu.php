<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> 
	<title>Menu Test 1</title>
</head>
<body>

<style>

	/*DISEÑO GENERAL*/
	*{
		margin: 0;
		padding: 0;
		font-family: 'Roboto', sans-serif;
	}
	nav ul{
		list-style: none;
		padding: 0;
	}
	nav ul li{
		line-height: 3.5em;
		padding: 0 2.5em;
		border: 1px solid red;
	}
	nav a{
		color: #000;
		display: block;
		text-decoration: none;
	}

	/*OCULTAR*/
	nav ul ul{
		display: none;
	}

	/*DISEÑO PRIMER NIVEL*/
	nav > ul {
		width: 100%;
		background: #2e758c;
		display: table;
	}
	nav > ul > li{
		float: left;
	}
	/*DISEÑO SEGUNDO NIVEL*/
	/*DISEÑO TERCER NIVEL*/





</style>
	
	<nav>
		<ul>
			<li><a href="#">Item 1</a></li>
			<li><a href="#">Item 2</a></li>
			<li>
				<a href="#">Item 3</a>
				<ul>
					<li><a href="#">SubItem 1</a></li>
					<li>
						<a href="#">SubItem 2</a>
						<ul>
							<li><a href="#">Sub-subItem 1</a></li>
							<li><a href="#">Sub-subItem 2</a></li>
							<li><a href="#">Sub-subItem 3</a></li>
						</ul>
					</li>
					<li><a href="#">SubItem 3</a></li>
					<li><a href="#">SubItem 4</a></li>
				</ul>
			</li>
			<li><a href="#">Item 4</a></li>
			<li><a href="#">Item 5</a></li>
		</ul>
	</nav>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>