<!DOCTYPE html>
<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
	<title>Temperature Conversion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<section>
	<header>
		<h1><span>SIMPLE PHP CALCULATOR</span></h1>
		<div class="Main">
			<div class="Mainn">
				<div class="left">
				<img src="images/beach-sunset.svg">
			</div>
			<div class="right">
				<form method="POST">
					
					<div class="val"><input type="text" name="number1" placeholder="Enter Your Number" class="num"></div><br>
					<div class="val"><input type="text" name="number2" placeholder="Enter Your Number" class="num"></div>
					<div class="rselect">
						<select name="operation">
							<option value="add">ADD</option>
							<option value="sub">SUB</option>
							<option value="mul">MUL</option>
							<option value="div">DIV</option>
							<option value="mod">MOD</option>
						</select>
					</div>
					
					<input type="submit" name="submit" value="Convert Now" class="btn">
				</form>
				<div>
					<p>
						<?php

						if (isset($_POST['submit'])) {
							$number11 = $_POST['number1'];
							$number22 = $_POST['number2'];
							$operation = $_POST['operation'];

							switch ($operation) {
								case 'add': $sum = $number11 + $number22;
											echo "<span>Addition of {$number11} and {$number22} is {$sum}</span>";
									break;

								case 'mul':$sum = $number11 * $number22;
											echo "<span>Multiplication of {$number11} and {$number22} is {$sum}</span>";
									# code...
									break;

								case 'sub':$sum = $number11 - $number22;
											echo "<span>Subtraction of {$number11} and {$number22} is {$sum}</span>";
									# code...
									break;

								case 'div':$sum = $number11 / $number22;
											echo "<span>Division of {$number11} and {$number22} is {$sum}</span>";
									# code...
									break;

								case 'mod':$sum = $number11 % $number22;
											echo "<span>Modulous of {$number11} and {$number22} is {$sum}</span>";
							# code...
							break;
								
								default:
									# code...
									break;
							}

						}
						?>
					</p>
				</div>
			</div>



			</div>
			
		</div>
	</header>
	</section>

</body>
</html>