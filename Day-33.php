<!DOTYPE html>
<html>
<head>
<title>For Each Loop</title>
</head>
<body>
<h1>Foreach loop</h1>
<h4>Foreach loop only used in case of arrays</h4>

<?php
$col=array('a','b','c'); //declare and initialize  an array

foreach ($col as $val)
{
echo "$val <br>";
}
?>
</html>
</body>