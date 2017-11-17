<div class="col-md-6">
	<h3>Novo Contato</h3>

	<form name="contact" method="POST" action="/contactsbook/contacts/add">
	  <div class="form-group">
	    <label for="name">Nome</label>
	    <input type="text" name="name" class="form-control" id="name" placeholder="Nome">
	  </div>
	  <div class="form-group">
	  	<div class="row">
		  	<div class="col-md-6">
			    <label for="email">E-mail</label>
	    		<input type="email" name="email" class="form-control" id="email" placeholder="E-mail">
		    </div>
		    <div class="col-md-6">
			    <label for="phone">Telefone</label>
			    <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefone">
		    </div>
	    </div>
	  </div>	  
	  <div class="form-group">
	  	<div class="row">
		  	<div class="col-md-6">
			    <label for="type">Tipo</label>
		    	<select class="form-control" name="type" id="type">
		    		<?php foreach ($types as $value => $type): ?>
		    			<option value="<?php echo $value ?>"><?php echo $type ?></option>
		    		<?php endforeach; ?>			    	
			    </select>
		    </div>
		    <div class="col-md-6">
		    	<label for="type">Operadora</label>
		    	<select class="form-control" name="operator" id="operator">
		    		<option value="">--</option>
			    	<?php foreach ($operators as $operator): ?>
		    			<option value="<?php echo $operator ?>"><?php echo $operator ?></option>
		    		<?php endforeach; ?>			    	
			    </select>
		    </div>
	  </div>
	  </div>
	  <p>
	  	<button type="submit" class="btn btn-primary">Adicionar</button>
	  </p>
	</form>
</div>