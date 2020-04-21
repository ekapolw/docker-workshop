<!DOCTYPE html>
<html>
<body>
<h1>Calling Java Container</h1>
<?php 

$response = file_get_contents('http://java-container:8080/hello_backend/');
echo $response . "<br/>\n";

$response = file_get_contents('http://java-container:8080/hello_backend/ekapol');
echo $response . "<br/>\n";; 

$response = file_get_contents('http://java-container:8080/hello_backend/TONY');
echo $response . "<br/>\n";; 

?>
</body>
</html> 