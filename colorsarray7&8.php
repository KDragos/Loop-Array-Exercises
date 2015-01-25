<?php 

$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$colorslist = "";
for($i = 0; $i < count($colors); $i++) {
	$colorslist .= "<li>Color " . ($i+1) . ": $colors[$i]</li>";	
}

$fourOrLess = [];
$multipleOfThree = [];
foreach ($colors as $key => $color) {
	if (strlen($colors[$key]) <= 4) {
		$fourOrLess[] = $color;
	}
	if ($key % 3 == 0) {
		$multipleOfThree[] = $color;
	}
}

$dropdowncolors1 = "";
foreach ($fourOrLess as $key => $color) {
	$dropdowncolors1 .= "<option value=\"$key\">$color</option>";
}
$dropdowncolors2 = "";
foreach ($multipleOfThree as $key => $color) {
	$dropdowncolors2 .= "<option value=\"$key\">$color</option>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loop and Array Exercises</title>

</head>
<body>

	<div>
		<ul>
			<?php echo $colorslist; ?>	
		</ul>
	</div>

	<div>

		<form action="">
			<span>Choose a color.</span>
			<select name="color_id">
				<?php echo $dropdowncolors1; ?>
			</select>
			<span>Looking for another color?</span>
			<select name="color_id2">
				<?php echo $dropdowncolors2; ?>
			</select>
			<button>Submit</button>
		</form>
	</div>
	
</body>
</html>
