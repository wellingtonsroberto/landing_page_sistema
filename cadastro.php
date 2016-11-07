<?php
if(file_exists("init.php")) {
	require "init.php";		
} else {
	echo "Arquivo init.php nao foi encontrado";
	exit;
}

if(!function_exists("Abre_Conexao")) {
	echo "Erro o arquivo init.php foi auterado, nao existe a função Abre_Conexao";
	exit;
}

Abre_Conexao();
$re = mysql_query("select * from estados order by estado");
if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe \$erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro</title>
<style>
<!--
.textBox { border:1px solid gray; width:200px;} 
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="salvar.php">
  <table width="400" border="0" align="center">
    <tr>
      <td width="145">Nome</td>
      <td width="245"><input name="nome" type="text" id="nome" maxlength="45" class="textBox" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input name="email" type="text" id="email" maxlength="64" class="textBox" /></td>
    </tr>
    <tr>
      <td>Telefone</td>
      <td><input name="telefone" type="text" id="telefone" maxlength="30" class="textBox" /></td>
    </tr>
    <tr>
      <td>Estado</td>
      <td><select name="estados" id="estados" class="textBox" >	  	
<?php
while($l = mysql_fetch_array($re)) {
	$id     = $l["id_estado"];
	$estado = $l["estado"];
	$uf     = $l["uf"];				
	echo "<option value=\"$id\">$uf - $estado</option>\n";
}
@mysql_close();
		
?>
      </select>      </td>
    </tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Salvar" style="cursor:pointer;" /></td>
    </tr>
  </table>
</form>
</body>
</html>
