<HTML>
<head>
<meta charset="utf-8">
<title>Harry Potter </title>
<script src="jquery-3-3-1-js"></script>
<script>
$(document).ready(function(){
	$('#demo').click(function(){
		$("td").slideDown();
	});
	$('#precio').click(function(){
		$("td").slideDown(); 
	});

</script>
</head>
<body>
<div> J.K. Rowling es una autora Britanica, famosa por ser la autora de la saga de Harry Potter, su nombre real es Joane Katherine Rowling.</br>
</br>
Algunos de sus libros son: </br> </br>
</div>
<table width="80%">
	<tr>
	    <th> AUTOR </th>
	    <th> LIBRO </th>
	    <th> DEMO <th>
	    <th> PRECIOS </th>
	</tr>
	<tr>
	    <td> J.K Rowling </td>
	    <td> Harry Potter y la piedra filosofal </td>
	   <td> <button id="demo"><a href="parrafo.php"> Ver demo</a> </button></td>
	  <td>  <button id="precio"><a href="precio.php"> Ver precios</a> </button></td>
	</tr>
	</tr>
	
	      

</table>
</br>
</br>
</br>

<a href="creditos.php">CREDITOS</a>


</body>
</html>
