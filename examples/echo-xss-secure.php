<?php
use Phppot\UI;
require_once __DIR__ . '/../vendor/Phppot/Util.php';
$util = new Util();
?>
<html>
<head>
<title>PHP echo statement</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>
<body>
    <div class="container">
        <div class="row">
        <?php
        $inputString = '<canvas id=\'target\'></canvas>';
        $util->xecho($inputString);
        ?>
        </div>
        <div class="row">
        <?php
        $util->echoSafe($inputString);
        ?>
        </div>
    </div>
</body>
</html>