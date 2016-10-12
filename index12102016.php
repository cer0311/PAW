
<!DOCTYPE html>
<html dir="ltr" lang="">
  <head>
  
    <title>PAW</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="robots" content="index, follow">
	<meta name="revisit-after" content="7 days">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	
</head>
<body>
<form>
<input name="pocet"/>
<input name="info"/>
<input type="submit"/>


<input type="radio" name="style" value="odrazky" checked> Odrážka<br>
<input type="radio" name="style" value="cislovani"> Číslování<br>

</select>
</form>
	<h1>Tohle je nadpis mých webových stránek v php pro PAW</h1>
	<a href="https://github.com/cer0311">Navštivte muj GITHUB, kde najdete tento velmi, velmi, opakuju velmi zajímavý kód</a>
	<h2><img src="https://cdn.meme.am/instances/500x/18399212.jpg" alt="Our boss Rogers, what a cool guy" style="width:407px;height:405px;"></h2>
<?php
	echo $_REQUEST["pocet"];
	echo "<h3>Ahoj Rogersi čus</h3>";
	echo "<ol>";
	for ($i=0; $i<$_REQUEST["pocet"]; $i++) {
	if ($_REQUEST["style"] == "odrazky") {
			echo "<odrazky> - ".$i." ".$_REQUEST["info"]."</odrazky>";
		
	} else {
		echo"<cislovani> č. ".$i." ".$_REQUEST["info"]."</cislovani>";
		}
	}
	echo"</ol>";
?>

</body>
</html>