<?php

$page="SISQ";
include("header.php");
?>
<!-- Botão de cadastrar novo usuário -->
<div id="cadastrar"><a href="index.php?acao=logout" title="Clique aqui para sair do sistema">Logout &raquo;</a></div>

	<?php

		if($nivel == 2){ ?>
		<p><br></p>
		<p><br></p>
		<p><br></p><center>
		<table width="80%" border="1" cellpadding="0" >
			<tr>
				<th>Nome</th>
				<th>Status</th>
				<th>Ação</th>
			</tr>	
			<?php
				$buscarusuarios=pg_query("SELECT * FROM usuarios WHERE nivel=1 ORDER BY id DESC");
				if (pg_num_rows($buscarusuarios) == 0){
					echo "Nenhum Usuario Cadastrado no Sistema";	
				}else{
					while($linha=pg_fetch_array($buscarusuarios)){
			?>
			<tr>
				<td><?php echo $linha["nome"]; ?></td>
				<td align="center"><?php echo $linha["status"]; ?></td>
				<td align="center"><?php
					$id = $linha["id"];
					if ($linha["status"] == 0){
							echo "<a href='index.php?acao=aprovar&amp;id=$id'>Aprovar</a>";
						}else{
							echo "<a href='index.php?acao=bloquear&amp;id=$id'>Bloquear</a>";
						}
					?>
					</td>
			</tr>
			<?php 
					}
				}	
			?>
		</table></center>
	<?php
		}else{ ?>
		<p><br></p>
		<p><br></p>
		<p><br></p>
		<?php 
			include("abertura.php");
		?>
	<?php	
		}
	?>
	<br />
</body>
</html>