<div class="container">
	<form class="form-signin">
		<h2 class="form-signin-heading">Login</h2>
		<input type="text" class="input-block-level"
			placeholder="Email address"> <input type="password"
			class="input-block-level" placeholder="Password"> <a href="#"
			title="Esqueci minha senha">Esqueci minha senha</a> <br /> <a
			href="#myModal" title="Cadastre-se"  data-toggle="modal" data-target="#myModal">Cadastre-se</a>
		   <button class="btn btn-large btn-primary botaoLogin" type="submit">Login</button>
	</form>
         
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Cadastre-se</h3>
    </div>
    <div class="modal-body">
    	<form name="formCadastro">
    		<label for="email">E-mail</label>
    		<input type="text" name="email" value="" size="60" />
    		<br />
    		<label for="senha">Senha</label>
    		<input type="password" name="senha" id="senha" />
    		<label for="repetir-senha">Repetir senha:</label>
    		<input type="password" name="repetir-senha" id="repetir-senha" />
    	</form>
    </div>
    <div class="span4 msg-login">Cadastre-se para ter acesso aos simulados para a certificação Zend Engineer PHP 5.3</div>
    <br style="clear:both;" />
    <div class="modal-footer">
	    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
	    <button class="btn btn-primary">Enviar</button>
    </div>
    </div>
</div>
