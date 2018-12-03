<?php date_default_timezone_set("Europe/Oslo");?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stilark.css">
	<title>Min første dynamiske webside</title>
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
		<h1>Min første dynamiske webside :)</h1>
		<br>
		<div id="colo">
		<?php
			if (date("H") <'05') {echo 'OPP TIDLIG?';}
			elseif (date("H") <'09') {echo 'GOD MORGEN!';}
			elseif (date("H") <'12') {echo 'LUNSJTID!';}
			elseif (date("H") <'15') {echo 'GOD FORMIDDAG!';}
			elseif (date("H") <'18') {echo 'GOD ETTERMIDDAG!';}
			elseif (date("H") <'23') {echo 'GOD KVELD!';}
		?>
		</div>
		<?php
			echo "<br><b>Dagens dato er:</b> <br>";
			echo date("d/m/y"), "<br>";
			echo date("D/m/y"), "<br><br>";
			echo "<b>Klokka er nå:</b><br>";
			echo date("H:i:s"), "<br><br>";
			$tall1 = 92;
			$tall2 = 4;
			echo "92 : 4 = ", $tall1/$tall2, "<br><br>";
		?>
		<img src="gif.gif" height="300">
		</div>
	</div>
</body>

</html>
