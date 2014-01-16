<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Carts'), array('controller' => 'carts', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('controller' => 'coupons', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Procures'), array('controller' => 'procures', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Wishlists'), array('controller' => 'wishlists', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="books form">
		<h1>Search</h1>
		<table align="center">
			<?php  
		    	echo $this->Form->create("Book",array('action' => 'search')); 
		    	echo $this->Form->input("q", array('label' => 'Search for')); 
		    	echo $this->Form->end("Search"); 
			?> 
		</table>
		
	</div>
	
</div>