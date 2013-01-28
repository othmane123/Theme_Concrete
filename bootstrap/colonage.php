<?php $this->inc('elements/header.php'); ?>
		
	<div class="row">
		    <div class="span4">
		        <div class="hero-unit">
				  <h1>Colonne 1</h1>
				 <?php $a = new Area('Lateral');
					 $a->display($c);
					 ?>
				  
				 
				</div>
		      
		      
	    </div>
		<div class="span4">
		        <div class="hero-unit">
				  <h1>Colonne 2</h1>
				
				  <?php $a = new Area('Lateral');
					 $a->display($c);
					 ?>
				</div>
		      
		      
	    </div>
		<div class="span4">
		        <div class="hero-unit">
				 <h1>Colonne 3</h1>
				 
				 <?php $a = new Area('Lateral');
					 $a->display($c);
					 ?>
				</div>
		      
		      
	    </div>
 </div>
 <div class="row">
		    <div class="span12">
		        <div class="hero-unit">
				  <center><h1>Colonne centrale</h1></center>
				  <?php
				 $a = new Area('contenu');
				  $a->display($c);
				  ?>
				</div>
		      
		      
	    </div>
		
 </div>
 
			
				
<?php $this->inc('elements/footer.php'); ?>