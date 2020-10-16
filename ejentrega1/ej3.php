<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php 

$a = rand(0 ,255);

print "<svg height='100' width='100'>
<circle cx='50' cy='50' r='40' stroke='black' stroke-width='3' fill= rgb($a, $b, $c) />
</svg>";

?>