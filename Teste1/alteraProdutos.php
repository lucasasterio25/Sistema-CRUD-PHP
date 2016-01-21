<?php
if (count($_POST)) {
	// Recebendo valores
    $id = $_POST['id'];
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
		$sql = "UPDATE Pruduto SET nome='$nome' descricao='$descricao' preco='$preco' WHERE id = '$id'"




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
