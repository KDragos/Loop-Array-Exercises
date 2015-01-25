<?php 

$colors = ['red', 'green', 'blue', 'yellow', 'pink', 'orange', 'purple', 'black', 'lime', 'teal'];

$users = [1 => 'bob', 2 => 'linda', 5 => 'fred', 3 => 'mary', 9 => 'kate', 40 => 'roger', 11 => 'blake', 12 => 'baily', 13 => 'mark', 14 => 'francis', 32 => 'luke', 21 => 'kenny', 15 => 'laura', 20 => 'lance', 25 => 'bill', 39 => 'roberta', 38 => 'maurice'];

$pet = [
  'name' => 'fluffy',
  'type' => 'alligator',
  'weight' => '400lbs.',
  'diet' => 'kittens & small children',
];

$colorslist = "";
for($i = 0; $i < count($colors); $i++) {
	$colorslist .= "<li>Color " . ($i+1) . ": $colors[$i]</li>";
}


$color_id = "";
$msg = "";
if (isset($_GET["color_id"])){
	$color_id = $_GET["color_id"];
	$msg = "You've chosen {$colors[$color_id]}.";
}



$dropdowncolors = "";
foreach ($colors as $key => $color) {
	$dropdowncolors .= "<option value=\"$key\">$color</option>";
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