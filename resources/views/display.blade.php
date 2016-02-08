<!DOCTYPE html>
<html>
	<head>
		<title>Display</title>
	</head>

	<body>
	
	<h2><?php $currentpc = $icity->Postcode;
	echo $currentpc . " - " . $icity->City; ?></h2><br/>
	<?php
	$osa = $itemsair->avg('Rating');
	$osl = $itemsland->avg('Rating');
	$osn = $itemsnoise->avg('Rating');
	$osp = (($osa + $osl + $osn)/3);
	echo "<h3>Air Pollution - Score: " . $osa . "</h3>";
	foreach($itemsair as $itemair){
		echo "<b>Name: </b>" . $itemair->Name . "<b> Score: </b>" . $itemair->Rating . "<b> Comment: </b>" . $itemair->Review . "<br/>";
    }

    echo "<br/><br/><br/><h3>Land Pollution - Score: " . $osl . "</h3>";
	foreach($itemsland as $itemland){
		echo "<b>Name: </b>" . $itemland->Name . "<b> Score: </b>" . $itemland->Rating . "<b> Comment: </b>" . $itemland->Review . "<br/>";
    }

    echo "<br/><br/><br/><h3>Noise Pollution - Score: " . $osn . "</h3>";
	foreach($itemsnoise as $itemnoise){
		echo "<b>Name: </b>" . $itemnoise->Name . "<b> Score: </b>" . $itemnoise->Rating . "<b> Comment: </b>" . $itemnoise->Review . "<br/>";
    }

    echo "<h2> Overall Pollution Score: " . $osp . "</h2>";

    ?>

    <br/>
    <br/>
    <br/><h2>Submit a review</h2>
		<form action="submitreview" method="get">
			<?php echo "Postcode: <input type='text' name='pc' value='". $currentpc . "' readonly>" ?>
  			Name:
  			<input type="text" name="username" value="">
  			Type:
  			<select name="type">
  				<option value="air">Air</option>
 				<option value="land">Land</option>
  				<option value="noise">Noise</option>
			</select>
			Rating:
  			<select name="rating">
  				<option value="1">1</option>
 				<option value="2">2</option>
  				<option value="3">3</option>
  				<option value="4">4</option>
  				<option value="5">5</option>
 				<option value="6">6</option>
  				<option value="7">7</option>
  				<option value="8">8</option>
  				<option value="9">9</option>
 				<option value="10">10</option>
			</select><br/>
			Review:::
  			<textarea name="review" rows="5" cols="80"></textarea><br/>
  			<input type="submit" value="Submit">
		</form>
	</body>
</html>