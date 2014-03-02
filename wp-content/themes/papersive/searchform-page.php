<form role="search" method="get" id="searchform-page" action="<?php echo home_url( '/' ); ?>">
    <div> 
    	<?php
    		$searchquery = get_search_query();
    		$upload_dir = wp_upload_dir();
    	?>
        <input id="search-input-page" type="text" value="<?php echo $searchquery; ?>" name="s" id="s" />
        <input  id="submit-search-button-page" type="submit" id="searchsubmit" value="SEARCH" /> 

    </div> 
</form>