<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body bgcolor="C0C0C0">
<H1>Calculate How  Many self-adhesive brick slip you will need</h1>
<form>
    <h3>Width in Meters</h6>
	
	 <input type="number" name="num1"/>
    <h3>Height in Meters</h6>
	
	<input type="number" name="num2"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $num1 = intval($_GET['num1']);
    $num2 = intval($_GET['num2']);
    $product = ($num1*$num2*10000)/900; 
   
}
?>
<h3>Number of plates required :</h3>
<input type = "number" name="type" value="<?= $product?>" >
</body>
</html>