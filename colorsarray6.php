<?php 

$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$colorslist = "";
for($i = 0; $i < count($colors); $i++) {
	if ($i %2 == 1) {
	$colorslist .= "<li>Color " . ($i+1) . ": $colors[$i]</li>";	
	}
}

$color_id = "";
$msg = "";
if (isset($_GET["color_id"])){
	$color_id = $_GET["color_id"];
	$msg = "You've chosen {$colors[$color_id]}.";
}

$dropdowncolors = "";
foreach ($colors as $key => $color) {
	if ($key %2 == 1) {
		$dropdowncolors .= "<option value=\"$key\">$color</option>";
	}
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
		<?php echo $msg; ?>
		<form action="">
			<span>Choose a color.</span>
			<select name="color_id">
				<?php echo $dropdowncolors; ?>
			</select>
			<button>Submit</button>
		</form>
	</div>
	
</body>
</html>
