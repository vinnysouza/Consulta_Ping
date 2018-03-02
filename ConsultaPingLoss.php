<html>
<body>
<?php
	require 'conf.php';

	$resultado = mysql_query("SELECT h.hostid, h.host, i.itemid, i.name FROM hosts h, items i WHERE h.hostid = i.hostid AND i.key_ = 'icmppingloss' ORDER BY host");

?>
<label><h>PING LOSS</h></label>
	<br /><br />
	<form name="Consulta" action="ResultadoPingLoss.php" method="post">
		<label>Selecione um servidor</label>
		<select name="Host">
			<option>Selecione...</option>
			<?php while($desmembrar = mysql_fetch_array($resultado)) { ?>
			<option value="<?php echo $desmembrar['itemid'] ?>"><?php echo $desmembrar['host'] ?></option>
			<?php } ?>
		</select>
	<?php
		mysql_close();
	?>	

	<br>
		Data Inicial: <input type="date" name="dataInicial">
	<br>
		Data Final: <input type="date" name="dataFinal">
	<br>
	<input type="submit" value="Enviar">
	</form>
</body>
</html>
