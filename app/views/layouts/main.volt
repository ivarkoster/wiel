 <!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
          	</button>
			{{ link_to('index', 'Project name', 'class':'navbar-brand') }}

        </div>
        {{ elements.getMenu() }}
	</div>
</div>

<div class="container">

	{{ content() }}

</div> <!-- /container -->
