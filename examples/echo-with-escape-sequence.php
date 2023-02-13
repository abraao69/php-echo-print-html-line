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

        <h3>Handling escape sequence</h3>
        <div class="row">
        <?php
        $string = 'Learn PHP Echo';
        print "<PRE>";
        echo "Hello World! \$string\n\n";
        
        echo "PHP echo prints the value in the variable \"str\": $string\n\n";
        
        echo "Hello\nWorld!\nLearnPHP\n\n";
        ?>
            </div>
    </div>
</body>
</html>