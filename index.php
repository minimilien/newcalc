<html>
	<head>
		<title>canvas demo</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="Draw.css"/>
		<script type="application/javascript" src="Draw.js"></script>
	</head>
	<body>
		<b> BONSOIR À TOUS LES AMIS </b>
		<?php
			$names = array("Patrick", "John", "Marie", "Claire", "Paul");
			foreach ($names as $name) {
				print "$name, ";
			}
			/*
			exec('python giorgio.py');
			$result_last_line = system("python giorgio.py");
			echo "Result : ".$result_last_line;
			$giorgio=exec("python giorgio.py");
			print "$giorgio";
			*/
		?>
	</body>
</html>