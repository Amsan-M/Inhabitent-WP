

<form role="search" id= "search-toggle" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<label>
			<input type="search" id= "input-focus" class="search-field" placeholder="TYPE AND HIT ENTER" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<!-- <button class="search-submit"> -->
			<span class="icon-search" aria-hidden="true">
				
			</span>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<!-- </button> -->
	</fieldset>
</form>
<button id="toggle-searchbar" onClick=toggleSearch();>logo</button>