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
        <div class="row">
            <h2>Echo statement with single and double quotes</h2>
            <h3>Using single quotes</h3>
            <?php
            $string = "Value of a variable";
            echo 'Hello World! $string';
            ?>
            <h3>Using double quotes</h3>
            <?php
            echo "Hello World! $string";
            ?>
        </div>
    </div>
</body>
</html>