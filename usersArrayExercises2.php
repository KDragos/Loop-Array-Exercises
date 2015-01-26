<?php 

$users = [1 => 'bob',2 => 'linda',5 => 'fred',3 => 'mary',9 => 'kate',40 => 'roger',
  11 => 'blake',12 => 'baily',13 => 'mark',14 => 'francis',32 => 'luke',21 => 'kenny',
  15 => 'laura',20 => 'lance',25 => 'bill',39 => 'roberta',38 => 'maurice'];


$msg = "";
if (isset($_GET["user"])) {
	$user = $_GET["user"];
	$msg = "Welcome, {$users[$user]}.";
}

$user_options = "";
foreach ($users as $id_number => $name) {
	$user_options .= "<option value=\"$id_number\">$name</option>";
}




 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Users Array Exercises</title>
 </head>
 <body>
 	<div> 
		<?php echo $msg; ?>
 	</div>
 	<form action="">
 		<span>Select your username.</span>
 		<select name="user">
 			<?php echo $user_options; ?>
 		</select>
 		<button>Submit</button>
 	</form>

 </body>
 </html>