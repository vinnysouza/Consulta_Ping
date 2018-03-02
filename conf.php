<pre>
<?php

$host = "seu ip";
$user = "zabbix";
$pass = "zabbix";
$db = "seu banco";

$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db);

?>
</pre>
