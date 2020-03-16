<?php 

require_once ("principal.html");
echo "<h1>Criptografia com md5()</h1>";

$senha = "soeusei01";

echo $senha;
echo "<br>";
echo md5($senha);
echo "<br>";
echo md5($senha,FALSE);
echo "<br>";
echo md5($senha,TRUE);
 ?>