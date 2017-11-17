<h3>Sua Lista de Amigos</h3>
<table class="table table-striped">
	<thead>
	    <tr>        
	        <th>Nome</th>
	        <th>E-mail</th>
	        <th>Telefone</th>
	        <th>Tipo</th>
	        <th>Operadora</th>
	        <th>Ações</th>
	    </tr>    
	</thead>
	<tbody>
    <?php foreach ($contacts as $contact): ?>
    <tr>        
        <td><?php echo $contact['Contact']['name']; ?></td>
        <td><?php echo $contact['Contact']['email']; ?></td>
        <td><?php echo $contact['Contact']['phone']; ?></td>
        <td><?php if($contact['Contact']['type'] > 1) {
        		echo 'Celular';
        	} else { echo 'Residencial'; } ?></td>
        <td><span class="label label-warning"><?php echo $contact['Contact']['operator']; ?></span></td>
        <td>
        <?php echo $this->Html->link('Editar', array('action' => 'edit', $contact['Contact']['id']));?> | 
        <?php echo $this->Form->postLink(
                'Remover',
                array('action' => 'delete', $contact['Contact']['id']),
                array('confirm' => 'Confirma a exclusão do contato ' . $contact['Contact']['name'] . '?')
        )?>
        </td>
            
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<p>
	<?php 
		echo $this->Html->link('Adicionar Contato','/contacts/new',array('class' => 'btn btn-primary'));		
	?>
</p>