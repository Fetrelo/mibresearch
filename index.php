<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mib Research - By: UNIVOS</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<!-- Local script -->
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<div id="presentation" style="height: 100vh">
	    <div class="animated fadeIn flex-center flex-column white-text">
	    	<div class="col-lg-2 col-md-2 col-sm-2">
	    		<img class="z-depht-3" src="/img/logo.svg" alt="MiBici">
	    	</div>
	        <h1 class="mb-4">Mib Research Project</h1>
	        <h5 class="mb-3">Bienvenido</h5>
	    </div>
	</div>
	<div id="body">
		<!--Navbar-->
		<nav class="navbar navbar-expand-lg navbar-dark indigo">

		    <a class="navbar-brand" href="#">Mib Research Project</a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
		        aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="basicExampleNav">
		        <ul class="navbar-nav mr-auto">
		            <!-- <li class="nav-item">
		                <a class="nav-link" href="#">Features</a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="#">Pricing</a>
		            </li> -->
		            <li class="nav-item dropdown">
		                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Consultas</a>
		                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
		                    <a id="p" class="dropdown-item" href="#">Primera</a>
		                    <a id="s" class="dropdown-item" href="#">Segunda</a>
		                    <a id="t" class="dropdown-item" href="#">Tercera</a>
		                    <a id="c" class="dropdown-item" href="#">Cuarta</a>
		                    <a id="q" class="dropdown-item" href="#">Quinta</a>
		                    <a id="b" class="dropdown-item" href="#">Bonus</a>
		                </div>
		            </li>
		        </ul>
		        <form class="form-inline">
		            <div class="md-form mt-0">
		                <input id="startDate" class="form-control mr-sm-2" type="date">
		            </div>
		            <div class="md-form mt-0">
		                <input id="finishDate" class="form-control mr-sm-2" type="date">
		            </div>
		            <button id="search" type="button" class="btn btn-primary"><i class="fa fa-search pr-2" aria-hidden="true"></i>Consultar</button>
		        </form>
		    </div>
		</nav>
		
		<div class="content">
			<div id="pr" class="panel">
				<h3 class="question">Resultados 1</h3>
				<div id="stations"></div>
			</div>
			<div id="se" class="panel">
				<h3 class="question">Resultados 2</h3>
			</div>
			<div id="te" class="panel">
				<h3 class="question">Resultados 3</h3>
			</div>
			<div id="cu" class="panel">
				<h3 class="question">Resultados 4</h3>
			</div>
			<div id="qu" class="panel">
				<h3 class="question">Resultados 5</h3>
			</div>
			<div id="bo" class="panel">
				<h3 class="question">Resultados 6</h3>
			</div>
		</div>
	</div>
	
	<!-- Scripts -->
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<!-- Charts.js JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
</body>
</html>