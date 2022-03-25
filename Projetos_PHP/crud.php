<?php
session_start();

if(!isset($_SESSION['id'], $_SESSION['nome'])){
	header("Location: index.php");
} else {
	?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Styelsheet Links -->
<link rel="stylesheet" href="Styles/crud_style.css">
<link rel="stylesheet" href="Styles/componentes.css">
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@400;500&display=swap" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/8a5e7a4ec6.js" crossorigin="anonymous"></script>

<title>ID Socorro</title>

<!--Bootstrap -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- Checkbox? -->

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>

	<?php include_once 'Components/header.php' ?>

	<div class="Supra_Body">
		<div class="Dados_Gestor">
			<h2>Olá, <?php echo $_SESSION['nome'];?> !</h2>
			<h5> Nome da Escola <!-- <?php echo $_SESSION['lotacao'];?> --></h5>
		</div>
		<div class="Linhas_Dados">
				<div class="Barra_Container">
					<span><i class="fa-solid fa-magnifying-glass"></i></span>
					<input class="Barra_Pesquisa" type="text">
				</div>

				<hr>

				<div class="Adicionar_Btn_Container">
					<a href="#addEmployeeModal" class="Adicionar_Btn" data-toggle="modal"> <span>Adicionar</span></a>
				</div>

				<div class="Campo_Dados">
					<!--Texto Fantasia para demonstracao -->

				</div>

		</div>
	</div>

	<!-- Modal Cadastro -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="Modal-Content">
				<form>
					
				<div class="Modal-Header">						
						<h4 class="modal-title">[Fetch de dados do aluno]</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
	
					<div class="modal-body">
						
						<div class="Corpo_Top">
							<div class="Profile_Img_Spot">
								<img class="Profile_Img" src="img/profile_pic_default.png" alt="">
							</div>
						</div>
						<!-- Como o projeto inicial não necessita de outras paginas preferi nao aplicar o dropdown agora -->
						

						<div class="form-group">
							<div class="Amarra">
								<div id="escolas">
									<label>Unidade de Ensino:</label><br>
									<input nome="escola" type="text">
								</div>
	
								<div id="codigoinep">
									<label>Código INEP:</label><br>
									<input nome="inep" type="text">
								</div>
							</div>

							<div class="Amarra">
								<div id="nomesocial">
									<label>Nome Social (RES. Nº 02/2019/COMESO):</label><br>
									<input nome="nomesocial" type="text">
								</div>
							</div>

							<div class="Amarra">
								<div id="naturalidade">
									<label>Naturalidade:</label><br>
									<input nome="naturalidade" type="text">
								</div>
								<div id="nacionalidade">
									<label>Nacionalidade:</label><br>
									<input nome="nacionalidade" type="text">
								</div>
							</div>

							<div class="Amarra">
								<div id="data de nascimento">
									<label>Data de Nascimento:</label><br>
									<input class="Data" type="data" required name="dia" size="1" maxlength="2" id="dia"> 
                                    <input class="Data" required name="mes" size="1" maxlength="2" id="mes"> 
                                    <input class="Data" required name="ano" size="3" maxlength="4" id="ano">
									<i class="far fa-calendar-alt"></i>
								</div>

								<div id="sexo">
									<label for="sexo">Sexo:</label><br>
									<select name="sexo">
										<option value="">-</option>
										<option value="m">M</option>
										<option value="f">F</option>
									</select>
								</div>
							</div>

							<div class="Amarra">
								<div id="filiacao">
									<label>Filiação:</label><br>
									<input name="mae" type="text">
									<input id="filiacao_pai" name="pai" type="text">
								</div>
							</div>

							<div class="Amarra">
								<div id="endereco">
									<label>Endereço:</label><br>
									<input name="endereco" type="text">
								</div>
							</div>

							<div class="Amarra">
								<div id="cidade">
									<label>Cidade:</label><br>
									<input name="cidade" type="text">
								</div>

								<div id="uf">
									<label for="uidadefederativa">UF:</label><br>
									<select style="background-color: white" name="uidadefederativa"> 
                                        <option value=""></option>
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
								</div>
							</div>

							<div class="Amarra">
								<div id="cep">
									<label>Cep:</label><br>
									<input type="text" name="cep" size="8" maxlength="8"> 
								</div>
							</div>
							
							<div class="Amarra">
								<div id="telefone1">
									<label>Telefone 1:</label><br>
									<input type="text" name="telefone1" size="11" maxlength="11">
								</div>

								<div id="telefone2">
									<label>Telefone 2:</label><br>
									<input type="text" name="telefone2" size="11" maxlength="11">
								</div>
							</div>

							<div class="Amarra">
								<div id="cpf">
									<label>CPF 1:</label><br>
									<input type="text" name="cpf" size="11" maxlength="11">
								</div>

								<div id="rg">
									<label>RG:</label><br>
									<input type="text" name="telefone2" size="7" maxlength="7">
								</div>
							</div>

							<div class="Amarra">
								<div id="orgaoexpedidor">
									<label>Orgão Exp:</label><br>
									<input name="orgaoexp" type="text">
								</div>

								<div id="uf">
									<label for="uidadefederativa">UF:</label><br>
									<select style="background-color: white" name="uidadefederativa"> 
                                        <option value=""></option>
                                        <option value="ac">Acre</option> 
                                        <option value="al">Alagoas</option> 
                                        <option value="am">Amazonas</option> 
                                        <option value="ap">Amapá</option> 
                                        <option value="ba">Bahia</option> 
                                        <option value="ce">Ceará</option> 
                                        <option value="df">Distrito Federal</option> 
                                        <option value="es">Espírito Santo</option> 
                                        <option value="go">Goiás</option> 
                                        <option value="ma">Maranhão</option> 
                                        <option value="mt">Mato Grosso</option> 
                                        <option value="ms">Mato Grosso do Sul</option> 
                                        <option value="mg">Minas Gerais</option> 
                                        <option value="pa">Pará</option> 
                                        <option value="pb">Paraíba</option> 
                                        <option value="pr">Paraná</option> 
                                        <option value="pe">Pernambuco</option> 
                                        <option value="pi">Piauí</option> 
                                        <option value="rj">Rio de Janeiro</option> 
                                        <option value="rn">Rio Grande do Norte</option> 
                                        <option value="ro">Rondônia</option> 
                                        <option value="rs">Rio Grande do Sul</option> 
                                        <option value="rr">Roraima</option> 
                                        <option value="sc">Santa Catarina</option> 
                                        <option value="se">Sergipe</option> 
                                        <option value="sp">São Paulo</option> 
                                        <option value="to">Tocantins</option> 
                                    </select>
								</div>
							</div>

							<div class="Amarra">
								<div id="nis">
									<label>NIS:</label><br>
									<input type="text" name="nis"> 
								</div>
							</div>

							<div class="Amarra" 
								style="
								display:flex;
								justify-content: center;"
							>
								<h4>[Upload de arquivo ?]</h4>
							</div>

							<div class="Amarra">
								<div id="id_inep">
									<label>ID(Código do INEP):</label><br>
									<input type="text" name="id_inep">
								</div>							
							</div>
	
							<div class="Amarra">
								<div id="data_matricula">
									<label>Data de Matricula:</label><br>
									<input class="Data" type="data" name="dia_matricula" size="1" maxlength="2" id="dia"> 
									<input class="Data" name="mes_matricula" size="1" maxlength="2" id="mes"> 
									<input class="Data" name="ano_matricula" size="3" maxlength="4" id="ano">
									<i class="far fa-calendar-alt"></i>
								</div>
							</div>

						</div>
					</div>

						
					<div class="Modal-Footer">
						<input type="submit" class="Confirmar_Edit" value="Confirmar Edição">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Editar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nome</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Endereço</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Escola</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="form-group">
							<label>Turno</label>
							<input type="text" class="form-control" required>
						</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-info" value="Save">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Alunos</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Tem certeza de que deseja excluir esses registros?</p>
						<p class="text-warning"><small>Sua ação não pode ser desfeita.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include_once 'Components/footer.php' ?>
</body>
</html>

<?php
	}
?>