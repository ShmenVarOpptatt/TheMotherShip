<?php
include "../kobling.php";
$sql = "SELECT * FROM `jul`";
$datasett = $tilkobling->query($sql);
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stilark.css">
	<title>Julenettside</title>
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
	<div class="inneramme">
		<?php while($rad = mysqli_fetch_array($datasett)){?>
		<div id="wrapper">
			<div id="bilder">
				<p>
					<img src="<?php echo $rad["bilde"]; ?>"><br /><br />
				</p>
			</div>
			<div id="tekst">
				<?php echo $rad["tekst"]; ?> <br />
			</div>
		</div>
		<?php } ?>
	</div>
</body>

</html>