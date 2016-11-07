<a href="index.html">Voltar</a>
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
$re = mysql_query("SELECT * FROM usuarios INNER JOIN estados ON usuarios.fk_estado = estados.id_estado ORDER BY usuarios.nome;");
if(mysql_errno() != 0) {
	if(!isset($erros)) {
		echo "Erro o arquivo init.php foi auterado, nao existe $erros";
		exit;
	}
	echo $erros[mysql_errno()];
	exit;
}
?>

<table width="100%" border="1">
	<tr>
		<td>Ações</td>
		<td>Nome</td>
		<td>Email</td>
		<td>Telefone</td>
		<td>Estado</td>
	</tr>
<?php
while($l = mysql_fetch_array($re)) {
	$id          = $l["id_usuario"];
	$nome        = $l["nome"];
	$email       = $l["email"];
	$telefone    = $l["telefone"];
	$estado      = $l["estado"];
	
echo "
	<tr>
		<td><a href=\"editar.php?id=$id\">[Editar]</a> <a href=\"excluir.php?id=$id\">[Excluir]</a></td>
		<td>&nbsp;$nome</td>		
		<td>&nbsp;$email</td>
		<td>&nbsp;$telefone</td>
		<td>&nbsp;$estado</td>
	</tr>\n";
}	
@mysql_close();
?>	
</table>