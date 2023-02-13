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
            <h3>Using print_r()</h3>
            <?php
            $color = array(
                "Red",
                "Blue",
                "Green"
            );
            print "<pre>";
            print_r($color);
            print "</pre>";
            ?>
            <h3>Using var_dump()</h3>
            <?php
            print "<pre>";
            var_dump($color);
            print "</pre>";
            ?>
        </div>
    </div>
</body>
</html>