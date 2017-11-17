<?php

$cakeDescription = __d('ContactsBook', 'Agenda Telefônica ');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('custom');

		echo $this->Html->script('jquery.min');
		echo $this->Html->script('jquery.maskedinput.min');
		echo $this->Html->script('scripts');
		echo $this->Html->script('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/contactsbook/contacts">Agenda Telefônica</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <form name="search" method="POST" action="/contactsbook/contacts/search" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" name="name" placeholder="Nome" class="form-control form-control-xs">
            </div>            
            <button type="submit" class="btn btn-primary">Pesquisar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>    

    <div class="container">      
    	<div class="row">
        
        <?php echo $this->Flash->render(); ?>
        <?php echo $this->fetch('content') ?>

    	</div>

    	<hr>
	
		<footer>
			<p>&copy; Simples Agenda Telefônica.</p>
	  	</footer>
  	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
