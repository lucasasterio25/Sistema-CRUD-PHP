<?php
if (count($_POST)) {
	// Recebendo valores
	$nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

	// Recebendo valores

//fazendo conexao
	$db = mysql_connect('localhost','root','root');
		if(!$db){
			erro_banco();
		}
		if(!mysql_select_db('teste1',$db)){
			erro_banco();
		}

		//fazendo a inserção
		$sql = "insert into Produto (nome, descricao, preoc) values('$nome','$descricao','$preco')";


		$rs = mysql_query($sql, $db);

		if (!$rs){
		erro_banco();

		}else{
			echo "</ br><a href = 'Index.html'>Voltar</a>";
		mysql_close($db);
}}
?>



<?php
function erro_banco(){
	echo mysql_errno().' : '.mysql_error();
die(0);
}
?>
