
<div class = "navigation-searchbar">

	<form role="search" id= "search-toggle" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
		
		<fieldset>

			<label>
				<input type="search" id= "input-focus" class="search-field" placeholder="TYPE AND HIT ENTER" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
			</label>
		
			<span class="icon-search" aria-hidden="true"></span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
			
		</fieldset>

	</form>
	
	<button id="toggle-searchbar" onClick=toggleSearch();><i class="fas fa-search"></i></button>

</div>