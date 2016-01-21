<?php
if (count($_POST)) {
	// Recebendo valores
	$nome = $_POST['nome'];

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
		$sql = "DELETE FROM Produto WHERE nome='$nome' "


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
