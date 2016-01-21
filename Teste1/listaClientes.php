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
		
		$result = @mysql_query("SELECT id, nome, email, telefone FROM Cliente WHERE nome = '$nome'");

		while($row = mysql_fetch_array($result)){
            echo "ID = ";
            echo $row['id'];
			echo "<br />";
			echo "NOME = ";
			echo $row['nome'];
			echo "<br />";
			echo "EMAIL = ";
			echo $row['email'];
			echo "<br />";
			echo "TELEFONE = ";
			echo $row['telefone'];
			echo "<br />";
			echo "Cliente pesquisado";
			echo "<br />";
			echo "<br />";
			echo "<br />";
                     }
		

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
