<html>
<head>
	<title>Hello Demo</title>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<style>
	body {
		background-color: white;
		text-align: center;
		padding: 50px;
		font-family: "Open Sans","Helvetica Neue",Helvetica,Arial,sans-serif;
	}

	#logo {
		margin-bottom: 40px;
	}
	</style>
</head>
<body>
	<img id="logo" src="./devops1.png" />
<h1><?php echo "Welcome to ".($_ENV["NAME"]?$_ENV["NAME"]:" Insight DevOps Demo")."!"; ?></h1>
<?php if($_ENV["HOSTNAME"]) {?><h2>Docker hostname: <?php echo $_ENV["HOSTNAME"]; ?></h2><?php } ?>

<h2>Time: <?php date_default_timezone_set('America/New_York'); echo date(DATE_RFC822); ?> (EST) </h2>

<h2>Company visit: <font color=red> ABC Inc</font> </h2>

<?php
	$links = [];
	foreach($_ENV as $key => $value) {
		if(preg_match("/^(.*)_PORT_([0-9]*)_(TCP|UDP)$/", $key, $matches)) {
			$links[] = [
				"name" => $matches[1],
				"port" => $matches[2],
				"proto" => $matches[3],
				"value" => $value
			];
		}
	}
	if($links) {
	?>
		<h3>Links found</h3>
		<?php
		foreach($links as $link) {
			?>
			<b><?php echo $link["name"]; ?></b> listening in <?php echo $link["port"]+"/"+$link["proto"]; ?> available at <?php echo $link["value"]; ?><br />
			<?php
		}
		?>
	<?php
	}

	if($_ENV["DOCKERCLOUD_AUTH"]) {
		?>
		<h3>I have Docker Cloud API powers!</h3>
		<?php
	}
	?>
</body>
</html>
