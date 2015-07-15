	
	<?php
	function __autoload($class_name){
		require_once  "sys/" .$class_name . '.php';
	}
	?>
	<?php 	
		$user = new Usuario();
		$user->setId(1);
		$user->setUsuario("retest");
		$user->setSenha("reteste");
		
		//if($user->insert()){
		//	echo "yes";
		//}else{
		//	echo "no";
		//}
 	?>
	<?php 
		$result = $user->find(2);

		echo $result->usuario;
	?>

		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>Usuario:</th>
					<th>Senha:</th>
					
				</tr>
			</thead>
			
			<?php foreach($user->findAll() as $value): ?>

			<tbody>
				<tr>
					
					<td><?php echo $value->usuario; ?></td>
					<td><?php echo $value->senha; ?></td>
					<td>
						<?php echo "<a href='index.php?acao=editar&id=" . $value->id . "'>Editar</a>"; ?>
						<?php echo "<a href='index.php?acao=deletar&id=" . $value->id . "' onclick='return confirm(\"Deseja realmente deletar?\")'>Deletar</a>"; ?>
					</td>

				</tr>
			</tbody>

			<?php endforeach; ?>
		</table>