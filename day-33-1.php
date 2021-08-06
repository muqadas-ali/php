<!DOTYPE html>
<html>
<head>
<title>For Each Loop</title>
</head>
<body>
<h1>Break statment</h1>
<h4>Break statment jumps out of the loop is conditionis true</h4>


<?php
for ($x=0; $x<10; $x++)
{
if ($x==4)
{
break;
}
echo "The number is:$x <br>";
}
?>
<p> As you can see when x==4 reaches loop ends</p>
}
?>
</html>
</body>