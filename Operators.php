<?php

	$num_1 = $_POST["n1"];
	$num_2 = $_POST["n2"];

	$o = $_POST["op"];

	switch ($o)
	{
		case '+':
			echo "Addition of Two Numbers is = ". $num_1 + $num_2;
		break;

		case '-':
			echo "Substraction of Two Numbers is = ". $num_1 - $num_2;
		break;

		case '*':
			echo "Multiplication of Two Numbers is = ". $num_1 * $num_2;
		break;

		case '/':
			echo "Division of Two Numbers is = ". $num_1 / $num_2;
		break;
	}

?>