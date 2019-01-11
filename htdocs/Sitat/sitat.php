<?php
include "../kobling.php";
$sql = "SELECT * FROM `hund-hund`";
$datasett = $tilkobling->query($sql);

$sql_person = "SELECT * FROM `person`";
$datasett_person = $tilkobling->query($sql_person);

$sql_hundeier = "SELECT * FROM `hund-hund`,`person`
WHERE `hund-hund`.`hundid` = `person`.`personid`";
$datasett_hundeier = $tilkobling->query($sql_hundeier);
?>
<!doctype html>
<html>
<style>
	#navbox {
		position: fixed;
		width: 100%;
		height: 40px;
		font-size: 25px;
		border-bottom: solid black 2px;
		z-index: 1;
		background-color: #4320e4;
	}

	#navbox a:visited, #navbox a:link {
		color: #fff;
	}

	#navbox a:hover {
		color: black;
	}

	#navbox p {
		text-decoration: line-through;
	}

	#nav-home {
		float: left;
		padding-left: 25px;
	}

	#nav-dir {
		float: right;
		padding-right: 25px;
	}
</style>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stilark.css">
	<title>Sitater</title>
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
</head>

<body>
	<div id="navbox">
		<nav>
			<ul>
				<ul id="nav-home"><a href="../index.html"><strong>HJEM</strong></a></ul>
				<ul id="nav-dir"><a href="../PHP.html"><strong>PHP & MYSQL</strong></a></ul>
				<ul id="nav-dir"><a href="../teori.html"><strong>TEORI</strong></a></ul>
				<ul id="nav-dir"><a href="../oppgaver.html"><strong>WEBDESIGN</strong></a></ul>
			</ul>
		</nav>
	</div>
	<div id="inneramme">
		<div id="innersteramme">
			
			<table id="tabell">
				
			</table>
		
		</div>
	</div>
</body>

</html>