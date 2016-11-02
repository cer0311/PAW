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
	<meta charset="utf-8" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    $("document").ready(function(){
		$("#strong1").click(function(){
        $(this).hide();
			});
		});
   </script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$("document").ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});
</script>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
	<script src="http://gisak.vsb.cz/ruzicka/lib/leaflet/showplace.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		
		setMap('mapid');
		$("#mapid").hide();
		
		$("strong").click(function(){
			
			$("#mapid").show();
			
			var lat = $(this).attr("lat");
			var lon = $(this).attr("lon");
			var zoom = $(this).attr("zoom");
			var text = $(this).attr("text");
			
			showPlace(lat, lon, zoom, text);
		});
	});
	</script>
</head>
<body>
<form>
	<p>
	Počet:<input type="number" name="pocet" min="0" max="100" step="1" value="30">
	Info:<input name="info" value="FFF"/>
	Birthday (date and time): <input type="datetime-local" name="bdaytime">
	<input type="radio" name="style" value="li" checked> Odrážka<br>
	<input type="radio" name="style" value="p"> Odstavec<br>
	<textarea name="text1" rows="20" cols="100">
		Krnov je skvělé město. V Krnově žijí pouze skvělí lidé. Krnovem se dnes přoženou srážky.
	
	</textarea>
	<input type="submit"/>	
	</p>
</form>
<?php
	//echo "<h1>Ahoj Karle</h1>";
	//echo "<p>".$_REQUEST["text1"]."</p>";
	
	//$pocet_znaku = strlen($_REQUEST["text1"]);
	//echo "<p>".$pocet_znaku."</p>";
	
	//$pieces = explode(" ", $_REQUEST["text1"]);
	/*
	echo "<p>".$pieces[0]."</p>"; // piece1
	echo "<p>".$pieces[1]."</p>"; // piece2
	*/
	
	/*
	foreach ($pieces as $value) {
		echo "<p>".$value."</p>";
	}
	*/
	
	$krnov = array("Krnov", "Krnově", "Krnovem"); 
	$sell=0;
	//for ($i=0; $i<count($pieces); $i++) {
		//$word = trim($pieces[$i], ". \t\n");
		//$word = str_replace(".", "", $word);
		//if (in_array($word, $krnov)) {
			//$sell++;
			//$pieces[$i] = "<strong id=strong1>".$pieces[$i]."</strong>";
		//}
	//}
	//$text1_strong_krnov = implode(" ", $pieces);
	//echo "<p>".$text1_strong_krnov."</p>";
	/*
	echo "<ol>";
	for ($i=1; $i<=$_REQUEST["pocet"]; $i++) {
		if ($_REQUEST["style"] == "li") {
			echo "<li>Odrážka č.".$i." ".$_REQUEST["info"]."</li>";
		} else {
			echo "<p>Odstavec č.".$i." ".$_REQUEST["info"]."</p>";
		}
	}
	echo "</ol>";	
	*/
	
?>
<p><strong lat="50.0906" lon="17.7031" zoom="10" text="Zde je  <strong>Krnov</strong>">Krnov</strong> je skvělé místo a žijí zde jen úžasní lidé.</p>
<p><strong lat="49.8209" lon="18.2625" zoom="12" text="Zde je <strong>Ostrava</strong>">Ostrava</strong> je špinavé město, které nikdo nemá rád.</p>
<div id="mapid" style="width: 600px; height: 400px;"></div>
</body>
</html>