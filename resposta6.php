<?php

$host = "localhost";
$db   = "luizateste2";
$user = "root";
$pass = "";

$con = mysqli_connect($host, $user, $pass, $db) ;

$query = sprintf("SELECT * from orders");

$dados = mysqli_query($con, $query);

$linha = mysqli_fetch_assoc($dados);

$total = mysqli_num_rows($dados);
?>

<html>
    <style type="text/css">

        body{
            background-color: 8029D7;
        }
	</style>
	<head>
	<title>Exemplo</title>
</head>
<body>
<?php
	
	if($total > 0) {
		do {
?>
        <table">
			<p><?=$linha['order_id']?> | <?=$linha['order_total']?> | <?=$linha['order_date']?></p>
        </table>
<?php
		}while($linha = mysqli_fetch_assoc($dados));
	}
?>
</body>
</html>
<?php
mysqli_free_result($dados);
?>