<html>
				<head>
								<meta	charset="UTF-8">
								<title></title>
				</head>
				<body>
								<h3>Cadastro	de	Paciente</h3>
								<form	action="recebe.php"	method="post">
												Nome	Paciente:<input	type="text"	name="nome"	placeholder="Informe	o	
nome"><br><br>
												Data	da	consulta:<input	type="date"	name="data"><br><br>
												Médico:<input	type="text"	name="medico"	placeholder="Informe	o	seu	
médico"><br><br>
												Especialidade:
												<select	name="especialidade">
																<option	value="">Selecione</option>
																<option	value="CARDIOLOGISTA">CARDIOLOGISTA</option>
																<option	value="DERMATOLOGISTA">DERMATOLOGISTA</option>
																<option	value="ANGIOLOGIA">ANGIOLOGIA</option>
																<option	value="PEDIATRIA">PEDIATRIA</option>
																</select>
												
												<input	type="submit"	name="submit"	value="Enviar">
												<input	type="reset"	name="cancelar"	value="Cancelar">
																					
												
								</form>
				</body>
</html>
RECEBE.PHP
<?php
			$nome=$_POST["nome"];
			$data_da_consulta=$_POST["data"];
			$medico=$_POST["medico"];
			$especialidade=$_POST["especialidade"];
			
			echo'Nome	do	paciente:'.$nome.'<br>';
			echo'Data	da	consulta:'.$data_da_consulta.'<br>';
			echo'Médico:'.$medico.'<br>';
			echo'Especialidade:'.$especialidade.'<br>';
			
			
?>
