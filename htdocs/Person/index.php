<?php
include "../kobling.php";
$sql = "SELECT * FROM `person`";
$datasett = $tilkobling->query($sql);
?>
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
			<h1>Min første navndatabase</h1>
			<br/>
			<?php while($rad = mysqli_fetch_array($datasett)){?>
			<p>
				<b>Fornavn:</b>
				<?php echo $rad["fornavn"]; ?> <br/>
				<b>Etternavn:</b>
				<?php echo $rad["etternavn"]; ?> <br/>
				<b>Mobil:</b>
				<?php echo $rad["mobil"]; ?> <br/><br/>
			</p>
			<?php } ?>
		</div>
	</div>
</body>

</html>