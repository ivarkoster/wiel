 <!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
          	</button>
			<?php echo Phalcon\Tag::linkTo(array('index', 'Project name', 'class' => 'navbar-brand')); ?>

        </div>
        <?php echo $this->elements->getMenu(); ?>
	</div>
</div>

<div class="container">

	<?php echo $this->getContent(); ?>

</div> <!-- /container -->
