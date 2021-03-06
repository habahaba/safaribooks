<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>

				<li><?php echo $this->Html->link(__('List Carts'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'users', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
				
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="cart form">
		<h1>Add Cart</h1>
		<?php echo $this->Form->create('Cart'); ?>
		<table align='left' border=0>	
			<?php
				echo $this->Formadd->inputAdd('usrID', array('label' => 'Customer ID', 'size' => '5%', 'default' => $userId));
				echo $this->Formadd->inputAdd('bkID', array('label' => 'Book ID', 'default' => $bookId, 'size' => '5%', 'readonly' => 'readonly'));
				echo $this->Formadd->inputAdd('crtQnty', array(
					'label' => 'Quantity',
					'error' => false,
					'size' => '5%',
					'type' => 'text',
					'maxlength' => '3',
					'onkeypress' => 'return isNumKey(event)'));
				echo $this->Formadd->inputAdd('crtShip', array(
					'label' => 'Shipment Price',
					'error' => false,
					'size' => '5%',
					'type' => 'text',
					'maxlength' => '7',
					'onkeypress' => 'return isDecKey(event)',
					'onblur' => 'convDecimal(id)'));
			?>
			<tr><td colspan="3"><div class="cleaner_with_image" /></td></tr>
            <tr>
                <td colspan="3" align="left">
                    <div class="submit">
                        <hr><br>
                        <?php echo $this->Form->submit(__('Submit'), array('div' => false)); ?>
                    </div>
                    <!-- <?php echo $this->Form->end(__('Submit')); ?> -->
                </td>
            </tr>			
		</table>
	</div>
</div>

