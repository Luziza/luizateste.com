<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "luizateste2";
$user = "root";
$pass = "";
// conecta ao banco de dados
$con = mysqli_connect($host, $user, $pass, $db) ;
// seleciona a base de dados em que vamos trabalhar
//mysqli_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT * from orders");
// executa a query
$dados = mysqli_query($con, $query);
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysqli_num_rows($dados);
?>

<html>
	<head>
	<title>Exemplo</title>
</head>
<body>
<?php
	// se o número de resultados for maior que zero, mostra os dados
	if($total > 0) {
		// inicia o loop que vai mostrar todos os dados
		do {
?>
			<p><?=$linha['order_id']?> / <?=$linha['order_total']?> / <?=$linha['order_date']?></p>
<?php
		// finaliza o loop que vai mostrar os dados
		}while($linha = mysqli_fetch_assoc($dados));
	// fim do if
	}
?>
</body>
</html>
<?php
// tira o resultado da busca da memória
mysqli_free_result($dados);
?>