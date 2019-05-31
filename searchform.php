<form role="search" method="get" class="search-posts" action="<?php echo esc_url( home_url( '/' ) ) ?>">
	<label class="form-label">
		<input type="search" class="search-posts__field" placeholder="<?php echo esc_attr_x( 'Wyszukaj na blogu&hellip;', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
	</label>
	<button type="submit" class="search-posts__submit">
        <i class="search-icon F-SEARCH-2"></i>
    </button>
</form>