<?php $this->inc('elements/header.php');?>

<div class="row">
		    <div class="span10">
		        <div class="hero-unit">
				  
				  <?php
		 $a = new Area ("Contem");
		 $a -> display($c);
		 ?> 	
				  
				</div>
		      		    
		    </div>
		    <div class="span2">
		    	<div class="well well-small">
							 
					<?php
		 $a = new Area ("Lateral");
		 $a -> display($c);
		 ?> 	
				</div>
		    </div>
	    </div>
		 <div class="row">


<?php $this->inc('elements/footer.php');?>