<?php include("includes/db.php"); ?>

<div class="panel panel-default sidebar-menu">
	<div class="panel-heading">
		<h3 class="panel-title">Product Categories</h3>
	</div>
	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked category-menu column">
			<?php
				
			  getPCats();

			?>
		</ul>
	</div>
</div>

