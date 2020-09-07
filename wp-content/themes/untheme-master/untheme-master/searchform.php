<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group mb-3">
	  <input type="text" class="form-control" name="s"  value="<?php echo get_search_query(); ?>">
	  <div class="input-group-append">
	    <button class="btn btn-primary" type="submit" value="Search">Search</button>
	  </div>
	</div>
</form>