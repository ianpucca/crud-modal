<!doctype html>
<html lang="pt-BR">
  <head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>    

    <style type="text/css">body {background-color: #f9f9f9;} input, button {margin-top: 5px;}</style>

    <title>Gerenciamento de Usuários</title>
  </head>
  <body>

  	<?php require 'config.php'; ?>

  	<div class="container-fluid">
  		<div class="col-md-12 mb-2 mt-2">
  			<div class="row">
  				<button class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Adicionar novo usuário</button>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Nome</th>
				      <th scope="col">E-mail</th>
				      <th scope="col">Senha</th>
				      <th scope="col">Opções</th>
				    </tr>
				  </thead>
				  <tbody>
			  		<?php 

			  		$listaruruarios = "SELECT * FROM usuarios ORDER BY id DESC";
			  		$listaruruarios = $pdo->query($listaruruarios);

			  		if ($listaruruarios->rowCount() > 0) {
			  			foreach ($listaruruarios->fetchAll() as $usuario) {
			  				echo '<tr>';
			  				echo '<td>'.$usuario['nome'].'</td>';
			  				echo '<td>'.$usuario['email'].'</td>';
			  				echo '<td>'.$usuario['senha'].'</td>';
			  				echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#modal2'.$usuario['id'].'">Editar</button>		  			
				      	 			  <a href="excluir.php?id='.$usuario['id'].'"><button onclick="return confirm(\'Tem certeza que deseja excluir?\');" type="button" class="btn btn-danger">Excluir</button></a></td>';			  			
			  				echo '<tr>';

							echo '<!-- Modal Editar -->

								<div class="modal fade" id="modal2'.$usuario['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Editar usuário</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
									    <form action="editar.php" method="post" class="form-signin">
									      <input id="id" class="form-control" value="'.$usuario['id'].'" name="id" type="hidden"> 									    
									      <input type="text" class="form-control" placeholder="nome" name="nome" value="'.$usuario['nome'].'" required autofocus>    
									      <input type="email" class="form-control" placeholder="e-mail" name="email" value="'.$usuario['email'].'" required>
									      <button class="btn btn-lg btn-primary btn-block" type="submit">Atualizar cadastro</button>
									    </form>
								      </div>
								    </div>
								  </div>
								</div>	

								<!-- Modal Editar -->';		  				
			  			}
			  		}
			  		?>
				  </tbody>
				</table>
			</div>	
		</div>	
	</div>

	<!-- Modal Adicionar -->

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">	      	
			<form method="post" action="inserir.php" class="form-signin">
				<input type="text" class="form-control" placeholder="nome" name="nome" required autofocus>      
				<input type="email" class="form-control" placeholder="e-mail" name="email" required>
				<input type="password" class="form-control" placeholder="senha" name="senha" required>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Cadastrar novo usuário</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Adicionar -->		

  </body>
</html>