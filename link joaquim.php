<?php

 $link = mysql_connect('mysql://root:ZPVgWFXUNPGDsiYfmqcPffysJZTXXLVh@autorack.proxy.rlwy.net:49416/railway');
if (!$link) 

{

	die('Não pode ser conectado: ' . mysql_error());

}

echo 'Conexão com sucesso!';
mysql_close($link);

?>
