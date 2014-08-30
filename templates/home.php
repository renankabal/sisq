<?php

$page="PAINEL ADM";
include("header.php");
?>
<!-- Botão de cadastrar novo usuário -->
<div id="cadastrar"><a href="index.php?acao=logout" title="Clique aqui para sair do sistema">Logout &raquo;</a></div>
<!-- Div do menu de logar -->
<div id="login" class="form bradius">
<!-- Imagem do sistema -->
<!-- <center><img src="imagens/logo.png"></center> -->
	<!-- <div class="message"  style="<?php echo $display; ?>"></div> -->
	<!-- <div class="acomodar"> -->
	<?php
		if($nivel == 2){ ?>

		<table width="100%" border="1">
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
				<th><?php echo $linha["nome"]; ?></th>
				<th><?php echo $linha["status"]; ?></th>
				<th><?php
					$id = $linha["id"];
					if ($linha["status"] == 0){
							echo "<a href='index.php?acao=aprovar&amp;id=$id'>Aprovar</a>";
						}else{
							echo "<a href='index.php?acao=bloquear&amp;id=$id'>Bloquear</a>";
						}
					?></th>
			</tr>
			<?php 
					}
				}	
			?>
		</table>
	<?php
		}else{ ?>
		<center>
		<h1>Usuário Comum</h1>
		<h1>Conteúdo do formulario aqui</h1>
		</center>
	<?php	
		}
	?>
	<!-- acomodar -->
	<!-- </div> -->
	<br />
	<!-- fechamento login -->
</div>
</body>
</html>