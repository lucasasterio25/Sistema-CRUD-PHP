<?php
if (count($_POST)) {
	// Recebendo valores
	$id_clientes = $_POST['id_clientes'];


	// Recebendo valores


	//fazendo conexao
	$db = mysql_connect('localhost','root','root');
		if(!$db){
			erro_banco();
		}
		if(!mysql_select_db('teste1',$db)){
			erro_banco();
		}

		$result = @mysql_query("SELECT id_clientes, id_produtos FROM Pedido WHERE id_clientes = '$id_clientes'");

		while($row = mysql_fetch_array($result)){
            echo "ID Cliente = ";
            echo $row['id_clientes'];
			echo "<br />";
			echo "ID Produto = ";
            echo $row['id_produtos'];
			echo "<br />";
			echo "Pedido pesquisado";
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
