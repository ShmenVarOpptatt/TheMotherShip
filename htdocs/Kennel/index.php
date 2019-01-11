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
	<title>Kennel</title>
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
		<a href="bilder.html"><img src="VoffKennel.jpg"></a>
		<div id="innersteramme">
			<h1>Hundekennel</h1>
			<h2>Hunde-eiere</h2>
			<table id="tabell">
				<tr>
					<th width="75">PersonID</th>
					<th width="180">Fornavn</th>
					<th width="160">Etternavn</th>
					<th width="99">Mobil</th>
				</tr>
				<?php while($rad = mysqli_fetch_array($datasett_person)) { ?>
				<tr>
					<td>
						<?php echo $rad["personid"]; ?>
					</td>
					<td>
						<?php echo $rad["fornavn"]; ?>
					</td>
					<td>
						<?php echo $rad["etternavn"]; ?>
					</td>
					<td>
						<?php echo $rad["mobil"]; ?>
					</td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<h2>Hunder</h2>
			<table id="tabell">
				<tr>
					<th width="75">HundeID</th>
					<th width="180">Hund</th>
					<th width="160">Fødselsår</th>
					<th width="99">Kjønn</th>
				</tr>
				<?php
				$antall = 0;
				while($rad = mysqli_fetch_array($datasett)) {
				$antall++;
				?>
				<tr>
					<td>
						<?php echo $rad["hundid"]; ?>
					</td>
					<td>
						<?php echo $rad["hundnavn"]; ?>
					</td>
					<td>
						<?php echo $rad["hundfodselsaar"]; ?>
					</td>
					<td>
						<?php echo $rad["hundkjonn"]; ?>
					</td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<h2>Hund og Eier</h2>
			<table id="tabell">
				<tr>
					<th width="75">HundeID</th>
					<th width="125">Hund</th>
					<th width="55">Kjønn</th>
					<th width="160">Navn</th>
					<th width="99">Mobil</th>
				</tr>
				<?php 
				while($rad = mysqli_fetch_array($datasett_hundeier)) {
				?>
				<tr>
					<td>
						<?php echo $rad["hundid"]; ?>
					</td>
					<td>
						<?php echo $rad["hundnavn"]; ?>
					</td>
					<td>
						<?php echo $rad["hundkjonn"]; ?>
					</td>
					<td>
						<?php echo $rad["fornavn"]." ".$rad["etternavn"]; ?>
					</td>
					<td>
						<?php echo $rad["mobil"]; ?>
					</td>
				</tr>
				<?php } ?>
			</table>
			<br>
			<p class="slightlybiggertext"><b>Antall hunder i kennelen akkurat nå:
					<?php echo $antall?> hunder</b></p>
		</div>
	</div>
</body>

</html>