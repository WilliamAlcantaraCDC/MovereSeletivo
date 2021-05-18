
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Formulario de Vendas</title>		
	</head>
	<body>
		<div align = "center">
		<h1>Registro de Vendas</h1>
		
</div>
		<fieldset>
		<form method="POST" action="processa.php">
			
				<legend>Dados Da Venda</legend>
					<div style="text-align: center;">
  
					<label for="nome">Nome Do Cliente</label>
					<input type="text" id="nome" name="nome" placeholder="Nome Completo" required><br><br>
    
					<label for="datanascimento">Data Da Venda</label>
					<input type="date" id="datavenda" name="datavenda"  required><br><br>
  
					<label for="dinheiro">Valor da Venda R$</label>
					<input type="text" id="dinheiro" name="dinheiro" placeholder="Digite a quantia" required><br><br>
   
  
  <input type="submit" value="Enviar">
  <input type="Reset" value="Cancelar">
     
  
  
 </div>
 
		</form><br>
		<div style="text-align: center;">
		<a href="listar.php"><button>Maior Venda</button></a>
		 </div>
		 </fieldset>
	</body>
</html>