
<?php
	//session_start();
    include_once("conexao.php");
    $nom = $_POST['nome'];
	$dt = $_POST['datavenda'];
    $val = $_POST['dinheiro'];
    
    
    $result_usuario = "INSERT INTO clientes(nome, datavenda, valor) VALUES ('$$nom','$$dt', '$val' )";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    
	if(mysqli_insert_id($conn)){
	echo 'Nome: ' . ($_POST['nome']) . "<br>"; 
	echo 'Data da Venda: ' . ($_POST['datavenda']) . "<br>";
	echo 'Valor da Venda: ' . ($_POST['dinheiro']) . "<br>";
	
	//$_SESSION['msg'] = "<p style='color:green;'>Cliente cadastrado com sucesso</p>";
	//header("Location: index.php");
}else{
	//$_SESSION['msg'] = "<p style='color:red;'>Cliente não foi cadastrado com sucesso</p>";
	//header("Location: index.php");
}
   
?>
