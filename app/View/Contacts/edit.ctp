<div class="col-md-6">
	<h3>Atualizando o contato: <b><?php echo $contact['Contact']['name'] ?></b></h3>


	<form name="contact" method="POST" action="/contactsbook/contacts/edit">
	  <input type="hidden" name="id" value="<?php echo $contact['Contact']['id']; ?>">
	  <div class="form-group">
	    <label for="name">Nome</label>
	    <input type="text" name="name" class="form-control" id="name" value="<?php echo $contact['Contact']['name'] ?>">
	  </div>
	  <div class="form-group">
	  	<div class="row">
		  	<div class="col-md-6">
			    <label for="email">E-mail</label>
	    		<input type="email" name="email" class="form-control" id="email" value="<?php echo $contact['Contact']['email'] ?>">
		    </div>
		    <div class="col-md-6">
			    <label for="phone">Telefone</label>
			    <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $contact['Contact']['phone'] ?>">
		    </div>
	    </div>
	  </div>  

	  <div class="form-group">
	  	<div class="row">
		  	<div class="col-md-6">
			    <label for="type">Tipo</label>
		    	<select class="form-control" name="type" id="type">
		    		<?php foreach ($types as $value => $type): ?>
		    			<?php if(intval($contact['Contact']['type']) == intval($value)) { ?>
		    				<option value="<?php echo $value ?>" selected><?php echo $type ?></option>
		    			<?php } else { ?>
		    				<option value="<?php echo $value ?>"><?php echo $type ?></option>
						<?php } ?>		    				
		    		<?php endforeach; ?>			    	
			    </select>
		    </div>
		    <div class="col-md-6">
		    	<label for="type">Operadora</label>		    	
		    	<select class="form-control" name="operator" id="operator">
		    		<option value="">--</option>
			    	<?php foreach ($operators as $operator): ?>			    		
			    		<?php if(strtolower($contact['Contact']['operator']) == strtolower($operator)) { ?>
		    				<option value="<?php echo $operator ?>" selected><?php echo $operator ?></option>
		    			<?php } else { ?>
		    				<option value="<?php echo $operator ?>"><?php echo $operator ?></option>
						<?php } ?>			    			
		    		<?php endforeach; ?>			    	
			    </select>
		    </div>
	  </div>
	  </div>
	  <p>
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
	  </p>
	</form>
</div>