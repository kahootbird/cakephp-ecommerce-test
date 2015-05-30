	<div class="section values">
		<div class="container">
      <h2 class="title">A dead simple, responsive boilerplate.</h2>
	
		</div>
	</div>
  <?php
  /*
  echo $this->Html->image('values-bg.jpg', array('alt' => 'CakePHP'));
  */
  ?>
  </br>
  <div class="container">
    <section class="header">

    
      <div class="value-props row">
        
		<?php
		foreach ($stores as $store){
		
		
		?>
		<div class="four columns value-prop">
	      	<?php   echo $this->Html->image(('items_for_sale/item' . ( ($store->id)) . '.png'), array('class' => 'nah')); ?>
         
		  <?php 
		  echo $store->item_name 
		  ?> </br><?php
		  echo $store->item_price
		  ?>$
        </div>
		<?php
		}
		?>
		
		
		
      </div>
	  </div>
	  <br/><br/><br/>