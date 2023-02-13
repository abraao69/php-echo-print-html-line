<html>
<head>
<title>PHP echo statement</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./../assets/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="phppot-container">
		<h3>To print a string</h3>
		<div class="row">
            <?php echo "Hello world!";?>
        </div>
		<h3>To print a value in an variable $message</h3>
		<div class="row">
            <?php
            $message = "Welcome to quick example.";
            echo $message;
            ?>
        </div>
		<h3>To print interpolated string</h3>
		<div class="row">
            <?php
            $functionName = "PHP echo()";
            echo "Print statement - " . $functionName;
            ?>
        </div>
        <h3>To print the result of ($b * $a) - $b</h3>
		<div class="row">
            <?php
            $a = 5;
            $b = 7;
            echo '$result  = ' . (($b * $a) - $b);
            ?>
        </div>
        <h3>To print HTML table</h3>
		<div class="row">
         <?php
echo '<table class="html-table">
        <tr>
            <th>Print statements</th>
        </tr>
        <tr>
            <td>echo</td>
        </tr>
        <tr>
            <td>print</td>
        </tr>
        <tr>
            <td>print_r</td>
        </tr>
        </table>';
        ?>
        </div>
        <h3>To print Boolean</h3>
		<div class="row">
			<div>
            <?php
            $boolean = true;
            echo "Boolean true: " . $boolean;
            ?>
            </div>
            <div>
            <?php 
            $boolean = false;
            echo "Boolean false: " . $boolean;
            ?>
            </div>
        </div>

	</div>
</body>
</html>