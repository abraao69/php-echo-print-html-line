<html>
<head>
<title>PHP echo statement</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>
	<div class="phppot-container">
		<form action="" method="post">
			<h2>Print multi-line passage</h2>
			<div class="row">
				<label>Enter a multi-line text:</label>
				<div>
					<textarea class="textarea" name="multi-line" rows="5"></textarea>
				</div>
			</div>
			<div class="row">
				<input type="submit" value="Submit" name="submit" class="btn-submit">
			</div>
		</form>
        
            <?php
            if (! empty($_POST["submit"])) {
                if (! empty($_POST["multi-line"])) {
                    $string = $_POST["multi-line"];
                    echo "Output:";
                    echo "<PRE>";
                    echo $string;
                }
            }
            ?>
	</div>
</body>
</html>