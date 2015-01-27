<?php 

$pet = [
  'name' => 'fluffy',
  'type' => 'alligator',
  'weight' => '400lbs.',
  'diet' => 'kittens & small children',
];

$pet_list = "";
$pet_input = "";
foreach ($pet as $key => $value) {
	$pet_list .= "<li>$key: $value</li>";
	$pet_input .= "<label for\"$key\"> $key: </label><input type=\"text\" value=\"$value\" name=\"key\">";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
 	<title>Pet Loops</title>
</head>
<body>
 	
	<ul>
		<?php echo $pet_list; ?>
	</ul>
	<form action="">
		<?php echo $pet_input; ?>
		<label for=""></label>
		<button>Submit</button>
	</form>

</body>
</html>