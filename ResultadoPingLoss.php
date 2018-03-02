<html>
<body>
<pre>
<?php
	require 'conf.php';
	
	$itemID = $_POST['Host'];
	$dataInicial = $_POST['dataInicial'];
	$dataFinal = $_POST['dataFinal'];
	
    $sql = "CALL zabbixdb_pingLoss(".$itemID.", '".$dataInicial."', '".$dataFinal."');";
	
	$resultado = mysql_query($sql);
?>
</pre>
	<label><h>PING LOSS</h></label>
	<br /><br />
	<input type="button" onclick="history.go(-1);" value="Voltar">
	<br /><br />
	<form name="Resultado" >
		<label>RESULTADO</label><BR />
		<table border="1">
			<tr><!--td></td--><td>Data da Ocorrencia</td><td>Hora Inicial</td><td>Hora Final</td><td>Tempo do Incidente</td></tr>
			<?php while($desmembrar = mysql_fetch_array($resultado)) { ?>
			<tr>
				<!--td>< ?php echo $desmembrar['itemid'] ?></td-->
				<td><?php echo $desmembrar['dataT'] ?></td>
				<td><?php echo $desmembrar['horaIni'] ?></td>
				<td><?php echo $desmembrar['horaFim'] ?></td>
				<td><?php echo $desmembrar['difHoras'] ?></td>
			</tr>
			<?php } ?>
		</table>
	<?php
		mysql_close();
	?>
	<br />
	<input type="button" onclick="history.go(-1);" value="Voltar">
	</form>
</body>
</html>