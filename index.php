 <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>
<body id="bodys">
   


<form method="post" action="example/insert.php">

Name<input id="inputs"  type="text" name="product_name" pattern="[A-Za-z]{2,}" title="unicamente nombre de productos" tabindex="1" required="required">
<br><br>
Price<input id="inputs"  type="text" name="price" required pattern="^\d*\.?\d*$" title="unicamente precio con numeros">
<br>
<button>Enviar</button>
</form>
<img id="img" src="compraSegura.png"> 




</body>
</html>



