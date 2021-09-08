<?php 
/*
Template name: Contato
*/
get_header(); 
?>
<main class="page page-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-contact">
				<form action="" method="post" id="form-contact">
					<input type="text" name="name" id="name" class="input-contato" placeholder="Nome">
					<input type="text" name="email" id="email" class="input-contato" placeholder="E-mail">
					<input type="text" name="phone" id="phone" class="input-contato" placeholder="Telefone">
					<textarea name="message" id="message" class="input-contato" cols="30" rows="5" placeholder="Digite sua mensagem"></textarea>
					<input type="hidden" name="action" value="contact">
					<input type="submit" class="button-contato">
					<br />
					<div id="response-contact"></div>
				</form>
			</div>
		</div>
	</div>
</main>
<?php 
get_footer(); 
?>