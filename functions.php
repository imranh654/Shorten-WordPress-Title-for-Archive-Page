function short_woocommerce_product_titles_words( $title, $id ) {

	if ( ( is_shop() || is_product_tag() || is_product_category() ) && get_post_type( $id ) === 'product' ) {
	
		$title_words = explode(" ", $title);
		
		if ( count($title_words) > 5 ) { // Kicks in if the product title is longer than 5 words
		
			// Shortens the title to 5 words and adds ellipsis at the end
			return implode(" ", array_slice($title_words, 0, 5)) . '...';
			
		} 
		else {
		
			return $title; // If the title isn't longer than 5 words, it will be returned in its full length without the ellipsis
			
		}
	}
	else {
	
		return $title;
		
	}
  
}

add_filter( 'the_title', 'short_woocommerce_product_titles_words', 10, 2 );
